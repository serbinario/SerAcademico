<?php

namespace Serbinario\Bundles\SerAcademicoBundle\DAO;

/**
 *
 * @author serbinario
 */
interface InterfaceDAO 
{
    public function save($entity);
    public function update($entity);
    public function find($entity, $id);
    public function all($entity);
}