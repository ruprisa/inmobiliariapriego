<?php
namespace InmobiliariaPriego\InmueblesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use InmobiliariaPriego\InmueblesBundle\Entity\Inmueble;
use InmobiliariaPriego\InmueblesBundle\Form\Type\InmuebleType;

class InmuebleController extends Controller
{
    /*
     * @Template()
     */
    public function createAction(Request $request)
    {
        $inmueble = new Inmueble;
        
        $form = $this->createForm(new InmuebleType(), $inmueble);
        $form->handleRequest($request);
        
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inmueble);
            $em->flush();
            
            return $this->redirect($this->generateUrl('inmobiliaria_priego_inmuebles_sheet', array('ref' => $inmueble->getRef())));
        }
    
        return $this->render('InmobiliariaPriegoInmueblesBundle:Inmueble:createInmueble.html.twig', array('form' => $form->createView()));
    }
}
