<?php
namespace Serbinario\Bundles\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Serbinario\Bundles\UserBundle\Entity\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;

/**
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Serbinario\Bundles\UserBundle\Entity\UserRepository")
 */
class User implements UserInterface, AdvancedUserInterface, EquatableInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salt;

    /**
     * @ORM\Column(type="string", length=60, nullable=false)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Perfil", cascade={"persist"})
     * @ORM\JoinTable(name="perfis_user",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="perfil_id", referencedColumnName="id")}
     *      )
     **/
    private $perfis;

    /**
     * @ORM\ManyToMany(targetEntity="Role", cascade={"persist"})
     * @ORM\JoinTable(name="users_has_roles",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     *      )
     */
    private $roles;

    /**
     * Construtor
     */
    public function __construct()
    {
        $this->isActive = true;
        $this->roles    = new ArrayCollection();
        $this->perfis   = new ArrayCollection();
        $this->salt     = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return null
     */
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return $this->salt;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        #Variáveis ultilizadas
        $arrayRetorno = array('ROLE_USER');
        $perfis       = $this->perfis->toArray();
        $roles        = $this->roles->toArray();

        #Adicionando roles dos perfis
        if(count($perfis) > 0) {
            foreach($perfis as $perfil) {
                $rolesPerfil = $perfil->getRoles()->toArray();
                if(count($rolesPerfil) > 0) {
                    foreach($rolesPerfil as $role) {
                        \array_push($arrayRetorno, $role);
                    }

                }
            }
        }

        #Adicionando roles individuais
        foreach($roles as $role) {
            \array_push($arrayRetorno, $role);
        }

        #Retorno
        return \array_unique($arrayRetorno);
    }

    /**
     * ...
     */
    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

    /**
     * Checks whether the user's account has expired.
     *
     * Internally, if this method returns false, the authentication system
     * will throw an AccountExpiredException and prevent login.
     *
     * @return bool true if the user's account is non expired, false otherwise
     *
     * @see AccountExpiredException
     */
    public function isAccountNonExpired()
    {
        return true;
    }

    /**
     * Checks whether the user is locked.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a LockedException and prevent login.
     *
     * @return bool true if the user is not locked, false otherwise
     *
     * @see LockedException
     */
    public function isAccountNonLocked()
    {
        return true;
    }

    /**
     * Checks whether the user's credentials (password) has expired.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a CredentialsExpiredException and prevent login.
     *
     * @return bool true if the user's credentials are non expired, false otherwise
     *
     * @see CredentialsExpiredException
     */
    public function isCredentialsNonExpired()
    {
        return true;
    }

    /**
     * Checks whether the user is enabled.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a DisabledException and prevent login.
     *
     * @return bool true if the user is enabled, false otherwise
     *
     * @see DisabledException
     */
    public function isEnabled()
    {
        return $this->getIsActive();
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add roles
     *
     * @param Role $roles
     * @return User
     */
    public function addRole(Role $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param Role $roles
     */
    public function removeRole(Role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     *
     */
    public function clearRoles()
    {
        $this->roles->clear();
    }

    /**
     * The equality comparison should neither be done by referential equality
     * nor by comparing identities (i.e. getId() === getId()).
     *
     * However, you do not need to compare every attribute, but only those that
     * are relevant for assessing whether re-authentication is required.
     *
     * Also implementation should consider that $user instance may implement
     * the extended user interface `AdvancedUserInterface`.
     *
     * @param UserInterface $user
     *
     * @return bool
     */
    public function isEqualTo(UserInterface $user)
    {
        if (!$user instanceof User) {
            return false;
        }

        if ($this->password !== $user->getPassword()) {
            return false;
        }

        if ($this->salt !== $user->getSalt()) {
            return false;
        }

        if ($this->username !== $user->getUsername()) {
            return false;
        }

        return true;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }


    /**
     * Add perfi
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Perfil $perfi
     *
     * @return User
     */
    public function addPerfi(\Serbinario\Bundles\UserBundle\Entity\Perfil $perfi)
    {
        $this->perfis[] = $perfi;

        return $this;
    }

    /**
     * Remove perfi
     *
     * @param \Serbinario\Bundles\UserBundle\Entity\Perfil $perfi
     */
    public function removePerfi(\Serbinario\Bundles\UserBundle\Entity\Perfil $perfi)
    {
        $this->perfis->removeElement($perfi);
    }

    /**
     * Get perfis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPerfis()
    {
        return $this->perfis;
    }

    /**
     *
     */
    public function clearPerfis()
    {
        $this->roles->clear();
    }
}
