<?php

namespace Teller\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TellerAccountBundle:Default:index.html.twig');
    }

    public function reportAction(){
        return $this->render('TellerAccountBundle:Default:report.html.twig');
    }
}
