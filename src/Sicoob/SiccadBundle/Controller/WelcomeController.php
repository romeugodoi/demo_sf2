<?php

namespace Sicoob\SiccadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('SicoobSiccadBundle:Welcome:index.html.twig');
    }
}
