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
class ChantierController extends Controller {

    /**
     * Lists all Chantier entities.
     *
     * @Route("/", name="chantier_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $chantiers = $em->getRepository('PlanningBundle:Chantier')->findAll();

        return $this->render('chantier/index.html.twig', array(
                    'chantiers' => $chantiers,
        ));
    }

    /**
     * Lists my Chantier entities.
     *
     * @Route("/maliste", name="chantier_maliste")
     * @Method("GET")
     */
    public function mineAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user->getRole() == "ROLE_ARTISAN") {
            $chantiers = $em->getRepository('PlanningBundle:Chantier')->findBy(array('idArtisan' => $user->getId()));
        } else {
            $chantiers = $em->getRepository('PlanningBundle:Chantier')->findBy(array('idParticulier' => $user->getId()));
        }
        return $this->render('chantier/maliste.html.twig', array(
                    'chantiers' => $chantiers,
        ));
    }

    /**
     * Creates a new Chantier entity.
     *
     * @Route("/new", name="chantier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $chan = $request->request->get('chantier');
        if ($chan != null) {
            $chantier = new chantier();
            $chantier->setTitre($chan['titre']);
            $chantier->setDescription($chan['description']);
            $chantier->setAdresse($chan['adresse']);
            $chantier->setDebut(date_create($chan['debut']));
            $chantier->setFin(date_create($chan['fin']));
            $chantier->setIdArtisan($user);

            $par = $em->getRepository('UserBundle:Utilisateur')->findOneBy(array('mail' => $chan['idParticulier']));
            $chantier->setIdParticulier($par);
            $em->persist($chantier);
            $em->flush();
        }

        return $this->render('chantier/new.html.twig');
    }

    /**
     * Finds and displays a Chantier entity.
     *
     * @Route("/{id}", name="chantier_show")
     * @Method("GET")
     */
    public function showAction(Chantier $chantier) {
        $deleteForm = $this->createDeleteForm($chantier);

        $em = $this->getDoctrine()->getManager();
        $taches = $em->getRepository('PlanningBundle:Tache')->findBy(array('idChantier' => $chantier->getId()), array('debut' => 'desc'));
        return $this->render('chantier/show.html.twig', array(
                    'chantier' => $chantier,
                    'delete_form' => $deleteForm->createView(), 'taches' => $taches
        ));
    }

    /**
     * Displays a form to edit an existing Chantier entity.
     *
     * @Route("/{id}/edit", name="chantier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Chantier $chantier) {
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
    public function deleteAction(Request $request, Chantier $chantier) {
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
    private function createDeleteForm(Chantier $chantier) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('chantier_delete', array('id' => $chantier->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
