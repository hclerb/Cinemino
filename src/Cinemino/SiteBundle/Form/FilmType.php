<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreFilm', null, array('label' => 'Titre du film', 'required' => true))
            ->add('realisateur', null, array('label' => 'Realisateur', 'required' => true))
            ->add('duree', 'text', array('label' => 'Durée (Heure : minutes) ', 'required' => true))
            ->add('anneeProd', null, array('label' => 'Année de production', 'required' => true))
            ->add('classementArtEssai', 'choice', array('label' => 'Classement Art et Essai','choices' => array(
                    'Pas de classement' => 'Pas de classement',
                    'Classé Art et Essai' => 'Classé Art et Essai',
                    'Classé avec le label Jeune public' => 'Classé avec le label Jeune public',
                    'Classé avec le label Patrimoine et répertoire' => 'Classé avec le label Patrimoine et répertoire',
                    'Classé avec le label Recherche et Découverte' => 'Classé avec le label Recherche et Découverte'),
                    'required' => true))

            ->add('provenance', null, array('label' => 'Provenance', 'required' => true))
            ->add('interdiction', null, array('label' => 'Interdiction'))
            ->add('ageConseille', null, array('label' => 'Age conseillé', 'required' => true))
            ->add('acteurs', null, array('label' => 'Acteurs', 'required' => true))
            ->add('synopsys', 'textarea', array('label' => 'Synopsis','attr' => array(
            'class' => 'tinymce',
            'data-theme' => 'advanced', 
            'required' => true))) 
            ->add('critique', null, array('label' => 'Critique'))
            ->add('affiche', 'text', array('label' => 'Url de l\'affiche :', 'required' => true))
            ->add('couleurTexte', null, array('label' => 'Couleur du texte'))
            ->add('couleurFondFilm', null, array('label' => 'Couleur de fond'))
            ->add('type', 'choice', array('label' => 'Type',   
                'choices' => array(
                    'n' => 'Normal',
                    'c' => 'Court-Métrage'
                )))
           // ->add('idMedia', null, array('label' => 'Attacher un média', 'required' => false))
            //->add('idFilm', null, array('label' => ''))

            ->add('idMedia', 'collection', array('type'   => new MediaType(),
                                              'prototype' => true,
                                              'allow_add' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Film'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_filmtype';
    }
}
