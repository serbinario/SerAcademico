<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 25/01/16
 * Time: 19:25
 */

namespace Serbinario\Bundles\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @ORM\Entity
 * @ORM\Table(name="projetos")
 */
class Projetos
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
     * @SerializedName("aplicacoes")
     * @ORM\OneToMany(targetEntity="Aplicacoes", mappedBy="projeto")
     **/
    private $aplicacoes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aplicacoes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Projetos
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
     * Add aplicaco
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Aplicacoes $aplicaco
     *
     * @return Projetos
     */
    public function addAplicaco(\Serbinario\Bundles\UserBundle\Entity\Aplicacoes $aplicaco)
    {
        $this->aplicacoes[] = $aplicaco;

        return $this;
    }

    /**
     * Remove aplicaco
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Aplicacoes $aplicaco
     */
    public function removeAplicaco(\Serbinario\Bundles\UserBundle\Entity\Aplicacoes $aplicaco)
    {
        $this->aplicacoes->removeElement($aplicaco);
    }

    /**
     * Get aplicacoes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAplicacoes()
    {
        return $this->aplicacoes;
    }
}
