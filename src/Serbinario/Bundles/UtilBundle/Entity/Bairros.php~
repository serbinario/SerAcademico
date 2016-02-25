<?php

namespace Serbinario\Bundles\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Bairros
 *
 * @ORM\Table(name="bairros", indexes={@ORM\Index(name="fk_bairros_cidades1_idx", columns={"cidades_id_cidades"})})
 * @ORM\Entity
 */
class Bairros
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
     * @SerializedName("nome")
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var \Cidades
     *
     * @SerializedName("cidadesCidades")
     * @ORM\ManyToOne(targetEntity="Cidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidades_id_cidades", referencedColumnName="id")
     * })
     */
    private $cidadesCidades;


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
     * Set nome
     *
     * @param string $nome
     *
     * @return Bairros
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cidadesCidades
     *
     * @param \Serbinario\Bundles\UtilBundle\Entity\Cidades $cidadesCidades
     *
     * @return Bairros
     */
    public function setCidadesCidades(\Serbinario\Bundles\UtilBundle\Entity\Cidades $cidadesCidades = null)
    {
        $this->cidadesCidades = $cidadesCidades;

        return $this;
    }

    /**
     * Get cidadesCidades
     *
     * @return \Serbinario\Bundles\UtilBundle\Entity\Cidades
     */
    public function getCidadesCidades()
    {
        return $this->cidadesCidades;
    }
}
