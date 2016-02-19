<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 18/02/16
 * Time: 14:32
 */

namespace Serbinario\Bundles\UserBundle\DAO;

use Serbinario\Bundles\UserBundle\DAO\InterfaceDAO;

/**
 *
 * @author serbinario
 */

interface InterfaceRoleDAO extends InterfaceDAO
{
    public abstract function findByRole($entity, $role);
}