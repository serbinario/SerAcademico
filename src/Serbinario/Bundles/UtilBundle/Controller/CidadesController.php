<?php

namespace Serbinario\Bundles\UtilBundle\Controller;

use Serbinario\Bundles\UtilBundle\Entity\Cidades;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\HttpFoundation\Request;
use Serbinario\Bundles\UtilBundle\Util\ErroList;
use Doctrine\ORM\NoResultException;
use Symfony\Component\HttpFoundation\Response;

class CidadesController extends FOSRestController
{
    /**
     * @Post("/byestado", name="cidadesByEstado")
     */
    public function getCidadesByEstadoAction(Request $request)
    {
        #Recuperando parametros da requisição
        $idEstado = $request->request->get("estado");

        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");

        try {
            #Fazendo a interação com o banco
            $manager      = $this->getDoctrine()->getManager();
            $queryBuilder = $manager->createQueryBuilder();
            $queryBuilder->select("a");
            $queryBuilder->from(Cidades::class, "a");
            $queryBuilder->join("a.estadosEstados", "b");
            $queryBuilder->where("b.id = :idEstado");
            $queryBuilder->setParameter("idEstado", $idEstado);

            #Executando a query e recuperando o resultado
            $cidades = $queryBuilder->getQuery()->getResult();

            #Verificando se a consulta veio vazia
            if(!$cidades) {
                throw new NoResultException();
            }

            #Retorno
            return new Response($serializer->serialize($cidades, "json"));
        }  catch (NoResultException $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Exception $e) {
            throw new HttpException(400, $e->getMessage());
        } catch (\Error $e) {
            throw new HttpException(400, $e->getMessage());
        }
    }
}
