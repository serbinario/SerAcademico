<?php

namespace Serbinario\Bundles\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Estados
 *
 * @ORM\Table(name="estados")
 * @ORM\Entity
 */
class Estados
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
     * @var string
     *
     * @SerializedName("prefixo")
     * @ORM\Column(name="prefixo", type="string", length=3, nullable=true)
     */
    private $prefixo;
    

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
     * @return Estados
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
     * Set prefixo
     *
     * @param string $prefixo
     *
     * @return Estados
     */
    public function setPrefixo($prefixo)
    {
        $this->prefixo = $prefixo;

        return $this;
    }

    /**
     * Get prefixo
     *
     * @return string
     */
    public function getPrefixo()
    {
        return $this->prefixo;
    }
}
