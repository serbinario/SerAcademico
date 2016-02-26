<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Profissoes
 *
 * @ORM\Table(name="profissoes")
 * @ORM\Entity
 */
class Profissoes
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
     * @SerializedName("profissoes")
     * @ORM\Column(name="profissoes", type="string", length=45, nullable=true)
     */
    private $profissoes;

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
     * Set profissoes
     *
     * @param string $profissoes
     *
     * @return Profissoes
     */
    public function setProfissoes($profissoes)
    {
        $this->profissoes = $profissoes;

        return $this;
    }

    /**
     * Get profissoes
     *
     * @return string
     */
    public function getProfissoes()
    {
        return $this->profissoes;
    }
}
