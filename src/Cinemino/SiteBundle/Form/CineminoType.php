<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CineminoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDebut', 'date',
                    array('widget' => 'single_text',                     
                          'label' => 'Date de début',
                          'format' => 'dd/MM/yyyy'))
            ->add('dateFin', 'date',
                    array('widget' => 'single_text',                     
                          'label' => 'Date de fin',
                          'format' => 'dd/MM/yyyy'))
            ->add('affiche','text', array('label' => '','read_only' => true))
            ->add('fileAffiche', 'file', array('label' => 'Fichier de l\'affiche :', 'required' => false))
            ->add('logo','text', array('label' => '','read_only' => true))
            ->add('fileLogo', 'file', array('label' => 'Fichier du logo :', 'required' => false))
            ->add('couleurFond', 'text',  array('label' => 'Couleur de fond', 'attr' => array('class' => 'color')))
            ->add('couleurTypo', 'text',  array('label' => 'Couleur de la typo', 'attr' => array('class' => 'color')))
            ->add('tarifPlein', 'text',  array('label' => 'Tarif Plein'))
            ->add('tarifAbo', 'text',  array('label' => 'Tarif Abonnement'))
            ->add('surcout3D', 'text',  array('label' => 'Surcoût 3D'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Cinemino'
        ));
    }

    public function getName()
    {
        return 'cinemino_sitebundle_cineminotype';
    }
}
