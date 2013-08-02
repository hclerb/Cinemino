<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProgrammeCourtsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreFilm', null, array('label' => 'Titre du Programme', 'required' => true))
            ->add('realisateur', null, array('label' => 'Realisateur', 'required' => true))
            ->add('duree','time',
                    array('widget' => 'choice',
                          'label' => 'Durée du film'))
            ->add('anneeProd', null, array('label' => 'Année de production', 'required' => true))
            ->add('classementArtEssai', 'choice', array('label' => 'Classement Art et Essai','choices' => array(
                    'Pas de classement' => 'Pas de classement',
                    'Classé Art et Essai' => 'Classé Art et Essai',
                    'Classé avec le label Jeune public' => 'Classé avec le label Jeune public',
                    'Classé avec le label Patrimoine et répertoire' => 'Classé avec le label Patrimoine et répertoire',
                    'Classé avec le label Recherche et Découverte' => 'Classé avec le label Recherche et Découverte'),
                    'required' => true))

            ->add('provenance','choice', array('label' => 'Provenance','choices'=> array(0=>'France', 1=>'USA',2=>'Europe',3=>'Reste du monde'))) 
            ->add('interdiction','choice', array('choices'=> array(0=>'Pas d\'interdiction', 1=>'-12 ans',2=>'-16 ans',3=>'-18 ans')))
            ->add('ageConseille', 'choice', array('label' => 'Age conseillé', 'required' => true,'choices' => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10'),
                    'required' => true))

            ->add('synopsys', 'textarea', array('label' => 'Synopsis','attr' => array(
                    'class' => 'tinymce',
                    'data-theme' => 'simple', 
                    'required' => true))) 
            ->add('critique','textarea', array('label' => 'Critique','attr' => array(
                    'class' => 'tinymce',
                    'data-theme' => 'simple', 
                    'required' => true)))
            ->add('affiche','text', array('label' => '','read_only' => true))
            ->add('file', 'file', array('label' => 'Affiche (format jpeg, Taille 2Mo Maxi)', 'required' => false))
            ->add('couleurTexte', null, array('label' => 'Couleur du texte'))
            ->add('couleurFondFilm', null, array('label' => 'Couleur de fond'))
            ->add('stocke','checkbox',array('label' => 'Rangé en base','required' => false) )
            ->add('lescourts','entity', array(
                'label' =>  'Les courts du programme',
                'class' => 'Cinemino\SiteBundle\Entity\Film',
                'property'  =>  'TitreFilm',
                'query_builder'  =>  function(\Cinemino\SiteBundle\Entity\FilmRepository $r){
                                        return $r->getCourts();
                },
                'multiple'  => true,
                'required'  =>  false)
            )
           ->add('idMedias', 'collection', array('type'   => new MediaFilmType('MediaFilm','mediafilmssid'),
                                                 'label'    => ' ',               
						 'allow_add' => true,
						 'allow_delete' => true,
						 'by_reference' => false,))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\ProgrammeCourts'
        ));
    }

    public function getName()
    {
        return 'cinemino_sitebundle_programmecourtstype';
    }
}
