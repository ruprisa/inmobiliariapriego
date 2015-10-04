<?php

namespace InmobiliariaPriego\BuscadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InmobiliariaPriegoBuscadorBundle:Default:index.html.twig');
    }
}
