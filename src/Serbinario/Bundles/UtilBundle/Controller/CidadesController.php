<?php

namespace Serbinario\Bundles\UtilBundle\Controller;

use Serbinario\Bundles\UtilBundle\Entity\Cidades;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;
use FOS\RestBundle\Controller\Annotations\Get;

class CidadesController extends Controller
{
    /**
     * @Get("/cidades/{idEstado}/estado", name="cidadesByEstado")
     */
    public function getCidadesByEstado($idEstado)
    {
        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");

        try {
            #Fazendo a interação com o banco
            $manager      = $this->getDoctrine()->getManager();
            $queryBuilder = $manager->createQueryBuilder();
            $queryBuilder->select("a");
            $queryBuilder->from(Cidades::class, "a");
            $queryBuilder->join("a.estadosEstados", "b");
            $queryBuilder->where("b.idEstados = :idEstado");
            $queryBuilder->setParameter("idEstado", $idEstado);

            #Executando a query e recuperando o resultado
            $result = $queryBuilder->getQuery()->getResult();

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
