<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visuais
 *
 * @ORM\Table(name="visuais")
 * @ORM\Entity
 */
class Visuais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_visuais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVisuais;

    /**
     * @var string
     *
     * @ORM\Column(name="visuais", type="string", length=45, nullable=true)
     */
    private $visuais;



    /**
     * Get idVisuais
     *
     * @return integer
     */
    public function getIdVisuais()
    {
        return $this->idVisuais;
    }

    /**
     * Set visuais
     *
     * @param string $visuais
     *
     * @return Visuais
     */
    public function setVisuais($visuais)
    {
        $this->visuais = $visuais;

        return $this;
    }

    /**
     * Get visuais
     *
     * @return string
     */
    public function getVisuais()
    {
        return $this->visuais;
    }
}
