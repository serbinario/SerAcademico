<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 18/02/16
 * Time: 11:53
 */

namespace Serbinario\Bundles\UserBundle\DAO;

use Serbinario\Bundles\UserBundle\DAO\InterfaceUserDAO;

class UserDAO implements InterfaceUserDAO
{
    use \Serbinario\Bundles\UserBundle\DAO\TraitDAO;
}