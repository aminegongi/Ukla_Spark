<?php

namespace PlatBundle\Controller;

use PlatBundle\Entity\Ustensiles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ustensile controller.
 *
 */
class UstensilesController extends Controller
{
    /**
     * Lists all ustensile entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ustensiles = $em->getRepository('PlatBundle:Ustensiles')->findAll();

        return $this->render('ustensiles/index.html.twig', array(
            'ustensiles' => $ustensiles,
        ));
    }

    /**
     * Creates a new ustensile entity.
     *
     */
    public function newAction(Request $request)
    {
        $ustensile = new Ustensiles();
        $form = $this->createForm('PlatBundle\Form\UstensilesType', $ustensile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $icone=$request->get('icone');
            $ustensile->setIcone($icone);
            $em->persist($ustensile);
            $em->flush();

            return $this->redirectToRoute('ustensiles_show', array('id' => $ustensile->getId()));
        }

        return $this->render('ustensiles/new.html.twig', array(
            'ustensile' => $ustensile,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ustensile entity.
     *
     */
    public function showAction(Ustensiles $ustensile)
    {
        $deleteForm = $this->createDeleteForm($ustensile);

        return $this->render('ustensiles/show.html.twig', array(
            'ustensile' => $ustensile,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ustensile entity.
     *
     */
    public function editAction(Request $request, Ustensiles $ustensile)
    {
        $deleteForm = $this->createDeleteForm($ustensile);
        $editForm = $this->createForm('PlatBundle\Form\UstensilesType', $ustensile);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ustensiles_edit', array('id' => $ustensile->getId()));
        }

        return $this->render('ustensiles/edit.html.twig', array(
            'ustensile' => $ustensile,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ustensile entity.
     *
     */
    public function deleteAction(Request $request, Ustensiles $ustensile)
    {
        $form = $this->createDeleteForm($ustensile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ustensile);
            $em->flush();
        }

        return $this->redirectToRoute('ustensiles_index');
    }

    /**
     * Creates a form to delete a ustensile entity.
     *
     * @param Ustensiles $ustensile The ustensile entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ustensiles $ustensile)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ustensiles_delete', array('id' => $ustensile->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
