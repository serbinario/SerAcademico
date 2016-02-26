<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Visuais
 *
 * @ORM\Table(name="visuais")
 * @ORM\Entity
 */
class Visuais
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
     * @SerializedName("visuais")
     * @ORM\Column(name="visuais", type="string", length=45, nullable=true)
     */
    private $visuais;

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
     * Set visuais
     *
     * @param string $visuais
     *
     * @return Visuais
     */
    public function setVisuais($visuais)
    {
        $this->visuais = $visuais;

        return $this;
    }

    /**
     * Get visuais
     *
     * @return string
     */
    public function getVisuais()
    {
        return $this->visuais;
    }
}
