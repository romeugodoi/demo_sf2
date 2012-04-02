<?php

namespace Sicoob\SiccadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sicoob\SiccadBundle\Entity\Pessoa;
use Sicoob\SiccadBundle\Form\PessoaType;

/**
 * Pessoa controller.
 *
 * @Route("/pessoa")
 */
class PessoaController extends Controller
{
    /**
     * Lists all Pessoa entities.
     *
     * @Route("/", name="pessoa")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('SicoobSiccadBundle:Pessoa')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Pessoa entity.
     *
     * @Route("/{id}/show", name="pessoa_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('SicoobSiccadBundle:Pessoa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pessoa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Pessoa entity.
     *
     * @Route("/new", name="pessoa_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Pessoa();
        $form   = $this->createForm(new PessoaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Pessoa entity.
     *
     * @Route("/create", name="pessoa_create")
     * @Method("post")
     * @Template("SicoobSiccadBundle:Pessoa:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Pessoa();
        $request = $this->getRequest();
        $form    = $this->createForm(new PessoaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pessoa_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Pessoa entity.
     *
     * @Route("/{id}/edit", name="pessoa_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('SicoobSiccadBundle:Pessoa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pessoa entity.');
        }

        $editForm = $this->createForm(new PessoaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Pessoa entity.
     *
     * @Route("/{id}/update", name="pessoa_update")
     * @Method("post")
     * @Template("SicoobSiccadBundle:Pessoa:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('SicoobSiccadBundle:Pessoa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pessoa entity.');
        }

        $editForm   = $this->createForm(new PessoaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pessoa_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Pessoa entity.
     *
     * @Route("/{id}/delete", name="pessoa_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('SicoobSiccadBundle:Pessoa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pessoa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pessoa'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
