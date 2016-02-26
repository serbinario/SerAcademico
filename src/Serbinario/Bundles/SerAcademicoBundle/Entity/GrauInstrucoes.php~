<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * GrauInstrucoes
 *
 * @ORM\Table(name="grau_instrucoes")
 * @ORM\Entity
 */
class GrauInstrucoes
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
     * @SerializedName("grauInstrucoes")
     * @ORM\Column(name="grau_instrucoes", type="string", length=45, nullable=true)
     */
    private $grauInstrucoes;

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
     * Set grauInstrucoes
     *
     * @param string $grauInstrucoes
     *
     * @return GrauInstrucoes
     */
    public function setGrauInstrucoes($grauInstrucoes)
    {
        $this->grauInstrucoes = $grauInstrucoes;

        return $this;
    }

    /**
     * Get grauInstrucoes
     *
     * @return string
     */
    public function getGrauInstrucoes()
    {
        return $this->grauInstrucoes;
    }
}
