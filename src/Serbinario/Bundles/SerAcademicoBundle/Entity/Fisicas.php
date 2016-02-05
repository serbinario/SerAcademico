<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fisicas
 *
 * @ORM\Table(name="fisicas")
 * @ORM\Entity
 */
class Fisicas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fisicas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFisicas;

    /**
     * @var string
     *
     * @ORM\Column(name="fisicas", type="string", length=45, nullable=true)
     */
    private $fisicas;



    /**
     * Get idFisicas
     *
     * @return integer
     */
    public function getIdFisicas()
    {
        return $this->idFisicas;
    }

    /**
     * Set fisicas
     *
     * @param string $fisicas
     *
     * @return Fisicas
     */
    public function setFisicas($fisicas)
    {
        $this->fisicas = $fisicas;

        return $this;
    }

    /**
     * Get fisicas
     *
     * @return string
     */
    public function getFisicas()
    {
        return $this->fisicas;
    }
}
