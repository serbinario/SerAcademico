<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ilustracoes
 *
 * @ORM\Table(name="ilustracoes")
 * @ORM\Entity
 */
class Ilustracoes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ilustracoes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIlustracoes;

    /**
     * @var string
     *
     * @ORM\Column(name="ilustracoes", type="string", length=3, nullable=true)
     */
    private $ilustracoes;



    /**
     * Get idIlustracoes
     *
     * @return integer
     */
    public function getIdIlustracoes()
    {
        return $this->idIlustracoes;
    }

    /**
     * Set ilustracoes
     *
     * @param string $ilustracoes
     *
     * @return Ilustracoes
     */
    public function setIlustracoes($ilustracoes)
    {
        $this->ilustracoes = $ilustracoes;

        return $this;
    }

    /**
     * Get ilustracoes
     *
     * @return string
     */
    public function getIlustracoes()
    {
        return $this->ilustracoes;
    }
}
