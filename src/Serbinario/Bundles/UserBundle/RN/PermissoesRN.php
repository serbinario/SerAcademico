<?php

namespace Serbinario\Bundles\UserBundle\RN;

use Serbinario\Bundles\UserBundle\DAO\InterfacePermissoesDAO;

/**
 * Description of PermissoesRN
 *
 * @author serbinario
 */
class PermissoesRN
{
    use \Serbinario\Bundles\UserBundle\RN\TraitRN;

    /**
     * @var InterfacePermissoesDAO
     */
    private $dao;

    /**
     * @param InterfacePermissoesDAO $dao
     */
    public function __construct(InterfacePermissoesDAO $dao)
    {
        $this->dao = $dao;
    }
}
