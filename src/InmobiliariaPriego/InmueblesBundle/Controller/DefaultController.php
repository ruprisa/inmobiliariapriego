<?php

namespace InmobiliariaPriego\InmueblesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /*
     * Obtención de los artículos relacionados
     */
    public function indexAction()
    {   
        $repository = $this->getDoctrine()
                ->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble');
        $destacados = $repository->findByDestacado(true);
        
        return $this->render('InmobiliariaPriegoInmueblesBundle:Default:Destacados.html.twig', array(
            'destacados' => $destacados
        ));
    }
    
    /*
     * Obtención del inmueble solicitado
     */
    public function sheetAction($ref)
    {
        $repository = $this->getDoctrine()
                ->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble');
        $inmuebles = $repository->findByRef($ref);
        
        return $this->render('InmobiliariaPriegoInmueblesBundle:Default:FichaInmueble.html.twig', array(
            'inmuebles' => $inmuebles
        ));
    }
    
}
