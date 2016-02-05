<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrauInstrucoes
 *
 * @ORM\Table(name="grau_instrucoes")
 * @ORM\Entity
 */
class GrauInstrucoes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_grau_instrucoes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrauInstrucoes;

    /**
     * @var string
     *
     * @ORM\Column(name="grau_instrucoes", type="string", length=45, nullable=true)
     */
    private $grauInstrucoes;



    /**
     * Get idGrauInstrucoes
     *
     * @return integer
     */
    public function getIdGrauInstrucoes()
    {
        return $this->idGrauInstrucoes;
    }

    /**
     * Set grauInstrucoes
     *
     * @param string $grauInstrucoes
     *
     * @return GrauInstrucoes
     */
    public function setGrauInstrucoes($grauInstrucoes)
    {
        $this->grauInstrucoes = $grauInstrucoes;

        return $this;
    }

    /**
     * Get grauInstrucoes
     *
     * @return string
     */
    public function getGrauInstrucoes()
    {
        return $this->grauInstrucoes;
    }
}
