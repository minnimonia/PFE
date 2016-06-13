<?php

namespace PlanningBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PlanningBundle\Entity\Chantier;
use PlanningBundle\Form\ChantierType;
use UserBundle\Entity\Utilisateur;

/**
 * Chantier controller.
 *
 * @Route("/chantier")
 */
class ChantierController extends Controller
{
    /**
     * Lists all Chantier entities.
     *
     * @Route("/", name="chantier_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chantiers = $em->getRepository('PlanningBundle:Chantier')->findAll();

        return $this->render('chantier/index.html.twig', array(
            'chantiers' => $chantiers,
        ));
    }

    /**
     * Creates a new Chantier entity.
     *
     * @Route("/new", name="chantier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $chantier = new Chantier();
        $form = $this->createForm('PlanningBundle\Form\ChantierType', $chantier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chantier);
            $em->flush();

            return $this->redirectToRoute('chantier_show', array('id' => $chantier->getId()));
        }

        return $this->render('chantier/new.html.twig', array(
            'chantier' => $chantier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Chantier entity.
     *
     * @Route("/{id}", name="chantier_show")
     * @Method("GET")
     */
    public function showAction(Chantier $chantier)
    {
        $deleteForm = $this->createDeleteForm($chantier);

        return $this->render('chantier/show.html.twig', array(
            'chantier' => $chantier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Chantier entity.
     *
     * @Route("/{id}/edit", name="chantier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Chantier $chantier)
    {
        $deleteForm = $this->createDeleteForm($chantier);
        $editForm = $this->createForm('PlanningBundle\Form\ChantierType', $chantier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chantier);
            $em->flush();

            return $this->redirectToRoute('chantier_edit', array('id' => $chantier->getId()));
        }

        return $this->render('chantier/edit.html.twig', array(
            'chantier' => $chantier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Chantier entity.
     *
     * @Route("/{id}", name="chantier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Chantier $chantier)
    {
        $form = $this->createDeleteForm($chantier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chantier);
            $em->flush();
        }

        return $this->redirectToRoute('chantier_index');
    }

    /**
     * Creates a form to delete a Chantier entity.
     *
     * @param Chantier $chantier The Chantier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chantier $chantier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chantier_delete', array('id' => $chantier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
