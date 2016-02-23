<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Turnos
 *
 * @ORM\Table(name="turnos")
 * @ORM\Entity
 */
class Turnos
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
     * @SerializedName("turnos")
     * @ORM\Column(name="turnos", type="string", length=45, nullable=true)
     */
    private $turnos;

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
     * Set turnos
     *
     * @param string $turnos
     *
     * @return Turnos
     */
    public function setTurnos($turnos)
    {
        $this->turnos = $turnos;

        return $this;
    }

    /**
     * Get turnos
     *
     * @return string
     */
    public function getTurnos()
    {
        return $this->turnos;
    }
}
