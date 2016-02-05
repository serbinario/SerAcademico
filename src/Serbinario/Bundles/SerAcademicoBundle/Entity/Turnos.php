<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="id_turnos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTurnos;

    /**
     * @var string
     *
     * @ORM\Column(name="turnos", type="string", length=45, nullable=true)
     */
    private $turnos;



    /**
     * Get idTurnos
     *
     * @return integer
     */
    public function getIdTurnos()
    {
        return $this->idTurnos;
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
