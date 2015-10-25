<?php
namespace InmobiliariaPriego\UsuariosBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add("userid", "text", 
                        array(
                            'label' => 'Id Usuario'
                        ))
                ->add("password", "password",
                        array(
                            'label' => 'Contraseña'
                        ))
                ->add("username", "text",
                        array(
                            'label' => 'Nombre'
                        ))
                ->add("guardar", "submit");
    }
    
    public function getName() 
    {
        return 'usuario';
    }
}
