<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Religioes
 *
 * @ORM\Table(name="religioes")
 * @ORM\Entity
 */
class Religioes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_religioes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReligioes;

    /**
     * @var string
     *
     * @ORM\Column(name="religioes", type="string", length=45, nullable=true)
     */
    private $religioes;



    /**
     * Get idReligioes
     *
     * @return integer
     */
    public function getIdReligioes()
    {
        return $this->idReligioes;
    }

    /**
     * Set religioes
     *
     * @param string $religioes
     *
     * @return Religioes
     */
    public function setReligioes($religioes)
    {
        $this->religioes = $religioes;

        return $this;
    }

    /**
     * Get religioes
     *
     * @return string
     */
    public function getReligioes()
    {
        return $this->religioes;
    }
}
