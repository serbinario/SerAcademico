<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadosCivis
 *
 * @ORM\Table(name="estados_civis")
 * @ORM\Entity
 */
class EstadosCivis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_estados_civis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstadosCivis;

    /**
     * @var string
     *
     * @ORM\Column(name="estados_civis", type="string", length=45, nullable=true)
     */
    private $estadosCivis;



    /**
     * Get idEstadosCivis
     *
     * @return integer
     */
    public function getIdEstadosCivis()
    {
        return $this->idEstadosCivis;
    }

    /**
     * Set estadosCivis
     *
     * @param string $estadosCivis
     *
     * @return EstadosCivis
     */
    public function setEstadosCivis($estadosCivis)
    {
        $this->estadosCivis = $estadosCivis;

        return $this;
    }

    /**
     * Get estadosCivis
     *
     * @return string
     */
    public function getEstadosCivis()
    {
        return $this->estadosCivis;
    }
}
