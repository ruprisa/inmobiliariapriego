<?php
namespace InmobiliariaPriego\UsuariosBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;

class obtenerUsuario 
{
    private $repository;
    
    public function __construct(ObjectManager $om) {
        $this->repository = $om->getRepository('InmobiliariaPriegoUsuariosBundle:Usuario');
    }
    
    public function findByID($id)
    {
        return $this->repository->findByuserid($id);
    }
}
