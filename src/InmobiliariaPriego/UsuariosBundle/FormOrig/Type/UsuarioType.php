<?php
namespace InmobiliariaPriego\UsuariosBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UsuarioType extends AbstractType
{
    /*
    private $userData;
    
    public function __construct($data) {
        $this->userData = $data;
    }
*/
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*if(is_array($this->userData))
        {
            $userid = 'es un array';
            echo "<PRE>";
            echo $this->userData;
            echo "</PRE>";
        }
        else
        {
            $userid = 'no es un array else';
        }*/
        
        $builder
                ->add("userid", "entity", 
                        array(
                            'class' => 'InmobiliariaPriegoUsuariosBundle:Usuario',
                            'property' => 'userid',
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
