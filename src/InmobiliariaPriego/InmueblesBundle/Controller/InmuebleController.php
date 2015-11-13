<?php

namespace InmobiliariaPriego\InmueblesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use InmobiliariaPriego\InmueblesBundle\Entity\Inmueble;
use InmobiliariaPriego\InmueblesBundle\Form\InmuebleType;
use InmobiliariaPriego\InmueblesBundle\Event\InmuebleEvent;
use Symfony\Component\EventDispatcher\Event;

/**
 * Inmueble controller.
 *
 */
class InmuebleController extends Controller
{

    /**
     * Lists all Inmueble entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble')->findAll();

        return $this->render('InmobiliariaPriegoInmueblesBundle:Inmueble:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Inmueble entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Inmueble();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('inmueble_show', array('id' => $entity->getRef())));
        }

        return $this->render('InmobiliariaPriegoInmueblesBundle:Inmueble:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Inmueble entity.
     *
     * @param Inmueble $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Inmueble $entity)
    {
        $form = $this->createForm(new InmuebleType(), $entity, array(
            'action' => $this->generateUrl('inmueble_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'crear',
            'attr' => array('class' => 'btn btn-info btn-small')
            ));

        return $form;
    }

    /**
     * Displays a form to create a new Inmueble entity.
     *
     */
    public function newAction()
    {
        $entity = new Inmueble();
        $form   = $this->createCreateForm($entity);

        return $this->render('InmobiliariaPriegoInmueblesBundle:Inmueble:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Inmueble entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inmueble entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InmobiliariaPriegoInmueblesBundle:Inmueble:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Inmueble entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inmueble entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InmobiliariaPriegoInmueblesBundle:Inmueble:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Inmueble entity.
    *
    * @param Inmueble $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Inmueble $entity)
    {
        $form = $this->createForm(new InmuebleType(), $entity, array(
            'action' => $this->generateUrl('inmueble_update', array('id' => $entity->getRef())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'guardar',
            'attr' => array('class' => 'btn btn-info btn-small')
            ));

        return $form;
    }
    /**
     * Edits an existing Inmueble entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inmueble entity.');
        }

        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            /*
             * El flush se ha cambiado por una llamada al servicio inmuebles.update
             * donde se va a realizar ahora la acción de actualización de la entidad inmueble
             */
            //$em->flush();
            
            $this->get('inmuebles.update')->InmuebleUpdate($entity);
            
            /*
             * Disparar el evento
             */
            //$this->get('event_dispatcher')->dispatch('inmueble_create', new InmuebleEvent($entity));

            return $this->redirect($this->generateUrl('inmueble_edit', array('id' => $id)));
        }

        return $this->render('InmobiliariaPriegoInmueblesBundle:Inmueble:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Inmueble entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InmobiliariaPriegoInmueblesBundle:Inmueble')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Inmueble entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('inmueble'));
    }

    /**
     * Creates a form to delete a Inmueble entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inmueble_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'eliminar',
                'attr' => array('class' => 'btn btn-info btn-small')
                ))
            ->getForm()
        ;
    }
}
