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
            ->add('duree','time',
                    array('widget' => 'choice',
                          'label' => 'Durée du film')) 
            ->add('anneeProd', null, array('label' => 'Année de production', 'required' => true))
            ->add('classementArtEssai', 'choice', array('label' => 'Classement Art et Essai','choices' => array(
                    0 => 'Pas de classement',
                    1 => 'Classé Art et Essai',
                    2 => 'Classé avec le label Jeune public',
                    3 => 'Classé avec le label Patrimoine et répertoire',
                    4 => 'Classé avec le label Recherche et Découverte')))
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
                    '10'=> '10',
                    '11'=> '>10'),
                    'required' => true))
            ->add('acteurs', null, array('label' => 'Acteurs', 'required' => false))
            ->add('synopsys', 'textarea', array('label' => 'Synopsis','attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'simple', 
                'required' => true))) 
            ->add('critique','textarea', array('label' => 'Critique','attr' => array(
                    'class' => 'tinymce',
                    'data-theme' => 'simple', 
                    'required' => true)))
            ->add('animation','checkbox',array('label' => 'Animation ?','required' => false) )
            ->add('typeAnimation', 'choice', array('label' => 'Type de l\'animation','choices' => array(
                    0 => 'dessin sur papier',
                    1 => 'animation d\'objets',
                    2 => 'ordinateur 2D',
                    3 => 'ordinateur 3D',
                    4 => 'éléments découpés',
                    5 => 'peinture sur verre',
                    6 => 'dessin sur cellulos',
                    7 => 'marionnettes',
                    8 => 'techniques diverses',
                    9 => 'pâte à modeler',
                    10 => 'rotoscopie'),'required' => false) )
            ->add('affiche','text', array('label' => '','read_only' => true))
            ->add('file', 'file', array('label' => 'Fichier de l\'affiche :', 'required' => false))
            ->add('couleurTexte', null, array('label' => 'Couleur du texte'))
            ->add('couleurFondFilm', null, array('label' => 'Couleur de fond'))
            ->add('type', 'choice', array('label' => 'Type',   
                'choices' => array(
                    'n' => 'Long Métrage',
                    'c' => 'Court-Métrage'
                )))
            ->add('stocke','checkbox',array('label' => 'Rangé en base','required' => false) )
            ->add('idMedias', 'collection', array('type'   => new MediaType('MediaFilm','mediafilmssid'),
                                                 'label'    => ' ',
						 'allow_add' => true,
						 'allow_delete' => true,
						 'by_reference' => false,))
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
