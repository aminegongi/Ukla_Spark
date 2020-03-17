<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Ustensilles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ustensille controller.
 *
 */
class UstensillesController extends Controller
{
    /**
     * Lists all ustensille entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ustensilles = $em->getRepository('ProjectBundle:Ustensilles')->findAll();

        return $this->render('ustensilles/index.html.twig', array(
            'ustensilles' => $ustensilles,
        ));
    }

    /**
     * Creates a new ustensille entity.
     *
     */
    public function newAction(Request $request)
    {
        $ustensille = new Ustensilles();
        $form = $this->createForm('ProjectBundle\Form\UstensillesType', $ustensille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $icone=$request->get('icone');
            $ustensille->setIcone($icone);
            $em->persist($ustensille);
            $em->flush();

            return $this->redirectToRoute('ustensilles_show', array('idUst' => $ustensille->getIdust()));
        }

        return $this->render('ustensilles/new.html.twig', array(
            'ustensille' => $ustensille,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ustensille entity.
     *
     */
    public function showAction(Ustensilles $ustensille)
    {
        $deleteForm = $this->createDeleteForm($ustensille);

        return $this->render('ustensilles/show.html.twig', array(
            'ustensille' => $ustensille,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ustensille entity.
     *
     */
    public function editAction(Request $request, Ustensilles $ustensille)
    {
        $deleteForm = $this->createDeleteForm($ustensille);
        $editForm = $this->createForm('ProjectBundle\Form\UstensillesType', $ustensille);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ustensilles_edit', array('idUst' => $ustensille->getIdust()));
        }

        return $this->render('ustensilles/edit.html.twig', array(
            'ustensille' => $ustensille,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ustensille entity.
     *
     */
    public function deleteAction(Request $request, Ustensilles $ustensille)
    {
        $form = $this->createDeleteForm($ustensille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ustensille);
            $em->flush();
        }

        return $this->redirectToRoute('ustensilles_index');
    }

    /**
     * Creates a form to delete a ustensille entity.
     *
     * @param Ustensilles $ustensille The ustensille entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ustensilles $ustensille)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ustensilles_delete', array('idUst' => $ustensille->getIdust())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
