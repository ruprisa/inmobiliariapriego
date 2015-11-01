<?php

namespace InmobiliariaPriego\InmueblesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InmuebleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add("ref", "integer", array('label' => 'Referencia'))
                ->add("tipo", "text")
                ->add("descripcion", "text",
                        array(
                            'label' => 'Descripción'
                        ))
                ->add("zona", "text", array('required' => false))
                ->add("planta", "text", array('required' => false))
                ->add("calle", "text")
                ->add("poblacion", "text",
                        array(
                            'label' => 'Población'
                        ))
                ->add("provincia", "text")
                ->add("pais", "text",
                        array(
                            'label' => 'País'
                        ))
                ->add("terraza", "checkbox", array('required' => false))
                ->add("metrosterraza", "number", 
                        array(
                            'required' => false,
                            'label' => 'Metros Terraza'
                            ))
                ->add("jardin", "checkbox", 
                        array(
                            'required' => false,
                            'label' => 'Jardín'
                            ))
                ->add("metrosjardin", "number", 
                        array(
                            'required' => false,
                            'label' => 'Metros Jardín'
                            ))
                ->add("habitacionesdobles", "integer", 
                        array(
                            'required' => false,
                            'label' => 'Habitaciones Dobles'
                            ))
                ->add("habitacionessimples", "integer", 
                        array(
                            'required' => false,
                            'label' => 'Habitaciones Simples'
                            ))
                ->add("banyos", "integer", 
                        array(
                            'required' => false,
                            'label' => 'Baños'
                            ))
                ->add("superficie", "number", array('required' => false))
                ->add("ascensor", "checkbox", array('required' => false))
                ->add("garaje", "checkbox", array('required' => false))
                ->add("trastero", "checkbox", array('required' => false))
                ->add("metrostrastero", "number", 
                        array(
                            'required' => false,
                            'label' => 'Metros Trastero'
                            ))
                ->add("obranueva", "checkbox", 
                        array(
                            'required' => false,
                            'label' => 'Obra Nueva'
                            ))
                ->add("operacion", "text", 
                        array(
                            'required' => false,
                            'label' => 'Operación'
                            ))
                ->add("precio", "number")
                ->add("img", "text", 
                        array(
                            'required' => false,
                            'label' => 'Imagen'
                            ))
                ->add("destacado", "checkbox", array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'InmobiliariaPriego\InmueblesBundle\Entity\Inmueble'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inmobiliariapriego_inmueblesbundle_inmueble';
    }
}
