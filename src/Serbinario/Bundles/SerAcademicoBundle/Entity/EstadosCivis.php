<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

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
     * @SerializedName("id")
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @SerializedName("estadosCivis")
     * @ORM\Column(name="estados_civis", type="string", length=45, nullable=true)
     */
    private $estadosCivis;

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
