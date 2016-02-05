<?php

namespace Serbinario\Bundles\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository //implements UserProviderInterface
{
//    /**
//     * @param string $username
//     * @return mixed
//     * @throws UsernameNotFoundException
//     * @throws \Doctrine\ORM\NonUniqueResultException
//     */
//    public function loadUserByUsername($username)
//    {
//        $user = $this->createQueryBuilder('u')
//            ->where('u.username = :username OR u.email = :email')
//            ->setParameter('username', $username)
//            ->setParameter('email', $username)
//            ->getQuery()
//            ->getOneOrNullResult();
//
//        if (null === $user) {
//            $message = sprintf(
//                'Usuário "%s" não encontrado, tente novamente.',
//                $username
//            );
//            throw new UsernameNotFoundException($message);
//        }
//
//        return $user;
//    }
//
//    /**
//     * @param UserInterface $user
//     * @return null|object
//     * @throws UnsupportedUserException
//     */
//    public function refreshUser(UserInterface $user)
//    {
//        $class = get_class($user);
//        if (!$this->supportsClass($class)) {
//            throw new UnsupportedUserException(
//                sprintf(
//                    'Instância da "%s" não é suportada.',
//                    $class
//                )
//            );
//        }
//
//        return $this->find($user->getId());
//    }
//
//    /**
//     * @param string $class
//     * @return bool
//     */
//    public function supportsClass($class)
//    {
//        return $this->getEntityName() === $class
//        || is_subclass_of($class, $this->getEntityName());
//    }
}
