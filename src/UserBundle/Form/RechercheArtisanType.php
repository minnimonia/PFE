<?php

namespace HurricaneScript\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Range;

class AnnonceSearchType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $em = $this->getDoctrine()->getManager();
        $competences = $em->getRepository('UserBundle:Competence')->findAll();
        $builder
                ->add('Compétence', 'choice', array('choices' => array('competences' => $competences)))
                ->add('CodePostal', 'number');
    }

   
}
