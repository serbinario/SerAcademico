<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Idiomas
 *
 * @ORM\Table(name="idiomas")
 * @ORM\Entity
 */
class Idiomas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_idiomas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIdiomas;

    /**
     * @var string
     *
     * @ORM\Column(name="idiomas", type="string", length=50, nullable=true)
     */
    private $idiomas;



    /**
     * Get idIdiomas
     *
     * @return integer
     */
    public function getIdIdiomas()
    {
        return $this->idIdiomas;
    }

    /**
     * Set idiomas
     *
     * @param string $idiomas
     *
     * @return Idiomas
     */
    public function setIdiomas($idiomas)
    {
        $this->idiomas = $idiomas;

        return $this;
    }

    /**
     * Get idiomas
     *
     * @return string
     */
    public function getIdiomas()
    {
        return $this->idiomas;
    }
}
