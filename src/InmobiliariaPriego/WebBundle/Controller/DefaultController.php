<?php

namespace InmobiliariaPriego\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InmobiliariaPriegoWebBundle:Default:index.html.twig', array('name' => $name));
    }
}
