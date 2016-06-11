<?php

namespace UserBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\Utilisateur;
use UserBundle\Form\UtilisateurType;

/**
 * Utilisateur controller.
 *
 * @Route("/utilisateur")
 */
class UtilisateurController extends Controller {

    /**
     * Lists all Utilisateur entities.
     *
     * @Route("/", name="utilisateur_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        
        $utilisateurs = $em->getRepository('UserBundle:Utilisateur')->findAll();

        return $this->render('utilisateur/index.html.twig', array(
                    'utilisateurs' => $utilisateurs,
        ));
    }

    /**
     * @Route("/recherche")
     */
    public function rechercheAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $comp = $request->request->get('comp');
        $code = $request->request->get('code');
        if($comp!=null && $code!=null)
        {
            var_dump($code);
            var_dump($comp);exit();
        }

        $competences = $em->getRepository('UserBundle:Competence')->findAll();

        return $this->render('Utilisateur/recherche.html.twig', array(
            'competences' => $competences,
        ));
    }

    /**
     * Creates a new Utilisateur entity.
     *
     * @Route("/new", name="utilisateur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        $user = $request->request->get('utilisateur');
        $comp = $request->request->get('comp');
        if($user!=null)
        {
            var_dump($user);
            var_dump($comp);exit();
        }
        $competences = $em->getRepository('UserBundle:Competence')->findAll();
        return $this->render('utilisateur/new.html.twig', array(
            'competences' => $competences,
        ));
    }

    /**
     * Finds and displays a Utilisateur entity.
     *
     * @Route("/{id}", name="utilisateur_show")
     * @Method("GET")
     */
    public function showAction(Utilisateur $utilisateur) {
        $deleteForm = $this->createDeleteForm($utilisateur);

        return $this->render('utilisateur/show.html.twig', array(
                    'utilisateur' => $utilisateur,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Utilisateur entity.
     *
     * @Route("/{id}/edit", name="utilisateur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Utilisateur $utilisateur) {
        $deleteForm = $this->createDeleteForm($utilisateur);
        $editForm = $this->createForm('UserBundle\Form\UtilisateurType', $utilisateur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();

            return $this->redirectToRoute('utilisateur_edit', array('id' => $utilisateur->getId()));
        }

        return $this->render('utilisateur/edit.html.twig', array(
                    'utilisateur' => $utilisateur,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Utilisateur entity.
     *
     * @Route("/{id}", name="utilisateur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Utilisateur $utilisateur) {
        $form = $this->createDeleteForm($utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($utilisateur);
            $em->flush();
        }

        return $this->redirectToRoute('utilisateur_index');
    }

    /**
     * Creates a form to delete a Utilisateur entity.
     *
     * @param Utilisateur $utilisateur The Utilisateur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Utilisateur $utilisateur) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('utilisateur_delete', array('id' => $utilisateur->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
