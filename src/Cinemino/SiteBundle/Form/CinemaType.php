<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CinemaType extends AbstractType
{

    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('nomCinema', 'text',  array('label' => 'Nom cinéma', 'required' => true))
            ->add('photo', 'text', array('label' => 'Nom fichier photo','read_only' => true))
            ->add('filePhoto', 'file', array('label' => 'Fichier de la photo', 'required' => false))
            ->add('logo', 'text',  array('label' => 'Nom fichier logo','read_only' => true))
            ->add('fileLogo', 'file', array('label' => 'Fichier du logo', 'required' => false))
            ->add('adresse', 'text',  array('label' => 'Adresse'))
            ->add('adresseMail', 'text',  array('label' => 'Adresse mail'))
            ->add('coordonneesTel', 'text',  array('label' => 'Téléphone'))
            ->add('siteWeb', 'text',  array('label' => 'Site web'))
            ->add('equipe', 'textarea', array('label' => 'Equipe','attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'simple'), 
                'required' => false)) 
            ->add('couleurFondCinema', 'text',  array('label' => 'Couleur de fond', 'attr' => array('class' => 'color')))
            ->add('latitude', 'text',  array('label' => 'Latitude', 'required' => false))
            ->add('longitude', 'text',  array('label' => 'Longitude', 'required' => false))
            ->add('zone', 'choice',  array('label' => 'Zone géographique',  'choices' => array(
                    '0' => 'Première page',
                    '1' => 'Haute - Savoie',
                    '2' => 'Savoie',
                    '3' => 'ain'
                    )))
            ->add('type', 'choice',  array('label' => 'Type de la salle',  'choices' => array(
                    '0' => 'Fixe',
                    '1' => 'Circuit Itinérant'
                    )))
            ->add('cdpc','checkbox',array('label' => 'Fait parti du CDPC','required' => false) ) 
            ->add('specificite', 'textarea', array('label' => 'Spécificités','attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'simple'), 
                'required' => false))   
            ->add('idCompte', null,  array('label' => 'Programmateur qui gère ce cinéma :'))
          
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Cinema'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_cinematype';
    }
}
