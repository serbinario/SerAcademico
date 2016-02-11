<?php

namespace Serbinario\Bundles\UtilBundle\Controller;

use Doctrine\ORM\NoResultException;
use Serbinario\Bundles\UtilBundle\Entity\Estados;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;
use FOS\RestBundle\Controller\Annotations\Get;

class EstadosController extends Controller
{
    /**
     * @Get("/estados/all", name="estadosAll")
     */
    public function getEstados()
    {
        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");

        try {
            #Fazendo a interação com o banco
            $manager = $this->getDoctrine()->getManager();
            $estados = $manager->getRepository(Estados::class)->findAll();

            #Verificando se a consulta veio vazia
            if(!$result) {
                throw new NoResultException();
            }

            #Retorno
            return new Response($serializer->serialize($estados, "json"));
        }  catch (NoResultException $e) {
            return new HttpException(400, ErroList::NO_RESULT);
        } catch (\Exception $e) {
            return new HttpException(400, ErroList::EXCEPTION);
        } catch (\Error $e) {
            return new HttpException(400, ErroList::FATAL_ERROR);
        }
    }
}
