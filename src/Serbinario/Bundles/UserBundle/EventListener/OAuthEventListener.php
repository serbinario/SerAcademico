<?php

namespace Serbinario\Bundles\UserBundle\EventListener;

use Doctrine\ORM\EntityManager;
use FOS\OAuthServerBundle\Event\OAuthEvent;

/**
 * Created by PhpStorm.
 * User: serbinario
 * Date: 20/01/16
 * Time: 09:50
 */
class OAuthEventListener
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function onPreAuthorizationProcess(OAuthEvent $event)
    {
        if ($user = $this->getUser($event)) {
            $event->setAuthorizedClient(
                $user->isAuthorizedClient($event->getClient())
            );
        }
    }

    public function onPostAuthorizationProcess(OAuthEvent $event)
    {
        if ($event->isAuthorizedClient()) {
            if (null !== $client = $event->getClient()) {
                $user = $this->getUser($event);
                $user->addClient($client);
                $user->save();
            }
        }
    }

    protected function getUser(OAuthEvent $event)
    {
        return UserQuery::create()
            ->filterByUsername($event->getUser()->getUsername())
            ->findOne();
    }
}