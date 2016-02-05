<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exames
 *
 * @ORM\Table(name="exames")
 * @ORM\Entity
 */
class Exames
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_exames", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExames;

    /**
     * @var string
     *
     * @ORM\Column(name="exames", type="string", length=45, nullable=true)
     */
    private $exames;



    /**
     * Get idExames
     *
     * @return integer
     */
    public function getIdExames()
    {
        return $this->idExames;
    }

    /**
     * Set exames
     *
     * @param string $exames
     *
     * @return Exames
     */
    public function setExames($exames)
    {
        $this->exames = $exames;

        return $this;
    }

    /**
     * Get exames
     *
     * @return string
     */
    public function getExames()
    {
        return $this->exames;
    }
}
