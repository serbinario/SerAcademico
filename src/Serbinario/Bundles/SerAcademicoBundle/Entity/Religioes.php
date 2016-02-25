<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

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
     * @SerializedName("id")
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @SerializedName("religioes")
     * @ORM\Column(name="religioes", type="string", length=45, nullable=true)
     */
    private $religioes;

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
