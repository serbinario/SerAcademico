<?php

namespace Serbinario\Bundles\UserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Serbinario\Bundles\UserBundle\Form\PermissoesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Serbinario\Bundles\UserBundle\Entity\Permissoes;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Respect\Validation\Validator as v;

class PermissoesController extends FOSRestController
{
    /**
     * Retorna uma collection de permissoes ou null
     * se não existir nenhuma
     *
     * @return Response
     */
    public function getPermissoesAction()
    {
        #Recuperando os serviços
        $permissoesRN  = $this->get("permissoes_rn");
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            #Recuperando todas as permissoes cadastradas
            $permissoes = $permissoesRN->all(Permissoes::class);

            #Retorno
            return new Response($serializer->serialize($permissoes, "json"));
        } catch (NoResultException $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Exception $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Error $e) {
            throw new HttpException(400, $e->getMessage());
        }
    }

    /**
     * Retorna um Objeto Permissoes ou null
     * se não existir nenhuma
     *
     * @param $id
     * @return Response
     */
    public function getPermissaoAction($id)
    {
        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(400, "Parâmetro inválido");
        }

        #Recuperando os serviços
        $permissoesRN  = $this->get("permissoes_rn");
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            #Recuperando a permissoes solicitada
            $permissoes     = $permissoesRN->find(Permissoes::class, $id);

            #Retorno
            return new Response($serializer->serialize($permissoes, "json"));
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
     * permissoes informado
     *
     * @param Request $request
     * @return Response
     */
    public function putPermissoesAction(Request $request, $id)
    {
        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(400, "Parâmetro inválido");
        }

        #Recuperando os serviços
        $permissoesRN  = $this->get("permissoes_rn");
        $serializer = $this->get("jms_serializer");

        #Recuperando o objeto permissoes
        $objPessoa  = $permissoesRN->find(Permissoes::class, $id);

        #Verificando se o objeto permissoes existe
        if(!isset($objPessoa)) {
           throw new HttpException(400, "Solicitação inválida");
        }

        #Verificando o método http
        if ($request->getMethod() === "PUT") {

            #Criando o formulário
            $form = $this->createForm(new PermissoesType(), $objPessoa);

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando o objeto permissoes
                $permissoes     = $form->getData();

                #Tratamento de exceções
                try {
                    #Atualizando o objeto
                    $result = $permissoesRN->update($permissoes);

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
     * objeto permissoes
     *
     * @param Request $request
     * @return Response
     */
    public function postPermissoesAction(Request $request)
    {
        #Recuperando os serviços
        $permissoesRN  = $this->get("permissoes_rn");
        $serializer = $this->get("jms_serializer");

        #Verificando o método http
        if ($request->getMethod() === "POST") {

            #Criando o formulário
            $form = $this->createForm(new PermissoesType());

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando o objeto permissoes
                $permissoes   = $form->getData();

                #Tratamento de exceções
                try {
                    #Atualizando o objeto
                    $result = $permissoesRN->save($permissoes);

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