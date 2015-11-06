<?php
namespace InmobiliariaPriego\InmueblesBundle\Event;

use InmobiliariaPriego\InmueblesBundle\Entity\Inmueble;
use Symfony\Component\EventDispatcher\Event;

class InmuebleEvent {
    private $inmueble;
    
    public function __construct(InmuebleEvent $inmueble) {
        $this->inmueble = $inmueble;
    }
    
}
