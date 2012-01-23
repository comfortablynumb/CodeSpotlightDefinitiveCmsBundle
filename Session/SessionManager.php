<?php

/**
 * Creado por Gustavo Falco <comfortablynumb84@gmail.com>
 */

namespace CodeSpotlight\Bundle\DefinitiveCmsBundle\Session;

use Symfony\Component\HttpFoundation\Session;

class SessionManager 
{
    const PREFIX                = 'DEFINITIVE_CMS';
    const SEPARATOR             = '.';
    const IS_AUTHENTICATED_KEY  = 'IS_AUTHENTICATED';

    protected $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function authenticate()
    {
        $this->set(self::IS_AUTHENTICATED_KEY, true);
    }

    public function isAuthenticated()
    {
        return $this->get(self::IS_AUTHENTICATED_KEY) === true;
    }

    public function set($key, $value)
    {
        $this->session->set(self::PREFIX.self::SEPARATOR.$key, $value);
    }

    public function get($key)
    {
        return $this->session->get(self::PREFIX.self::SEPARATOR.$key);
    }
}
