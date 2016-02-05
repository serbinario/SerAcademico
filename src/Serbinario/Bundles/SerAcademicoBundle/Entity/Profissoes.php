<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profissoes
 *
 * @ORM\Table(name="profissoes")
 * @ORM\Entity
 */
class Profissoes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_profissoes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfissoes;

    /**
     * @var string
     *
     * @ORM\Column(name="profissoes", type="string", length=45, nullable=true)
     */
    private $profissoes;



    /**
     * Get idProfissoes
     *
     * @return integer
     */
    public function getIdProfissoes()
    {
        return $this->idProfissoes;
    }

    /**
     * Set profissoes
     *
     * @param string $profissoes
     *
     * @return Profissoes
     */
    public function setProfissoes($profissoes)
    {
        $this->profissoes = $profissoes;

        return $this;
    }

    /**
     * Get profissoes
     *
     * @return string
     */
    public function getProfissoes()
    {
        return $this->profissoes;
    }
}
