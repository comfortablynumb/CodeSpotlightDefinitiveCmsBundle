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
        header('Content-Type: application/json');

        die(json_encode(array(
            'success'       => false,
            'error'         => 'Usuario o Contraseña inválidos.'
        )));
    }
}
