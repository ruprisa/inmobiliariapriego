<?php

namespace InmobiliariaPriego\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\BrowserKit\Response;

use InmobiliariaPriego\UsuariosBundle\Entity\Usuario;
use InmobiliariaPriego\UsuariosBundle\Form\Type\UsuarioType;

//No sé si hay que utilizar:
//use Symfony\Component\Validator\Validator;

class UsuarioController extends Controller
{   
    public function createAction(Request $request)
    {
        $usuario = new Usuario;
        
        $form = $this->createForm(new UsuarioType(), $usuario);
        $form->handleRequest($request);
        
        /*
         * Intento de utilizar los constraints
         */
        /*$validator = $this->get('validator');
        $errors = $validator->validate($usuario);
        
        if(count($errors) > 0)
        {
            return new Response(print_r($errors, true));
        } else {
            return new Response('El usuario es valido');
        }*/
        
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            
            return $this->redirect($this->generateUrl('inmobiliaria_priego_inmuebles_homepage'));
        }
    
        return $this->render('InmobiliariaPriegoUsuariosBundle:Usuario:createUser.html.twig', array('form' => $form->createView()));
    }
}
