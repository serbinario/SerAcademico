<?php

namespace Serbinario\Bundles\UtilBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UtilController extends FOSRestController
{
    /**
     * @Post("/search")
     */
    public function searchAction(Request $request)
    {
        try {
            #Recuperando os serviços
            $serializer   = $this->get("jms_serializer");

            #Recuperando dados da requisição
            $search       = $request->request->get("search");
            $tableName    = $request->request->get("tableName");
            $fieldName    = $request->request->get("fieldName");
            $page         = $request->request->get("page");

            #Verificando se houve texto na para consulta
            if(!$search) {
                #Retorno
                return new Response($serializer->serialize([], "json"));
            }

            #Recupearando o entity manager e a query builder
            $manager      = $this->getDoctrine()->getManager();
            $queryBuilder = $manager->createQueryBuilder();

            #Consulta
            $queryBuilder->select("a");
            $queryBuilder->from("{$tableName}", "a");
            $queryBuilder->where("a.{$fieldName} like '{$search}%'");

            #Inicio da consulta
            if($page) {
                $queryBuilder->setFirstResult($page);
            }

            #Limite da consulta
            $queryBuilder->setMaxResults(10);

            #Executando a consulta
            $resultQuery  = $queryBuilder->getQuery()->getResult();

            #Preparando o retorno
            $result = array();
            foreach($resultQuery as $item) {
                $result[] = array(
                    "id" => $item->getId(),
                    "text" => $item->getNome()
                );
            }

            #Retorno
            return new Response($serializer->serialize($result, "json"));
        }  catch (\Throwable $e) {
            #Retorno
            return new Response($serializer->serialize($e->getMessage(), "json"));
        }
    }

    /**
     * @Post("/queryByField")
     */
    public function queryByFieldAction(Request $request)
    {
        try {
            #variáveis de uso
            $result       =  true;

            #Recuperando os serviços
            $serializer   = $this->get("jms_serializer");

            #Recuperando dados da requisição
            $tableName    = $request->request->get("tableName");
            $fieldName    = $request->request->get("fieldName");
            $valueName    = $request->request->get("valueName");
            $idValue      = $request->request->get("id");

            #Recupearando o entity manager e a query builder
            $manager      = $this->getDoctrine()->getManager();
            $queryBuilder = $manager->createQueryBuilder();

            #Consulta
            $queryBuilder->select("a");
            $queryBuilder->from("{$tableName}", "a");
            $queryBuilder->where("a.{$fieldName} = '{$valueName}'");

            #consulta com id
            if($idValue) {
                $queryBuilder->andWhere("a.id != {$idValue}");
            }

            #Executando a consulta
            $resultQuery  = $queryBuilder->getQuery()->getResult();

            #Verificando o resultado da consulta
            if(!count($resultQuery) > 0) {
                $result = false;
            }

            #Retorno
            return new Response($serializer->serialize($result, "json"));
        }  catch (\Throwable $e) {
            #Retorno
            return new Response($serializer->serialize($e->getMessage(), "json"));
        }
    }
}
