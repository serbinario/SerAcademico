<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 25/01/16
 * Time: 19:25
 */

namespace Serbinario\Bundles\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="projetos")
 */
class Projetos
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomeProjeto;

    /**
     * @ORM\OneToMany(targetEntity="Aplicacoes", mappedBy="projeto")
     **/
    private $aplicacoes;

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
     * Set nomeProjeto
     *
     * @param string $nomeProjeto
     *
     * @return Projetos
     */
    public function setNomeProjeto($nomeProjeto)
    {
        $this->nomeProjeto = $nomeProjeto;

        return $this;
    }

    /**
     * Get nomeProjeto
     *
     * @return string
     */
    public function getNomeProjeto()
    {
        return $this->nomeProjeto;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aplicacoes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add aplicaco
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Aplicacao $aplicaco
     *
     * @return Projetos
     */
    public function addAplicaco(\Serbinario\Bundles\UserBundle\Entity\Aplicacao $aplicaco)
    {
        $this->aplicacoes[] = $aplicaco;

        return $this;
    }

    /**
     * Remove aplicaco
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Aplicacao $aplicaco
     */
    public function removeAplicaco(\Serbinario\Bundles\UserBundle\Entity\Aplicacao $aplicaco)
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