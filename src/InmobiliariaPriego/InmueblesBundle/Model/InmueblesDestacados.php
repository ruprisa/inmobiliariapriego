<?php
namespace InmobiliariaPriego\InmueblesBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;

class InmueblesDestacados 
{
    private $repository;
    
    public function __construct(ObjectManager $om) {
        $this->repository = $om->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble');
    }
    
    public function findFromDestacado()
    {
        return $this->repository->findByDestacado(true);
    }
}
