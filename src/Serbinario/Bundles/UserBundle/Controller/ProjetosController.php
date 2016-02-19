<?php

namespace Serbinario\Bundles\UserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Serbinario\Bundles\UserBundle\Form\ProjetosType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Serbinario\Bundles\UserBundle\Entity\Projetos;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Respect\Validation\Validator as v;

class ProjetosController extends FOSRestController
{
    /**
     * Retorna uma collection de projetos ou null
     * se não existir nenhuma
     *
     * @return Response
     */
    public function getProjetosAction()
    {
        #Recuperando os serviços
        $projetosRN  = $this->get("projetos_rn");
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            #Recuperando todas as projetos cadastradas
            $projetos = $projetosRN->all(Projetos::class);

            #Retorno
            return new Response($serializer->serialize($projetos, "json"));
        } catch (NoResultException $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Exception $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Error $e) {
            throw new HttpException(400, $e->getMessage());
        }
    }

    /**
     * Retorna um Objeto Projetos ou null
     * se não existir nenhuma
     *
     * @param $id
     * @return Response
     */
    public function getProjetoAction($id)
    {
        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(400, "Parâmetro inválido");
        }

        #Recuperando os serviços
        $projetosRN  = $this->get("projetos_rn");
        $serializer = $this->get("jms_serializer");

        #Tratamento de exceções
        try {
            #Recuperando a projetos solicitada
            $projetos     = $projetosRN->find(Projetos::class, $id);

            #Retorno
            return new Response($serializer->serialize($projetos, "json"));
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
     * projetos informado
     *
     * @param Request $request
     * @return Response
     */
    public function putProjetosAction(Request $request, $id)
    {
        #Validando o id do parâmetro
        if(!v::numeric()->validate($id)) {
            throw new HttpException(400, "Parâmetro inválido");
        }

        #Recuperando os serviços
        $projetosRN  = $this->get("projetos_rn");
        $serializer = $this->get("jms_serializer");

        #Recuperando o objeto projetos
        $objPessoa  = $projetosRN->find(Projetos::class, $id);

        #Verificando se o objeto projetos existe
        if(!isset($objPessoa)) {
           throw new HttpException(400, "Solicitação inválida");
        }

        #Verificando o método http
        if ($request->getMethod() === "PUT") {

            #Criando o formulário
            $form = $this->createForm(new ProjetosType(), $objPessoa);

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando o objeto projetos
                $projetos     = $form->getData();

                #Tratamento de exceções
                try {
                    #Atualizando o objeto
                    $result = $projetosRN->update($projetos);

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
     * objeto projetos
     *
     * @param Request $request
     * @return Response
     */
    public function postProjetosAction(Request $request)
    {
        #Recuperando os serviços
        $projetosRN  = $this->get("projetos_rn");
        $serializer = $this->get("jms_serializer");

        #Verificando o método http
        if ($request->getMethod() === "POST") {

            #Criando o formulário
            $form = $this->createForm(new ProjetosType());

            #Repasando a requisição
            $form->submit($request);

            #Verifica se os dados são válidos
            if ($form->isValid()) {
                #Recuperando o objeto projetos
                $projetos   = $form->getData();

                #Tratamento de exceções
                try {
                    #Atualizando o objeto
                    $result = $projetosRN->save($projetos);

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