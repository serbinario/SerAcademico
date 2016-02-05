<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposSanguinios
 *
 * @ORM\Table(name="tipos_sanguinios")
 * @ORM\Entity
 */
class TiposSanguinios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipos_sanguinios", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTiposSanguinios;

    /**
     * @var string
     *
     * @ORM\Column(name="tipos_sanguinios", type="string", length=45, nullable=true)
     */
    private $tiposSanguinios;



    /**
     * Get idTiposSanguinios
     *
     * @return integer
     */
    public function getIdTiposSanguinios()
    {
        return $this->idTiposSanguinios;
    }

    /**
     * Set tiposSanguinios
     *
     * @param string $tiposSanguinios
     *
     * @return TiposSanguinios
     */
    public function setTiposSanguinios($tiposSanguinios)
    {
        $this->tiposSanguinios = $tiposSanguinios;

        return $this;
    }

    /**
     * Get tiposSanguinios
     *
     * @return string
     */
    public function getTiposSanguinios()
    {
        return $this->tiposSanguinios;
    }
}
