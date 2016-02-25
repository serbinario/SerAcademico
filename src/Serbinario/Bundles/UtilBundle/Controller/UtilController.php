<?php

namespace Serbinario\Bundles\UtilBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UtilController extends FOSRestController
{
    /**
     * @Post("/queryByField")
     */
    public function queryByFieldAction(Request $request)
    {
        try {
            #variáveis de uso
            $result       =  false;

            #Recuperando os serviços
            $serializer   = $this->get("jms_serializer");

            #Recuperando dados da requisição
            $tableName    = $request->request->get("tableName");
            $fieldName    = $request->request->get("fieldName");
            $valueName    = $request->request->get("valueName");

            #Recupearando o entity manager e a query builder
            $manager      = $this->getDoctrine()->getManager();
            $queryBuilder = $manager->createQueryBuilder();

            #Consulta
            $queryBuilder->select("a");
            $queryBuilder->from("{$tableName}", "a");
            $queryBuilder->where("a.{$fieldName} = '{$valueName}'");

            #Executando a consulta
            $resultQuery  = $queryBuilder->getQuery()->getResult();

            #Verificando o resultado da consulta
            if(!$resultQuery) {
                $result = true;
            }

            #Retorno
            return new Response($serializer->serialize($result, "json"));
        }  catch (\Throwable $e) {
            #Retorno
            return new Response($serializer->serialize($e->getMessage(), "json"));
        }
    }
}
