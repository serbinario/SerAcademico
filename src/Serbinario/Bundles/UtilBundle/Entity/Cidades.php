<?php

namespace Serbinario\Bundles\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

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
     * @SerializedName("id")
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string
     *
     * @SerializedName("nome")
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var \Estados
     *
     * @SerializedName("estadosEstados")
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estados_id_estados", referencedColumnName="id")
     * })
     */
    private $estadosEstados;
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Cidades
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set estadosEstados
     *
     * @param \Serbinario\Bundles\UtilBundle\Entity\Estados $estadosEstados
     *
     * @return Cidades
     */
    public function setEstadosEstados(\Serbinario\Bundles\UtilBundle\Entity\Estados $estadosEstados = null)
    {
        $this->estadosEstados = $estadosEstados;

        return $this;
    }

    /**
     * Get estadosEstados
     *
     * @return \Serbinario\Bundles\UtilBundle\Entity\Estados
     */
    public function getEstadosEstados()
    {
        return $this->estadosEstados;
    }
}
