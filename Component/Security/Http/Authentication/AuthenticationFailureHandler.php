<?php

/**
 * Creado por Gustavo Falco <comfortablynumb84@gmail.com>
 */

namespace CodeSpotlight\Bundle\DefinitiveCmsBundle\Component\Security\Http\Authentication;

use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;

class AuthenticationFailureHandler implements AuthenticationFailureHandlerInterface
{
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $response = new Response(json_encode(array(
            'success'       => false,
            'msg'           => 'Usuario o Contraseña inválidos.'
        )));

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
