<?php

namespace Serbinario\Bundles\UserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Serbinario\Bundles\UserBundle\Entity\Perfil;
use Serbinario\Bundles\UserBundle\Entity\Projetos;
use Serbinario\Bundles\UserBundle\Form\UserType;
use Serbinario\Bundles\UtilBundle\Util\GridClass;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Serbinario\Bundles\UtilBundle\Util\ErroList;
use Serbinario\Bundles\UserBundle\Entity\Role;
use Respect\Validation\Validator as v;
use Serbinario\Bundles\UserBundle\Entity\User;

class UserController extends FOSRestController
{
    /**
     * @Post("/grid", name="grid_users")
     */
    public function gridAction(Request $request)
    {
        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            $columns = array("a.username",
                "a.email"
            );
            //var_dump($request->request->all());exit;
            $entityJOIN = array();
            $eventosArray         = array();
            $parametros           = $request->request->all();
            $entity               = "Serbinario\Bundles\UserBundle\Entity\User";
            $columnWhereMain      = "";
            $whereValueMain       = "";
            $whereFull            = "";

            $gridClass = new GridClass($this->getDoctrine()->getManager(),
                $parametros,
                $columns,
                $entity,
                $entityJOIN,
                $columnWhereMain,
                $whereValueMain,
                $whereFull);

            $resultCliente  = $gridClass->builderQuery();
            $countTotal     = $gridClass->getCount();
            $countEventos   = count($resultCliente);

            for($i=0;$i < $countEventos; $i++)
            {
                $eventosArray[$i]['DT_RowId']   =  "row_".$resultCliente[$i]->getId();
                $eventosArray[$i]['id']         =  $resultCliente[$i]->getId();
                $eventosArray[$i]['username']   =  $resultCliente[$i]->getUsername() ?? "Login não informado";
                $eventosArray[$i]['email']      =  $resultCliente[$i]->getEmail() ?? "Email não informado";
            }

            //Se a variável $sqlFilter estiver vazio
            if(!$gridClass->isFilter()){
                $countEventos = $countTotal;
            }

            $columns = array(
                'draw'              => $parametros['draw'],
                'recordsTotal'      => "{$countTotal}",
                'recordsFiltered'   => "{$countEventos}",
                'data'              => $eventosArray
            );

            #Retorno
            return new Response($serializer->serialize($columns, "json"));
        }  catch (\Throwable $e) {
            #Setando a mensagem
            $mensagem = $this->get('translator')->trans('internal_error');

            #Retorno
            return new Response($serializer->serialize([$e,
                'success' => false,
                'message' => $mensagem],
                "json"
            ));
        }
    }

    /**
    * @Get("/get/{id}", name="_users")
    */
    public function getAction(Request $request, $id)
    {
        #Recuperando os serviços
        $userRN     = $this->get("user_rn");
        $serializer = $this->get("jms_serializer");

        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            #Setando a mensagem
            $mensagem = $this->get('translator')->trans('request_error');

            #Retorno
            return new Response($serializer->serialize([array(),
                'success' => 'false',
                'message' => $mensagem],
                "json"
            ));
        }

        #Tratamento de exceções
        try {
            #Recuperando a alunos solicitada
            $user = $userRN->find(User::class, $id);

            #Retorno
            return new Response($serializer->serialize([$user,
                'success' => true,
                'message' => ''],
                "json"
            ));
        }  catch (\Throwable $e) {
            #Setando a mensagem
            $mensagem = $this->get('translator')->trans('usuario.error_get_usuario');

            #Retorno
            return new Response($serializer->serialize([$e,
                'success' => 'false',
                'message' => $mensagem],
                "json"
            ));
        }
    }

    /**
     * @Get("/new")
     */
    public function newUsersAction()
    {
        try {
            #Recuperando o entity manager
            $manager = $this->getDoctrine()->getManager();

            #Recuperando os serviços
            $serializer = $this->get("jms_serializer");

            #Recuperando os dados pre cadastrados
            $result = [
                'perfis'   => $manager->getRepository(Perfil::class)->findAll(),
                'projetos' => $manager->getRepository(Projetos::class)->findAll(),
            ];

            #Retorno
            return new Response($serializer->serialize([$result,
                'success' => true,
                'message' => ''],
                "json"
            ));
        } catch (\Throwable $e) {
            #Setando a mensagem
            $mensagem = $this->get('translator')->trans('usuarios.error_pre_load');

            #Retorno
            return new Response($serializer->serialize([$e,
                'success' => false,
                'message' => $mensagem],
                "json"
            ));
        }
    }

    /**
     * @Post("/save", name="_user")
     */
    public function saveAction(Request $request)
    {
        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");
        $userRN     = $this->get("user_rn");
        $perfilRN   = $this->get('perfil_rn');
        $roleRN     = $this->get('role_rn');
        $errors     = $this->get("form_erros");

        #Verificando o método http
        if ($request->getMethod() === "POST") {
            #Criando o formulário
            $form   = $this->createForm(UserType::class);

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando o objeto alunos
                $user    = $form->getData();
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($encoded);

                #Recuperando os perfís e permissões
                $permissoes    = $request->request->get("permissao");
                $perfisRequest = $request->request->get("perfil");
                $permissoes    = $permissoes == null ? array() : $permissoes;
                $perfisRequest = $perfisRequest == null ? array() : $perfisRequest;

                #Tratamento de exceções
                try {
                    #Perfís
                    foreach ($perfisRequest as $perfil) {
                        $objPerfil = $perfilRN->find(Perfil::class, $perfil);

                        if ($objPerfil) {
                            $user->addPerfi($objPerfil);
                        }
                    }

                    #Permissões
                    foreach ($permissoes as $permissao) {
                        $role = $roleRN->findByRole(Role::class, $permissao);

                        if ($role) {
                            $user->addRole($role[0]);
                        } else {
                            $newRole = new Role();
                            $newRole->setRole($permissao);
                            $user->addRole($newRole);
                        }
                    }

                    #Atualizando o objeto
                    $result = $userRN->save($user);

                    #Setando a mensagem
                    $mensagem = $this->get('translator')->trans('usuarios.sucess_save');

                    #Retorno
                    return new Response(
                        $serializer->serialize([$result,
                            'success' => true,
                            'message' => $mensagem],
                            "json"
                        ));
                }  catch (\Throwable $e) {
                    #Setando a mensagem
                    $mensagem = $this->get('translator')->trans('usuarios.error_save');

                    #Retorno
                    return new Response($serializer->serialize([$e,
                        'success' => false,
                        'message' => $mensagem],
                        "json"
                    ));
                }
            } else {
                #Setando a mensagem
                $mensagem = $this->get('translator')->trans('usuarios.error_form_invalid');

                #Retorno
                return new Response(
                    $serializer->serialize([$errors->serializeFormErrors($form, true, true),
                        'success' => false,
                        'message' => $mensagem,
                        'request' => $request->request->all()],
                        "json"
                    ));
            }
        }

        #Setando a mensagem
        $mensagem = $this->get('translator')->trans('request_error');

        #Retorno
        return new Response($serializer->serialize([array(),
            'success' => false,
            'message' => $mensagem],
            "json"
        ));
    }

    /**
     * @Post("/update", name="_user")
     */
    public function updateAction(Request $request)
    {
        #Recuperandoparametros da requisição
        $id = $request->request->get("idUser");

        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");
        $userRN     = $this->get("user_rn");
        $perfilRN   = $this->get('perfil_rn');
        $roleRN     = $this->get('role_rn');
        $errors     = $this->get("form_erros");

        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            #Setando a mensagem
            $mensagem = $this->get('translator')->trans('request_error');

            #Retorno
            return new Response($serializer->serialize([array(),
                'success' => false,
                'message' => $mensagem],
                "json"
            ));
        }

        #Recuperando o objeto alunos
        $objUser    = $userRN->find(User::class, $id);

        #Verificando se o objeto alunos existe
        if(!isset($objUser)) {
            #Setando a mensagem
            $mensagem = $this->get('translator')->trans('request_error');

            #Retorno
            return new Response($serializer->serialize([array(),
                'success' => false,
                'message' => $mensagem],
                "json"
            ));
        }

        $oldPassword = $objUser->getPassword();

        #Verficando se é uma submissão
        if ($request->getMethod() === "POST") {
            #Criando o formulário
            $form   = $this->createForm(UserType::class, $objUser);

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando os dados
                $user = $form->getData();

                #Limpadndo os arrays
                $user->clearRoles();
                $user->clearPerfis();

                #Trabalhando com a nova senha
                if ($user->getPassword() != "") {
                    $encoder = $this->container->get('security.password_encoder');
                    $encoded = $encoder->encodePassword($user, $user->getPassword());
                    $user->setPassword($encoded);
                } else {
                    $user->setPassword($oldPassword);
                }

                #Recuperando os perfís e permissões
                $permissoes    = $request->request->get("permissao");
                $perfisRequest = $request->request->get("perfil");
                $permissoes    = $permissoes == null ? array() : $permissoes;
                $perfisRequest = $perfisRequest == null ? array() : $perfisRequest;

                #Tratamento de exceções
                try {
                    #Perfís
                    foreach ($perfisRequest as $perfil) {
                        $objPerfil = $perfilRN->find(Perfil::class, $perfil);

                        if ($objPerfil) {
                            $user->addPerfi($objPerfil);
                        }
                    }

                    #Permissões
                    foreach ($permissoes as $permissao) {
                        $role = $roleRN->findByRole(Role::class, $permissao);

                        if ($role) {
                            $user->addRole($role[0]);
                        } else {
                            $newRole = new Role();
                            $newRole->setRole($permissao);
                            $user->addRole($newRole);
                        }
                    }

                    #Atualizando o objeto
                    $result = $userRN->update($user);

                    #Setando a mensagem
                    $mensagem = $this->get('translator')->trans('usuarios.sucess_update');

                    #Retorno
                    return new Response(
                        $serializer->serialize([$result,
                            'success' => true,
                            'message' => $mensagem],
                            "json"
                        ));
                } catch (\Throwable $e) {
                    #Setando a mensagem
                    $mensagem = $this->get('translator')->trans('usuarios.error_update');

                    #Retorno
                    return new Response($serializer->serialize([$e,
                        'success' => false,
                        'message' => $mensagem],
                        "json"
                    ));
                }
            }
        } else {
            #Setando a mensagem
            $mensagem = $this->get('translator')->trans('usuarios.error_form_invalid');

            #Retorno
            return new Response(
                $serializer->serialize([$errors->serializeFormErrors($form, true, true),
                    'success' => false,
                    'message' => $mensagem,
                    'request' => $request->request->all()],
                    "json"
                ));
        }

        #Retorno
        throw new HttpException(400, ErroList::REQUEST_INVALID);
    }


}
