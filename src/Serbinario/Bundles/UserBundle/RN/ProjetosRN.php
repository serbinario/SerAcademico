<?php

namespace Serbinario\Bundles\UserBundle\RN;

use Serbinario\Bundles\UserBundle\DAO\InterfaceProjetosDAO;

/**
 * Description of ProjetosRN
 *
 * @author serbinario
 */
class ProjetosRN
{
    use \Serbinario\Bundles\UserBundle\RN\TraitRN;

    /**
     * @var InterfaceProjetosDAO
     */
    private $dao;

    /**
     * @param InterfaceProjetosDAO $dao
     */
    public function __construct(InterfaceProjetosDAO $dao)
    {
        $this->dao = $dao;
    }
}
