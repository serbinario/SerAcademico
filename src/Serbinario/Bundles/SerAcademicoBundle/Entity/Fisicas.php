<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Fisicas
 *
 * @ORM\Table(name="fisicas")
 * @ORM\Entity
 */
class Fisicas
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
     * @SerializedName("fisicas")
     * @ORM\Column(name="fisicas", type="string", length=45, nullable=true)
     */
    private $fisicas;

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
     * Set fisicas
     *
     * @param string $fisicas
     *
     * @return Fisicas
     */
    public function setFisicas($fisicas)
    {
        $this->fisicas = $fisicas;

        return $this;
    }

    /**
     * Get fisicas
     *
     * @return string
     */
    public function getFisicas()
    {
        return $this->fisicas;
    }
}
