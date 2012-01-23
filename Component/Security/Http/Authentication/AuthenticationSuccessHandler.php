<?php

/**
 * Creado por Gustavo Falco <comfortablynumb84@gmail.com>
 */

namespace CodeSpotlight\Bundle\DefinitiveCmsBundle\Component\Security\Http\Authentication;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use CodeSpotlight\Bundle\DefinitiveCmsBundle\Session\SessionManager;

class AuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    protected $sessionManager;

    public function __construct(SessionManager $sessionManager)
    {
        $this->sessionManager = $sessionManager;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        $this->sessionManager->authenticate($token);

        $response = new Response(json_encode(array(
            'success'       => true,
            'msg'           => 'Bienvenido al Definitive CMS!'
        )));

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
