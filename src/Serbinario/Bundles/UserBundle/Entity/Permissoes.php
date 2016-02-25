<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 25/01/16
 * Time: 19:35
 */

namespace Serbinario\Bundles\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @ORM\Entity()
 * @ORM\Table(name="permissoes")
 */
class Permissoes
{
    /**
     * @SerializedName("id")
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @SerializedName("nome")
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     *
     * @SerializedName("aplicacao")
     * @ORM\ManyToOne(targetEntity="Aplicacoes", inversedBy="permissoes")
     * @ORM\JoinColumn(name="aplicacao_id", referencedColumnName="id")
     */
    private $aplicacao;

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
     * @return Permissoes
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
     * Set aplicacao
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Aplicacoes $aplicacao
     *
     * @return Permissoes
     */
    public function setAplicacao(\Serbinario\Bundles\UserBundle\Entity\Aplicacoes $aplicacao = null)
    {
        $this->aplicacao = $aplicacao;

        return $this;
    }

    /**
     * Get aplicacao
     *
     * @return \Serbinario\Bundles\UserBundle\Entity\Aplicacoes
     */
    public function getAplicacao()
    {
        return $this->aplicacao;
    }
}
