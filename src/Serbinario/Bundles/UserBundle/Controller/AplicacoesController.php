<?php

namespace Serbinario\Bundles\UserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Serbinario\Bundles\UserBundle\Form\AplicacoesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Serbinario\Bundles\UserBundle\Entity\Aplicacoes;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Respect\Validation\Validator as v;

class AplicacoesController extends FOSRestController
{
    /**
     * Retorna uma collection de aplicacoes ou null
     * se não existir nenhuma
     *
     * @return Response
     */
    public function getAplicacoesAction()
    {
        #Recuperando os serviços
        $aplicacoesRN  = $this->get("aplicacoes_rn");
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            #Recuperando todas as aplicacoes cadastradas
            $aplicacoes = $aplicacoesRN->all(Aplicacoes::class);

            #Retorno
            return new Response($serializer->serialize($aplicacoes, "json"));
        } catch (NoResultException $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Exception $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Error $e) {
            throw new HttpException(400, $e->getMessage());
        }
    }

    /**
     * Retorna um Objeto Aplicacoes ou null
     * se não existir nenhuma
     *
     * @param $id
     * @return Response
     */
    public function getAplicacaoAction($id)
    {
        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(400, "Parâmetro inválido");
        }

        #Recuperando os serviços
        $aplicacoesRN  = $this->get("aplicacoes_rn");
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            #Recuperando a aplicacoes solicitada
            $aplicacoes     = $aplicacoesRN->find(Aplicacoes::class, $id);

            #Retorno
            return new Response($serializer->serialize($aplicacoes, "json"));
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
     * aplicacoes informado
     *
     * @param Request $request
     * @return Response
     */
    public function putAplicacoesAction(Request $request, $id)
    {
        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(400, "Parâmetro inválido");
        }

        #Recuperando os serviços
        $aplicacoesRN  = $this->get("aplicacoes_rn");
        $serializer = $this->get("jms_serializer");

        #Recuperando o objeto aplicacoes
        $objPessoa  = $aplicacoesRN->find(Aplicacoes::class, $id);

        #Verificando se o objeto aplicacoes existe
        if(!isset($objPessoa)) {
           throw new HttpException(400, "Solicitação inválida");
        }

        #Verificando o método http
        if ($request->getMethod() === "PUT") {

            #Criando o formulário
            $form = $this->createForm(new AplicacoesType(), $objPessoa);

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando o objeto aplicacoes
                $aplicacoes     = $form->getData();

                #Tratamento de exceções
                try {
                    #Atualizando o objeto
                    $result = $aplicacoesRN->update($aplicacoes);

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
     * objeto aplicacoes
     *
     * @param Request $request
     * @return Response
     */
    public function postAplicacoesAction(Request $request)
    {
        #Recuperando os serviços
        $aplicacoesRN  = $this->get("aplicacoes_rn");
        $serializer = $this->get("jms_serializer");

        #Verificando o método http
        if ($request->getMethod() === "POST") {

            #Criando o formulário
            $form = $this->createForm(new AplicacoesType());

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando o objeto aplicacoes
                $aplicacoes   = $form->getData();

                #Tratamento de exceções
                try {
                    #Atualizando o objeto
                    $result = $aplicacoesRN->save($aplicacoes);

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