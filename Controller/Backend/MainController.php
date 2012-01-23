<?php

namespace CodeSpotlight\Bundle\DefinitiveCmsBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainController extends \CodeSpotlight\Bundle\DefinitiveCmsBundle\Controller\BaseController
{
    public function mainAction()
    {
        return $this->render('CodeSpotlightDefinitiveCmsBundle:Backend:index.html.twig');
    }

    public function loginAction()
    {
        if ($this->isAuthenticated()) {
            return $this->redirect($this->generateUrl('CodeSpotlightDefinitiveCmsBundle_dashboard'));
        }

        return $this->render('CodeSpotlightDefinitiveCmsBundle:Backend:login.html.twig');
    }
}
