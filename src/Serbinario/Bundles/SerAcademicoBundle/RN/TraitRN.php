<?php

namespace Serbinario\Bundles\SerAcademicoBundle\RN;

trait TraitRN
{
    /**
     *
     * @var type
     */
    private $dao;

    /**
     *
     * @param type $entity
     * @return type
     */
    public function save($entity)
    {
        $result = $this->dao->save($entity);

        return $result;
    }

    /**
     *
     * @param type $entity
     * @return type
     */
    public function update($entity)
    {
        $result = $this->dao->update($entity);

        return $result;
    }

    /**
     * @param $entity
     * @param $id
     * @return mixed
     */
    public function find($entity, $id)
    {
        $result = $this->dao->find($entity, $id);

        return $result;
    }

    /**
     * @param $entity
     * @return mixed
     */
    public function all($entity)
    {
        $result = $this->dao->all($entity);

        return $result;
    }
}

