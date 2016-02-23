<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

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
     * @SerializedName("id")
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @SerializedName("exames")
     * @ORM\Column(name="exames", type="string", length=45, nullable=true)
     */
    private $exames;

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
