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
        /*
         * Mostrar inmuebles destacados al inicio sin utilizar servicios
         * 
        $repository = $this->getDoctrine()
                ->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble');
        $destacados = $repository->findByDestacado(true);
        
        return $this->render('InmobiliariaPriegoInmueblesBundle:Default:Destacados.html.twig', array(
            'destacados' => $destacados
        ));
         * 
         */
        
        /*
         * Mostrar inmuebles destacados utilizando un servicio
         */
        return $this->render('InmobiliariaPriegoInmueblesBundle:Default:Destacados.html.twig', $this->inmueblesDestacadosAction());
    }
    
    /*
     * Obtención de los inmuebles destacados a través de un servicio
     */
        public function inmueblesDestacadosAction()
        {
            return array('destacados' => $this->get('inmuebles.destacados')->findFromDestacado());
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
    
    public function createAction()
    {
        return $this->render('InmobiliariaPriegoInmueblesBundle:Inmueble:create.html.twig');
    }
    
    public function pruebaAction()
    {   
        $repository = $this->getDoctrine()
                ->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble');
        $destacados = $repository->findByDestacado(true);
        
        return $this->render('InmobiliariaPriegoInmueblesBundle:Default:Destacados.html.twig', array(
            'destacados' => $destacados
        ));
    }
    
}
