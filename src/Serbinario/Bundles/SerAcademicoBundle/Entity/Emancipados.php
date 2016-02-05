<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emancipados
 *
 * @ORM\Table(name="emancipados")
 * @ORM\Entity
 */
class Emancipados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_emancipados", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmancipados;

    /**
     * @var string
     *
     * @ORM\Column(name="emancipados", type="string", length=45, nullable=true)
     */
    private $emancipados;



    /**
     * Get idEmancipados
     *
     * @return integer
     */
    public function getIdEmancipados()
    {
        return $this->idEmancipados;
    }

    /**
     * Set emancipados
     *
     * @param string $emancipados
     *
     * @return Emancipados
     */
    public function setEmancipados($emancipados)
    {
        $this->emancipados = $emancipados;

        return $this;
    }

    /**
     * Get emancipados
     *
     * @return string
     */
    public function getEmancipados()
    {
        return $this->emancipados;
    }
}
