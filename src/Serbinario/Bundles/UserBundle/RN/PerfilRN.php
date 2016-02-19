<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 18/02/16
 * Time: 12:22
 */

namespace Serbinario\Bundles\UserBundle\RN;

use Serbinario\Bundles\UserBundle\DAO\InterfacePerfilDAO;

class PerfilRN
{
    use \Serbinario\Bundles\UserBundle\RN\TraitRN;

    /**
     * @var InterfacePerfilDAO
     */
    private $dao;

    /**
     * @param InterfacePerfilDAO $dao
     */
    public function __construct(InterfacePerfilDAO $dao)
    {
        $this->dao = $dao;
    }
}