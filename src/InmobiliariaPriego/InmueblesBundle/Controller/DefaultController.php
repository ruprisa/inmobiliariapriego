<?php

namespace InmobiliariaPriego\InmueblesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InmobiliariaPriegoInmueblesBundle:Default:index.html.twig', array('name' => $name));
    }
}
