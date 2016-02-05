<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sexos
 *
 * @ORM\Table(name="sexos")
 * @ORM\Entity
 */
class Sexos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sexos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSexos;

    /**
     * @var string
     *
     * @ORM\Column(name="sexos", type="string", length=10, nullable=true)
     */
    private $sexos;



    /**
     * Get idSexos
     *
     * @return integer
     */
    public function getIdSexos()
    {
        return $this->idSexos;
    }

    /**
     * Set sexos
     *
     * @param string $sexos
     *
     * @return Sexos
     */
    public function setSexos($sexos)
    {
        $this->sexos = $sexos;

        return $this;
    }

    /**
     * Get sexos
     *
     * @return string
     */
    public function getSexos()
    {
        return $this->sexos;
    }
}
