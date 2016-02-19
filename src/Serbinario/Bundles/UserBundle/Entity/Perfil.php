<?php

namespace Serbinario\Bundles\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="perfil")
 * @ORM\Entity()
 */
class Perfil 
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     */
    private $nomePerfil;
    
    /**
     * @ORM\ManyToMany(targetEntity="Role", cascade={"all"})
     * @ORM\JoinTable(name="roles_perfis",
     *      joinColumns={@ORM\JoinColumn(name="perfil_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     *      )
     **/
    private $roles;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nomePerfil
     *
     * @param string $nomePerfil
     *
     * @return Perfil
     */
    public function setNomePerfil($nomePerfil)
    {
        $this->nomePerfil = $nomePerfil;

        return $this;
    }

    /**
     * Get nomePerfil
     *
     * @return string
     */
    public function getNomePerfil()
    {
        return $this->nomePerfil;
    }

    /**
     * Add role
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Role $role
     *
     * @return Perfil
     */
    public function addRole(\Serbinario\Bundles\UserBundle\Entity\Role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Role $role
     */
    public function removeRole(\Serbinario\Bundles\UserBundle\Entity\Role $role)
    {
        $this->roles->removeElement($role);
    }
    
    /**
     * 
     */
    public function clearRoles()
    {
        $this->roles->clear();
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
