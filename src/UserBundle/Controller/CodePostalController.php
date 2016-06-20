<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\CodePostal;
use UserBundle\Form\CodePostalType;

/**
 * CodePostal controller.
 *
 * @Route("/codepostal")
 */
class CodePostalController extends Controller
{
    /**
     * Lists all CodePostal entities.
     *
     * @Route("/", name="codepostal_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $codePostals = $em->getRepository('UserBundle:CodePostal')->findAll();

        return $this->render('codepostal/index.html.twig', array(
            'codePostals' => $codePostals,
        ));
    }

    /**
     * Creates a new CodePostal entity.
     *
     * @Route("/new", name="codepostal_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $codePostal = new CodePostal();
        $form = $this->createForm('UserBundle\Form\CodePostalType', $codePostal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($codePostal);
            $em->flush();

            return $this->redirectToRoute('codepostal_show', array('id' => $codePostal->getId()));
        }

        return $this->render('codepostal/new.html.twig', array(
            'codePostal' => $codePostal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CodePostal entity.
     *
     * @Route("/{id}", name="codepostal_show")
     * @Method("GET")
     */
    public function showAction(CodePostal $codePostal)
    {
        $deleteForm = $this->createDeleteForm($codePostal);

        return $this->render('codepostal/show.html.twig', array(
            'codePostal' => $codePostal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CodePostal entity.
     *
     * @Route("/{id}/edit", name="codepostal_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CodePostal $codePostal)
    {
        $deleteForm = $this->createDeleteForm($codePostal);
        $editForm = $this->createForm('UserBundle\Form\CodePostalType', $codePostal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($codePostal);
            $em->flush();

            return $this->redirectToRoute('codepostal_edit', array('id' => $codePostal->getId()));
        }

        return $this->render('codepostal/edit.html.twig', array(
            'codePostal' => $codePostal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CodePostal entity.
     *
     * @Route("/{id}", name="codepostal_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CodePostal $codePostal)
    {
        $form = $this->createDeleteForm($codePostal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($codePostal);
            $em->flush();
        }

        return $this->redirectToRoute('codepostal_index');
    }

    /**
     * Creates a form to delete a CodePostal entity.
     *
     * @param CodePostal $codePostal The CodePostal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CodePostal $codePostal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('codepostal_delete', array('id' => $codePostal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
