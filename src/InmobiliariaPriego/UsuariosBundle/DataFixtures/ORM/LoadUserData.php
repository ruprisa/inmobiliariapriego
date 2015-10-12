<?php
namespace InmobiliariaPriego\UsuariosBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use InmobiliariaPriego\UsuariosBundle\Entity\Usuario;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) 
    {
        $userAdmin = new Usuario();
        $userAdmin->setUserid("admin");
        $userAdmin->setPassword("SuperAdmin");
        $userAdmin->setUsername("Administrador");
        
        $manager->persist($userAdmin);
        $manager->flush();
    }
}