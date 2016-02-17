<?php

namespace Serbinario\Bundles\UserBundle\RN;

use Serbinario\Bundles\UserBundle\DAO\InterfaceAplicacoesDAO;

/**
 * Description of AplicacoesRN
 *
 * @author serbinario
 */
class AplicacoesRN
{
    use \Serbinario\Bundles\UserBundle\RN\TraitRN;

    /**
     * @var InterfaceAplicacoesDAO
     */
    private $dao;

    /**
     * @param InterfaceAplicacoesDAO $dao
     */
    public function __construct(InterfaceAplicacoesDAO $dao)
    {
        $this->dao = $dao;
    }
}
