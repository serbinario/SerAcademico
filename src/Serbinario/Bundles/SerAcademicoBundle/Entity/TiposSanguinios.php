<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

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
     * @SerializedName("id")
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @SerializedName("tiposSanguinios")
     * @ORM\Column(name="tipos_sanguinios", type="string", length=45, nullable=true)
     */
    private $tiposSanguinios;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
