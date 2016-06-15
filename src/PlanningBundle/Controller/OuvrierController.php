<?php

namespace PlanningBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PlanningBundle\Entity\Ouvrier;
use PlanningBundle\Entity\Tache;
use PlanningBundle\Entity\Affectation;
use PlanningBundle\Form\OuvrierType;

/**
 * Ouvrier controller.
 *
 * @Route("/ouvrier")
 */
class OuvrierController extends Controller {

    /**
     * Lists all Ouvrier entities.
     *
     * @Route("/", name="ouvrier_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $ouvriers = $em->getRepository('PlanningBundle:Ouvrier')->findAll();

        return $this->render('ouvrier/index.html.twig', array(
                    'ouvriers' => $ouvriers,
        ));
    }

    /**
     * Creates a new Ouvrier entity.
     *
     * @Route("/new/{id}", name="ouvrier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $ta = $request->request->get('ouvrier');
        //$id = $request->request->get('id');

        if ($ta != null) {
            $ouvrier = new ouvrier();
            $ouvrier->setNom($ta['nom']);
            $ouvrier->setPrenom($ta['prenom']);
            $ouvrier->setMail($ta['mail']);
            $ouvrier->setTel($ta['tel']);

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $ouvrier->setIdArtisan($user);
            $em->persist($ouvrier);
            $em->flush();

            $idTache = $em->getRepository('PlanningBundle:Tache')->findOneBy(array('id' => $id));
            $affectation = new affectation();
            $affectation->setIdTache($idTache);
            $affectation->setIdOuvrier($ouvrier);
            $em->persist($affectation);
            $em->flush();
            $deleteForm = $this->createDeleteForm($ouvrier);
            return $this->render('ouvrier/show.html.twig', array(
                        'ouvrier' => $ouvrier, 'delete_form' => $deleteForm->createView()));
        }
        return $this->render('ouvrier/new.html.twig');
    }

    /**
     * Searchs a Ouvrier entity.
     *
     * @Route("/recherche/{id}", name="ouvrier_recherche")
     * @Method({"GET", "POST"})
     */
    public function rechercheAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $ta = $request->request->get('ouvrier');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $idTache = $em->getRepository('PlanningBundle:Tache')->findOneBy(array('id' => $id));
        $ouvriers = $em->getRepository('PlanningBundle:Ouvrier')->findBy(array('idArtisan' => $user->getId()));
        if ($ta != null) {

            $affectation = new affectation();
            for ($i = 1; $i < sizeof($ta); $i++) {
                $affectation->setIdTache($idTache);

                $affectation->setIdOuvrier($em->getRepository('PlanningBundle:Ouvrier')->findOneBy(array('id' => $ta[$i])));
                $em->persist($affectation);
                $em->flush();
            }
            $response = $this->forward('PlanningBundle:Tache:show', array('tache' => $idTache));
            return $response;
        }
        return $this->render('ouvrier/recherche.html.twig', array('ouvriers' => $ouvriers));
    }

    /**
     * Finds and displays a Ouvrier entity.
     *
     * @Route("/{id}", name="ouvrier_show")
     * @Method("GET")
     */
    public function showAction(Ouvrier $ouvrier) {
        $deleteForm = $this->createDeleteForm($ouvrier);

        return $this->render('ouvrier/show.html.twig', array(
                    'ouvrier' => $ouvrier,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ouvrier entity.
     *
     * @Route("/{id}/edit", name="ouvrier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ouvrier $ouvrier) {
        $deleteForm = $this->createDeleteForm($ouvrier);
        $editForm = $this->createForm('PlanningBundle\Form\OuvrierType', $ouvrier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ouvrier);
            $em->flush();

            return $this->redirectToRoute('ouvrier_edit', array('id' => $ouvrier->getId()));
        }

        return $this->render('ouvrier/edit.html.twig', array(
                    'ouvrier' => $ouvrier,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ouvrier entity.
     *
     * @Route("/{id}", name="ouvrier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ouvrier $ouvrier) {
        $form = $this->createDeleteForm($ouvrier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ouvrier);
            $em->flush();
        }

        return $this->redirectToRoute('ouvrier_index');
    }

    /**
     * Creates a form to delete a Ouvrier entity.
     *
     * @param Ouvrier $ouvrier The Ouvrier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ouvrier $ouvrier) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('ouvrier_delete', array('id' => $ouvrier->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
