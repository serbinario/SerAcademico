<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 18/02/16
 * Time: 11:53
 */

namespace Serbinario\Bundles\UserBundle\RN;

use Serbinario\Bundles\UserBundle\DAO\InterfaceUserDAO;

class UserRN
{
    use \Serbinario\Bundles\UserBundle\RN\TraitRN;

    /**
     * @var InterfaceUserDAO
     */
    private $dao;

    /**
     * @param InterfaceUserDAO $dao
     */
    public function __construct(InterfaceUserDAO $dao)
    {
        $this->dao = $dao;
    }
}