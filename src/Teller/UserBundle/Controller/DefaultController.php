<?php

namespace Teller\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TellerUserBundle:Default:index.html.twig');
    }
}
