<?php

namespace Serbinario\Bundles\UtilBundle\Controller;

use Serbinario\Bundles\UtilBundle\Entity\Bairros;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;
use FOS\RestBundle\Controller\Annotations\Get;
use Serbinario\Bundles\UtilBundle\Util\ErroList;


class BairrosController extends Controller
{
**
* @Get("/bairros/{idCidade}/cidade", name="bairrosByCidade")
*/
    public function getBairrosByCidade($idCidade)
    {
        #Recuperando os serviços
        $serializer = $this->get("jms_serializer");

        try {
            #Fazendo a interação com o banco
            $manager      = $this->getDoctrine()->getManager();
            $queryBuilder = $manager->createQueryBuilder();
            $queryBuilder->select("a");
            $queryBuilder->from(Bairros::class, "a");
            $queryBuilder->join("a.cidadesCidades", "b");
            $queryBuilder->where("b.idCidades = :idCidade");
            $queryBuilder->setParameter("idCidade", $idCidade);

            #Executando a query e recuperando o resultado
            $result = $queryBuilder->getQuery()->getResult();

            #Verificando se a consulta veio vazia
            if(!$result) {
                throw new NoResultException();
            }

            #Retorno
            return new Response($serializer->serialize($estados, "json"));
        } catch (NoResultException $e) {
            return new HttpException(400, ErroList::NO_RESULT);
        } catch (\Exception $e) {
            return new HttpException(400, ErroList::EXCEPTION);
        } catch (\Error $e) {
            return new HttpException(400, ErroList::FATAL_ERROR);
        }
    }
}
