<?php

namespace InmobiliariaPriego\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userid','text',array('label' => 'userid', 'translation_domain' => 'usuarios'))
            ->add('password','text',array('label' => 'password', 'translation_domain' => 'usuarios'))
            ->add('username','text',array('label' => 'username', 'translation_domain' => 'usuarios'))
            ->add('active', 'checkbox', array('label' => 'activo', 'translation_domain' => 'usuarios', 'data' => true, 'required' => false))
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'InmobiliariaPriego\UsuariosBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inmobiliariapriego_usuariosbundle_usuario';
    }
}
