<?php

namespace InmobiliariaPriego\InmueblesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\Response;

class InmuebleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add("ref", "integer", array('label' => 'inmu.ref','translation_domain' => 'inmuebles'))
                ->add("tipo", "text", array('label' => 'inmu.tipo','translation_domain' => 'inmuebles'))
                ->add("descripcion", "text",array('label' => 'desc'))
                ->add("zona", "text", array('required' => false,'label' => 'inmu.zona','translation_domain' => 'inmuebles'))
                ->add("planta", "text", array('required' => false, 'label' => 'inmu.planta','translation_domain' => 'inmuebles'))
                ->add("calle", "text", array('label' => 'inmu.calle','translation_domain' => 'inmuebles'))
                ->add("poblacion", "text", array('label' => 'inmu.poblacion','translation_domain' => 'inmuebles'))
                ->add("provincia", "text", array('label' => 'inmu.provincia','translation_domain' => 'inmuebles'))
                ->add("pais", "text", array('label' => 'inmu.pais','translation_domain' => 'inmuebles'))
                ->add("terraza", "checkbox", array('required' => false, 'label' => 'inmu.teraza', 'translation_domain' => 'inmuebles'))
                ->add("metrosterraza", "number", array('required' => false, 'label' => 'inmu.metrosterraza', 'translation_domain' => 'inmuebles'))
                ->add("jardin", "checkbox", array('required' => false, 'label' => 'inmu.jardin', 'translation_domain' => 'inmuebles'))
                ->add("metrosjardin", "number", array('required' => false, 'label' => 'inmu.metrosjardin', 'translation_domain' => 'inmuebles'))
                ->add("habitacionesdobles", "integer", array('required' => false, 'label' => 'inmu.habdoble', 'translation_domain' => 'inmuebles'))
                ->add("habitacionessimples", "integer", array('required' => false, 'label' => 'inmu.habsimple', 'translation_domain' => 'inmuebles'))
                ->add("banyos", "integer", array('required' => false, 'label' => 'inmu.banyos', 'translation_domain' => 'inmuebles'))
                ->add("superficie", "number", array('required' => false, 'label' => 'inmu.superficie', 'translation_domain' => 'inmuebles'))
                ->add("ascensor", "checkbox", array('required' => false, 'label' => 'inmu.ascensor', 'translation_domain' => 'inmuebles'))
                ->add("garaje", "checkbox", array('required' => false, 'label' => 'inmu.parcking', 'translation_domain' => 'inmuebles'))
                ->add("trastero", "checkbox", array('required' => false, 'label' => 'inmu.trastero', 'translation_domain' => 'inmuebles'))
                ->add("metrostrastero", "number", array('required' => false, 'label' => 'inmu.mtrastero', 'translation_domain' => 'inmuebles'))
                ->add("obranueva", "checkbox", array('required' => false, 'label' => 'inmu.obranueva', 'translation_domain' => 'inmuebles'))
                ->add("operacion", "text", array('required' => false, 'label' => 'inmu.operacion', 'translation_domain' => 'inmuebles'))
                ->add("precio", "number", array('label' => 'inmu.precio', 'translation_domain' => 'inmuebles'))
                ->add("img", "text", array('required' => false,'label' => 'IMGS'))
                ->add("destacado", "checkbox", array('required' => false, 'label' => 'inmu.dest.simple', 'translation_domain' => 'inmuebles'))
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
