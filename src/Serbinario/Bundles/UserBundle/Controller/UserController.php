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
        } catch (\Exception $e) {
            throw new HttpException(200, $e->getMessage());
        } catch (\Error $e) {
            throw new HttpException(200, $e->getMessage());
        }
    }

    /**
    * @Get("/get/{id}", name="_users")
    */
    public function getAction(Request $request, $id)
    {
        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(200, ErroList::PARAMETER_INVALID);
        }

        #Recuperando os serviços
        $userRN     = $this->get("user_rn");
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            #Recuperando a alunos solicitada
            $user = $userRN->find(User::class, $id);

            #Retorno
            return new Response($serializer->serialize($user, "json"));
        } catch (NoResultException $e) {
            throw new HttpException(400, ErroList::NO_RESULT);
        } catch (\Exception $e) {
            throw new HttpException(400, ErroList::EXCEPTION);
        } catch (\Error $e) {
            throw new HttpException(400, ErroList::FATAL_ERROR);
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
            return new Response($serializer->serialize($result, "json"));
        } catch (\Exception $e) {
            throw new HttpException(200, $e->getMessage());
        } catch (\Error $e) {
            throw new HttpException(200, $e->getMessage());
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

                    #Retorno
                    return new Response($serializer->serialize($result, "json"));
                } catch (\Exception $e) {
                    throw new HttpException(200, ErroList::EXCEPTION);
                } catch (\Error $e) {
                    throw new HttpException(200, ErroList::FATAL_ERROR);
                }
            }
        }

        #Retorno
        throw new HttpException(200, ErroList::REQUEST_INVALID);
    }

    /**
     * @Post("/update", name="_user")
     */
    public function updateAction(Request $request)
    {
        #Recuperandoparametros da requisição
        $id = $request->request->get("idUser");

        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(200, ErroList::PARAMETER_INVALID);
        }

        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");
        $userRN     = $this->get("user_rn");
        $perfilRN   = $this->get('perfil_rn');
        $roleRN     = $this->get('role_rn');

        #Recuperando o objeto alunos
        $objUser    = $userRN->find(User::class, $id);

        #Verificando se o objeto alunos existe
        if(!isset($objUser)) {
            throw new HttpException(200, "Solicitação inválida");
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

                    #Retorno
                    return new Response($serializer->serialize($result, "json"));
                } catch (\Exception $e) {
                    throw new HttpException(200, ErroList::EXCEPTION);
                } catch (\Error $e) {
                    throw new HttpException(200, ErroList::FATAL_ERROR);
                }
            }
        }

        #Retorno
        throw new HttpException(400, ErroList::REQUEST_INVALID);
    }


}
