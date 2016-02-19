<?php
namespace Serbinario\Bundles\UserBundle\DAO;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\NoResultException;

trait TraitDAO 
{
    /**
     *
     * @var type 
     */
    private $manager;
    
    /**
     * 
     * @param EntityManager $manager
     */
    public function __construct(EntityManager $manager) 
    {
        $this->manager = $manager;
    }

    /**
     * 
     * @param type $entity
     * @return boolean
     */
    public function save($entity)
    {
        $this->manager->persist($entity);
        $this->manager->flush();
            
        return $entity;
    }
    
    /**
     * 
     * @param type $entity
     * @return boolean
     */
    public function update($entity)
    {
        $this->manager->merge($entity);
        $this->manager->flush();
            
        return $entity;
    }

    /**
     * @param $entity
     * @param $id
     * @return null|object
     */
    public function find($entity, $id)
    {
        $result = $this->manager->getRepository($entity)->find($id);

        #Verificando se algum registro foi encontrado
        if($result == null) {
            throw new NoResultException("Nenhum registro encotrado");
        }
            
        return $result;
    }
    
   /**
    * 
    * @return type
    */
    public function all($entity)
    {
        $result = $this->manager->getRepository($entity)->findAll();

        #Verificando se algum registro foi encontrado
        if($result == null) {
            throw new NoResultException("Nenhum registro encotrado");
        }

        return $result;
    }
}
