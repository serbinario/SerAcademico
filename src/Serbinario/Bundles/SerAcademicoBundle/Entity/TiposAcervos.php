<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposAcervos
 *
 * @ORM\Table(name="tipos_acervos")
 * @ORM\Entity
 */
class TiposAcervos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipos_acervos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTiposAcervos;

    /**
     * @var string
     *
     * @ORM\Column(name="tipos_acervos", type="string", length=50, nullable=true)
     */
    private $tiposAcervos;



    /**
     * Get idTiposAcervos
     *
     * @return integer
     */
    public function getIdTiposAcervos()
    {
        return $this->idTiposAcervos;
    }

    /**
     * Set tiposAcervos
     *
     * @param string $tiposAcervos
     *
     * @return TiposAcervos
     */
    public function setTiposAcervos($tiposAcervos)
    {
        $this->tiposAcervos = $tiposAcervos;

        return $this;
    }

    /**
     * Get tiposAcervos
     *
     * @return string
     */
    public function getTiposAcervos()
    {
        return $this->tiposAcervos;
    }
}
