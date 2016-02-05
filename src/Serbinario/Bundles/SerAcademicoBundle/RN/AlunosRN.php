<?php

namespace Serbinario\Bundles\SerAcademicoBundle\RN;

use Serbinario\Bundles\SerAcademicoBundle\DAO\InterfaceAlunosDAO;

/**
 * Description of AlunosRN
 *
 * @author serbinario
 */
class AlunosRN
{
    use \Serbinario\Bundles\SerAcademicoBundle\RN\TraitRN;

    /**
     * @var InterfaceAlunosDAO
     */
    private $dao;

    /**
     * @param InterfaceAlunosDAO $dao
     */
    public function __construct(InterfaceAlunosDAO $dao)
    {
        $this->dao = $dao;
    }
}
