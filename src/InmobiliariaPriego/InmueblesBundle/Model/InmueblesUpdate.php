<?php

namespace InmobiliariaPriego\InmueblesBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;
use InmobiliariaPriego\InmueblesBundle\Entity\Inmueble;
use InmobiliariaPriego\InmueblesBundle\Event\InmueblesListener;
use Symfony\Component\EventDispatcher\EventDispatcher;

class InmueblesUpdate {
    private $om;
    
    public function __construct(ObjectManager $om) 
    {
        $this->om = $om;
    }
    
    public function InmuebleUpdate(Inmueble $inmueble)
    {
        $this->om->persist($inmueble);
        $this->om->flush();
        
        /*
         * Adición del eventDispatcher
         */
        $dispatcher = new EventDispatcher();
        $listener = new InmueblesListener();
        
        $dispatcher->addListener('inmueble.update', array($listener,'onInmuebleUpdate'));
        
        //$filename = '/app/logs/prueba.log';
        //file_put_contents($filename, "Esto es una prueba", FILE_APPEND);
    }
}
