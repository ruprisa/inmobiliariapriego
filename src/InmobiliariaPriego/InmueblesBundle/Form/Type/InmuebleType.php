<?php
namespace InmobiliariaPriego\InmueblesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class InmuebleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add("ref", "integer", array('label' => 'Referencia'))
                ->add("tipo", "text")
                ->add("descripcion", "text",
                        array(
                            'label' => 'Descripción',
                            'data' => 'algo'
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
                ->add("guardar", "submit");
    }
    
    public function getName() 
    {
        return 'inmueble';
    }
}
