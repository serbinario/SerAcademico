<?php

namespace Serbinario\Bundles\UtilBundle\Controller;

use Serbinario\Bundles\UtilBundle\Entity\Estados;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpKernel\Exception\HttpException;
use FOS\RestBundle\Controller\Annotations\Get;
use Serbinario\Bundles\UtilBundle\Util\ErroList;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\NoResultException;

class EstadosController extends FOSRestController
{
    /**
     * @Get("/all", name="estadosAll")
     */
    public function getEstadosAction()
    {
        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");

        try {
            #Fazendo a interação com o banco
            $manager = $this->getDoctrine()->getManager();
            $estados = $manager->getRepository(Estados::class)->findAll();

            #Verificando se a consulta veio vazia
            if(!$estados) {
                throw new NoResultException();
            }

            #Retorno
            return new Response($serializer->serialize($estados, "json"));
        }  catch (NoResultException $e) {
            throw new HttpException(400, ErroList::NO_RESULT, $e);
        } catch (\Exception $e) {
            throw new HttpException(400, ErroList::EXCEPTION, $e);
        } catch (\Error $e) {
            throw new HttpException(400, ErroList::FATAL_ERROR, $e);
        }
    }
}
