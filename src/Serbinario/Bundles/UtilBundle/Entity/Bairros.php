<?php

namespace Serbinario\Bundles\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bairros
 *
 * @ORM\Table(name="bairros")
 * @ORM\Entity
 */
class Bairros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_bairros", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBairros;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_bairros", type="string", length=255, nullable=true)
     */
    private $nomeBairros;

    /**
     * @var \Cidades
     *
     * @ORM\ManyToOne(targetEntity="Cidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidades_id_cidades", referencedColumnName="id_cidades")
     * })
     */
    private $cidadesCidades;



    /**
     * Get idBairros
     *
     * @return integer
     */
    public function getIdBairros()
    {
        return $this->idBairros;
    }

    /**
     * Set nomeBairros
     *
     * @param string $nomeBairros
     *
     * @return Bairros
     */
    public function setNomeBairros($nomeBairros)
    {
        $this->nomeBairros = $nomeBairros;

        return $this;
    }

    /**
     * Get nomeBairros
     *
     * @return string
     */
    public function getNomeBairros()
    {
        return $this->nomeBairros;
    }

    /**
     * Set cidadesCidades
     *
     * @param \Serbinario\Bundles\UtilBundle\Entity\Cidades $cidadesCidades
     *
     * @return Bairros
     */
    public function setCidadesCidades(\Serbinario\Bundles\UtilBundle\Entity\Cidades $cidadesCidades = null)
    {
        $this->cidadesCidades = $cidadesCidades;

        return $this;
    }

    /**
     * Get cidadesCidades
     *
     * @return \Serbinario\Bundles\UtilBundle\Entity\Cidades
     */
    public function getCidadesCidades()
    {
        return $this->cidadesCidades;
    }
}
