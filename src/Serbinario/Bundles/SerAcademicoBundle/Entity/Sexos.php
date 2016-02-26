<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

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
     * @SerializedName("id")
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @SerializedName("sexos")
     * @ORM\Column(name="sexos", type="string", length=10, nullable=true)
     */
    private $sexos;

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
