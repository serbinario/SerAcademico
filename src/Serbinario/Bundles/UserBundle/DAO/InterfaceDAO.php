<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 26/01/16
 * Time: 09:37
 */

namespace Serbinario\Bundles\UserBundle\DAO;


interface InterfaceDAO
{
    public function save($entity);
    public function update($entity);
    public function find($entity, $id);
    public function all($entity);
}