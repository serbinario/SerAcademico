<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Serbinario\Bundles\SerAcademicoBundle\Form\AlunosType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Alunos;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Respect\Validation\Validator as v;
use Doctrine\ORM\NoResultException;
use Serbinario\Bundles\UtilBundle\Util\ErroList;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Sexos;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Turnos;
use Serbinario\Bundles\SerAcademicoBundle\Entity\GrauInstrucoes;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Profissoes;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Religioes;
use Serbinario\Bundles\SerAcademicoBundle\Entity\EstadosCivis;
use Serbinario\Bundles\UtilBundle\Entity\Estados;
use Serbinario\Bundles\SerAcademicoBundle\Entity\TiposSanguinios;
use Serbinario\Bundles\SerAcademicoBundle\Entity\CoresRacas;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Exames;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Auditivas;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Visuais;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Fisicas;
use Serbinario\Bundles\SerAcademicoBundle\Entity\Emancipados;
use Serbinario\Bundles\UtilBundle\Util\GridClass;
use FOS\RestBundle\Controller\Annotations\Post;
use Serbinario\Bundles\Util\FormErrorsSerializer as formErrors;


class AlunosController extends FOSRestController
{
    /**
     * @Post("/grid", name="_alunos")
     */
    public function gridAction(Request $request)
    {
        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            $columns = array("a.nomeAlunos",
            );
            //var_dump($request->request->all());exit;
            $entityJOIN = array();
            $eventosArray         = array();
            $parametros           = $request->request->all();
            $entity               = "Serbinario\Bundles\SerAcademicoBundle\Entity\Alunos";
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
                $eventosArray[$i]['DT_RowId']   =  "row_".$resultCliente[$i]->getIdAlunos();
                $eventosArray[$i]['id']         =  $resultCliente[$i]->getIdAlunos();
                $eventosArray[$i]['nomeAlunos'] =  $resultCliente[$i]->getNomeAlunos() ?? "Nome não informado";
                $eventosArray[$i]['cpfAlunos']  =  $resultCliente[$i]->getCpfAlunos() ?? "CPF não informado";
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
            throw new HttpException(400, $e->getMessage());
        } catch (\Error $e) {//var_dump();exit;
            throw new HttpException(400, $e->getMessage());
        }
    }

    /**
     * Retorna um Objeto Alunos ou null
     * se não existir nenhuma
     *
     * @param $id
     * @return Response
     */
    public function getAlunoAction($id)
    {
        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(400, ErroList::PARAMETER_INVALID);
        }

        #Recuperando os serviços
        $alunosRN   = $this->get("alunos_rn");
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            #Recuperando a alunos solicitada
            $alunos = $alunosRN->find(Alunos::class, $id);

            #Retorno
            return new Response($serializer->serialize($alunos, "json"));
        } catch (NoResultException $e) {
            throw new HttpException(400, ErroList::NO_RESULT);
        } catch (\Exception $e) {
            throw new HttpException(400, ErroList::EXCEPTION);
        } catch (\Error $e) {
            throw new HttpException(400, ErroList::FATAL_ERROR);
        }
    }

    /**
     * @return Response
     */
    public function newAlunosAction()
    {
        try {
            #Recuperando o entity manager
            $manager = $this->getDoctrine()->getManager();

            #Recuperando os serviços
            $serializer = $this->get("jms_serializer");

            #Recuperando os dados pre cadastrados
            $result = [
                'sexos'         => $manager->getRepository(Sexos::class)->findAll(),
                'turnos'        => $manager->getRepository(Turnos::class)->findAll(),
                'grauIn'        => $manager->getRepository(GrauInstrucoes::class)->findAll(),
                'religioes'     => $manager->getRepository(Religioes::class)->findAll(),
                'estadosCivis'  => $manager->getRepository(EstadosCivis::class)->findAll(),
                'estados'       => $manager->getRepository(Estados::class)->findAll(),
                'tiposSagui'    => $manager->getRepository(TiposSanguinios::class)->findAll(),
                'coresRacas'    => $manager->getRepository(CoresRacas::class)->findAll(),
                'exames'        => $manager->getRepository(Exames::class)->findAll(),
                'auditivas'     => $manager->getRepository(Auditivas::class)->findAll(),
                'visuais'       => $manager->getRepository(Visuais::class)->findAll(),
                'fisicas'       => $manager->getRepository(Fisicas::class)->findAll(),
                'emancipados'   => $manager->getRepository(Emancipados::class)->findAll(),
                'profissoes'    => $manager->getRepository(Profissoes::class)->findAll(),
            ];

            #Retorno
            return new Response($serializer->serialize($result, "json"));
        } catch (\Exception $e) {
            throw new HttpException(400, ErroList::EXCEPTION);
        } catch (\Error $e) {
            throw new HttpException(400, ErroList::FATAL_ERROR);
        }
    }

    /**
     * Método para atualizar o objeto
     * alunos informado
     *
     * @param Request $request
     * @return Response
     */
    public function putAlunosAction(Request $request)
    {
        #Recuperandoparametros da requisição
        $id = $request->request->get("idAluno");

        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(400, ErroList::PARAMETER_INVALID);
        }

        #Recuperando os serviços
        $alunosRN   = $this->get("alunos_rn");
        $serializer = $this->get("jms_serializer");

        #Recuperando o objeto alunos
        $objPessoa  = $alunosRN->find(Alunos::class, $id);

        #Verificando se o objeto alunos existe
        if(!isset($objPessoa)) {
           throw new HttpException(400, "Solicitação inválida");
        }

        #Verificando o método http
        if ($request->getMethod() === "PUT") {

            #Criando o formulário
            $form = $this->createForm(new AlunosType(), $objPessoa);

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando o objeto alunos
                $alunos     = $form->getData();

                #Tratamento de exceções
                try {
                    #Atualizando o objeto
                    $result = $alunosRN->update($alunos);

                    #Retorno
                    return new Response($serializer->serialize($result, "json"));
                } catch (\Exception $e) {
                    #Verificando se existe violação de unicidade. (campos definidos como únicos).
                    if($e->getPrevious()->getCode() == 23000) {
                        throw new HttpException(400, ErroList::UNIQUE_EXCEPTION);
                    }

                    #Erro genérico
                    throw new HttpException(400, ErroList::EXCEPTION);
                } catch (\Error $e) {
                    throw new HttpException(400, ErroList::FATAL_ERROR);
                }
            }
        }

        #Retorno
        throw new HttpException(400, ErroList::REQUEST_INVALID);
    }

    /**
     * Método para adicionar um novo
     * objeto alunos
     *
     * @param Request $request
     * @return Response
     */
    public function postAlunosAction(Request $request)
    {
        #Recuperando os serviços
        $alunosRN   = $this->get("alunos_rn");
        $serializer = $this->get("jms_serializer");

        #Verificando o método http
        if ($request->getMethod() === "POST") {
            #Criando o formulário
            $form   = $this->createForm(AlunosType::class);

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando o objeto alunos
                $alunos     = $form->getData();

                #Tratamento de exceções
                try {
                    #Atualizando o objeto
                    $result = $alunosRN->save($alunos);

                    #Retorno
                    return new Response($serializer->serialize($result, "json"));
                } catch (\Exception $e) {
                    throw new HttpException(400, ErroList::EXCEPTION);
                } catch (\Error $e) {
                    throw new HttpException(400, ErroList::FATAL_ERROR);
                }
            }
        }

        $translated = $this->get('translator')->trans('error.error');
        //Instanciei a classe formErros, e passo a classe $form no construtor
        $errors =  new formErrors();
        $asd = $errors->serializeFormErrors($form, false, false);

        return new Response($serializer->serialize([ $request->getLocale(), $asd, 'success' => 'false' , 'message' => $translated], "json"));

        #Retorno
        //throw new HttpException(400, ErroList::REQUEST_INVALID);
    }
}