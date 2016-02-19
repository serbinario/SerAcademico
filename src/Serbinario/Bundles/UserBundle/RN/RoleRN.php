<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 18/02/16
 * Time: 14:34
 */

namespace Serbinario\Bundles\UserBundle\RN;

use Serbinario\Bundles\UserBundle\DAO\InterfaceRoleDAO;

class RoleRN
{
    use \Serbinario\Bundles\UserBundle\RN\TraitRN;

    /**
     * @var InterfaceRoleDAO
     */
    private $dao;

    /**
     * @param InterfaceRoleDAO $dao
     */
    public function __construct(InterfaceRoleDAO $dao)
    {
        $this->dao = $dao;
    }

    /**
     * @param $entity
     * @param $role
     * @return mixed
     */
    public function findByRole($entity, $role)
    {
        $result = $this->dao->findByRole($entity, $role);

        return $result;
    }
}