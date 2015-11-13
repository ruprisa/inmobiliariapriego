<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));*/
        
        /*
         * Definir locale en la sesión
         */
        $this->get('session')->set('_locale', 'en_US');
        
        return $this->redirect($this->generateUrl('inmobiliaria_priego_inmuebles_homepage', 
                array('_locale' => $request->getLocale()))
        , 301);
    }
}
