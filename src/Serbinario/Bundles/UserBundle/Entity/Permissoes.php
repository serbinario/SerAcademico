<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 25/01/16
 * Time: 19:35
 */

namespace Serbinario\Bundles\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="permissoes")
 */
class Permissoes
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
    private $nomePermissao;

    /**
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
     * Set nomePermissao
     *
     * @param string $nomePermissao
     *
     * @return Permissoes
     */
    public function setNomePermissao($nomePermissao)
    {
        $this->nomePermissao = $nomePermissao;

        return $this;
    }

    /**
     * Get nomePermissao
     *
     * @return string
     */
    public function getNomePermissao()
    {
        return $this->nomePermissao;
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
