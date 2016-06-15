<?php

namespace PlanningBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PlanningBundle\Entity\Tache;
use PlanningBundle\Form\TacheType;

/**
 * Tache controller.
 *
 * @Route("/tache")
 */
class TacheController extends Controller {

    /**
     * Lists all Tache entities.
     *
     * @Route("/", name="tache_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $taches = $em->getRepository('PlanningBundle:Tache')->findAll();

        return $this->render('tache/index.html.twig', array(
                    'taches' => $taches,
        ));
    }

    /**
     * Creates a new Tache entity.
     *
     * @Route("/new", name="tache_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $ta = $request->request->get('tache');

        if ($ta != null) {
            $tache = new tache();
            $tache->setTitre($ta['titre']);
            $tache->setDescription($ta['description']);
            $tache->setDebut(date_create($ta['debut']));
            $tache->setFin(date_create($ta['fin']));


            $t = $em->getRepository('PlanningBundle:Chantier')->findOneBy(array('id' => $ta['idChantier']));
            $tache->setIdChantier($t);
            $taches = $em->getRepository('PlanningBundle:tache')->findBy(array('idChantier' => $ta['idChantier']));
            $em->persist($tache);
            $em->flush();

            return $this->render('chantier/show.html.twig', array(
                        'chantier' => $t, 'taches' => $taches
            ));
        }
        return $this->render('tache/new.html.twig');
    }

    /**
     * Finds and displays a Tache entity.
     *
     * @Route("/{id}", name="tache_show")
     * @Method("GET")
     */
    public function showAction(Tache $tache) {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $deleteForm = $this->createDeleteForm($tache);
        $em = $this->getDoctrine()->getManager();
        $idouvriers = $em->getRepository('PlanningBundle:Affectation')->findBy(array('idTache' => $tache->getId()));
        $ouvriers = array();

        for ($i = 0; $i < sizeof($idouvriers); $i++) {
            $ouvriers[$i] = $em->getRepository('PlanningBundle:Ouvrier')->findOneBy(array('id' => $idouvriers[$i]->getIdOuvrier()));
        }
        return $this->render('tache/show.html.twig', array(
                    'tache' => $tache, 'user' => $user,
                    'delete_form' => $deleteForm->createView(), 'ouvriers' => $ouvriers
        ));
    }

    /**
     * Displays a form to edit an existing Tache entity.
     *
     * @Route("/{id}/edit", name="tache_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tache $tache) {
        $deleteForm = $this->createDeleteForm($tache);
        $editForm = $this->createForm('PlanningBundle\Form\TacheType', $tache);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tache);
            $em->flush();

            return $this->redirectToRoute('tache_edit', array('id' => $tache->getId()));
        }

        return $this->render('tache/edit.html.twig', array(
                    'tache' => $tache,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tache entity.
     *
     * @Route("/{id}", name="tache_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tache $tache) {
        $form = $this->createDeleteForm($tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tache);
            $em->flush();
        }

        return $this->redirectToRoute('tache_index');
    }

    /**
     * Creates a form to delete a Tache entity.
     *
     * @param Tache $tache The Tache entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tache $tache) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('tache_delete', array('id' => $tache->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
