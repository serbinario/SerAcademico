<?php

namespace Serbinario\Bundles\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Serbinario\Bundles\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        // verificando se ocorreu um erro
        if ($error) {
            $this->addFlash("danger", "Usuário ou senha inválidos");
        }

        return array(
        // last username entered by the user
            'last_username' => $lastUsername,
            'error' => $error,
        );

    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
    }

    /**
     * @Route("/getUser", name="getUser")
     */
    public function getUserAction()
    {
        $serializer = $this->get("jms_serializer");

        $tokenManager = $this->get('fos_oauth_server.access_token_manager.default');
        $accessToken  = $tokenManager->findTokenByToken(
           $this->get('security.token_storage')->getToken()->getToken()
        );

        $user = $accessToken->getUser();

        //$tokenManager = $this->get('fos_oauth_server.access_token_manager.default');
        //$tokenManager = $this->get('fos_oauth_server.refresh_token_manager.default');

        #Retorno
        return new Response($serializer->serialize($user, "json"));
    }
}