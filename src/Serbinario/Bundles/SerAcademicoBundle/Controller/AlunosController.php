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

class AlunosController extends FOSRestController
{
    /**
     * Retorna uma collection de alunos ou null
     * se não existir nenhuma
     *
     * @return Response
     */
    public function getAlunosAction()
    {
        #Recuperando os serviços
        $alunosRN   = $this->get("alunos_rn");
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            #Recuperando todas as alunos cadastradas
            $alunos = $alunosRN->all(Alunos::class);

            #Retorno
            return new Response($serializer->serialize($alunos, "json"));
        } catch (NoResultException $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Exception $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Error $e) {
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
            throw new HttpException(400, "Parâmetro inválido");
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
            throw new HttpException(400, $e->getMessage());
        } catch (\Exception $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Error $e) {
            throw new HttpException(400, $e->getMessage());
        }
    }

    /**
     * Método para atualizar o objeto
     * alunos informado
     *
     * @param Request $request
     * @return Response
     */
    public function putAlunosAction(Request $request, $id)
    {
        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(400, "Parâmetro inválido");
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
                        throw new HttpException(400, "Já existe registros com os dados informados");
                    }

                } catch (\Error $e) {
                    throw new HttpException(400, $e->getMessage());
                }
            }
        }

        #Retorno
        throw new HttpException(400, "Solicitação inválida");
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
                $alunos   = $form->getData();

                #Tratamento de exceções
                try {
                    #Atualizando o objeto
                    $result = $alunosRN->save($alunos);

                    #Retorno
                    return new Response($serializer->serialize($result, "json"));
                } catch (\Exception $e) {
                    #Verificando se existe violação de unicidade. (campos definidos como únicos).
                    if($e->getPrevious()->getCode() == 23000) {
                        throw new HttpException(400, "Já existe registros com os dados informados");
                    }

                } catch (\Error $e) {
                    throw new HttpException(400, $e->getMessage());
                }
            }
        }

        #Retorno
        throw new HttpException(400, "Solicitação inválida");
    }
}