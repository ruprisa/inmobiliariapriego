<?php
namespace InmobiliariaPriego\WebBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    /**
     * @Template()
     */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();
        
        /*
         * Capturar el error de login si existe alguno
         */
        if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR))
        {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        else
        {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return array(
            /*
             * Último usuario introducido por el usuario
             */
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error' => $error,
        );
    }
    
}
