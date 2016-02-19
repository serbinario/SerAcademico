<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 18/02/16
 * Time: 14:33
 */

namespace Serbinario\Bundles\UserBundle\DAO;

use Serbinario\Bundles\UserBundle\DAO\InterfaceRoleDAO;
use Doctrine\ORM\NoResultException;

/**
 * Class RoleDAO
 * @package Serbinario\Bundles\UserBundle\DAO
 */
class RoleDAO implements InterfaceRoleDAO
{
    use \Serbinario\Bundles\UserBundle\DAO\TraitDAO;

    /**
     * @param $entity
     * @param $role
     * @return array
     */
    public function findByRole($entity, $role)
    {
        $objResult = $this->manager->getRepository($entity)->findBy(array("role" => $role));


        return $objResult;
    }
}