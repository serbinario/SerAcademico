<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cidades
 *
 * @ORM\Table(name="cidades", indexes={@ORM\Index(name="fk_cidades_estados1_idx", columns={"estados_id_estados"})})
 * @ORM\Entity
 */
class Cidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cidades", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCidades;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_cidade", type="string", length=50, nullable=true)
     */
    private $nomeCidade;

    /**
     * @var \Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estados_id_estados", referencedColumnName="id_estados")
     * })
     */
    private $estadosEstados;



    /**
     * Get idCidades
     *
     * @return integer
     */
    public function getIdCidades()
    {
        return $this->idCidades;
    }

    /**
     * Set nomeCidade
     *
     * @param string $nomeCidade
     *
     * @return Cidades
     */
    public function setNomeCidade($nomeCidade)
    {
        $this->nomeCidade = $nomeCidade;

        return $this;
    }

    /**
     * Get nomeCidade
     *
     * @return string
     */
    public function getNomeCidade()
    {
        return $this->nomeCidade;
    }

    /**
     * Set estadosEstados
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Estados $estadosEstados
     *
     * @return Cidades
     */
    public function setEstadosEstados(\Serbinario\Bundles\SerAcademicoBundle\Entity\Estados $estadosEstados = null)
    {
        $this->estadosEstados = $estadosEstados;

        return $this;
    }

    /**
     * Get estadosEstados
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Estados
     */
    public function getEstadosEstados()
    {
        return $this->estadosEstados;
    }
}
