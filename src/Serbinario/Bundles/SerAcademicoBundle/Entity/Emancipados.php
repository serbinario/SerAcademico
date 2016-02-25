<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

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
     * @SerializedName("id")
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @SerializedName("emancipados")
     * @ORM\Column(name="emancipados", type="string", length=45, nullable=true)
     */
    private $emancipados;

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
