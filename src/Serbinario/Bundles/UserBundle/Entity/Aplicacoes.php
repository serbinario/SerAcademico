<?php
/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 25/01/16
 * Time: 19:29
 */

namespace Serbinario\Bundles\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @ORM\Entity()
 * @ORM\Table(name="aplicacoes")
 */
class Aplicacoes
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
     * @SerializedName("projeto")
     * @ORM\ManyToOne(targetEntity="Projetos", inversedBy="aplicacoes")
     * @ORM\JoinColumn(name="projeto_id", referencedColumnName="id")
     */
    private $projeto;

    /**
     * @ORM\OneToMany(targetEntity="Permissoes", mappedBy="aplicacao")
     **/
    private $permissoes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->permissoes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Aplicacoes
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
     * Set projeto
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Projetos $projeto
     *
     * @return Aplicacoes
     */
    public function setProjeto(\Serbinario\Bundles\UserBundle\Entity\Projetos $projeto = null)
    {
        $this->projeto = $projeto;

        return $this;
    }

    /**
     * Get projeto
     *
     * @return \Serbinario\Bundles\UserBundle\Entity\Projetos
     */
    public function getProjeto()
    {
        return $this->projeto;
    }

    /**
     * Add permisso
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Permissoes $permisso
     *
     * @return Aplicacoes
     */
    public function addPermisso(\Serbinario\Bundles\UserBundle\Entity\Permissoes $permisso)
    {
        $this->permissoes[] = $permisso;

        return $this;
    }

    /**
     * Remove permisso
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Permissoes $permisso
     */
    public function removePermisso(\Serbinario\Bundles\UserBundle\Entity\Permissoes $permisso)
    {
        $this->permissoes->removeElement($permisso);
    }

    /**
     * Get permissoes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPermissoes()
    {
        return $this->permissoes;
    }
}
