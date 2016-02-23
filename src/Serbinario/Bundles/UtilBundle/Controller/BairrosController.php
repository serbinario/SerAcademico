<?php

namespace Serbinario\Bundles\UtilBundle\Controller;

use Serbinario\Bundles\UtilBundle\Entity\Bairros;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\HttpFoundation\Request;
use Serbinario\Bundles\UtilBundle\Util\ErroList;
use Doctrine\ORM\NoResultException;
use Symfony\Component\HttpFoundation\Response;


class BairrosController extends FOSRestController
{
    /**
    * @Post("/bycidade", name="bairrosByCidade")
    */
    public function getBairrosByCidadeAction(Request $request)
    {
        #Recuperando parametros da requisição
        $idCidade = $request->request->get("cidade");

        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");

        try {
            #Fazendo a interação com o banco
            $manager      = $this->getDoctrine()->getManager();
            $queryBuilder = $manager->createQueryBuilder();
            $queryBuilder->select("a");
            $queryBuilder->from(Bairros::class, "a");
            $queryBuilder->join("a.cidadesCidades", "b");
            $queryBuilder->where("b.id = :idCidade");
            $queryBuilder->setParameter("idCidade", $idCidade);

            #Executando a query e recuperando o resultado
            $bairros = $queryBuilder->getQuery()->getResult();

            #Verificando se a consulta veio vazia
            if(!$bairros) {
                throw new NoResultException();
            }

            #Retorno
            return new Response($serializer->serialize($bairros, "json"));
        } catch (NoResultException $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Exception $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Error $e) {
            throw new HttpException(400, $e->getMessage());
        }
    }
}
