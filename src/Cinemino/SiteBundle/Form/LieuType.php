<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LieuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text',  array('label' => 'Nom du Lieu Associé', 'required' => true))
            ->add('photo', 'text', array('label' => 'Nom fichier photo','read_only' => true))
            ->add('filePhoto', 'file', array('label' => 'Fichier de la photo (format jpeg, Taille 2Mo Maxi)', 'required' => false))
            ->add('logo', 'text',  array('label' => 'Nom fichier logo','read_only' => true))
            ->add('fileLogo', 'file', array('label' => 'Fichier du logo (format jpeg, Taille 2Mo Maxi)', 'required' => false))
            ->add('adresse', 'text',  array('label' => 'Adresse'))
            ->add('adresseMail', 'text',  array('label' => 'Adresse mail'))
            ->add('coordonneesTel', 'text',  array('label' => 'Téléphone'))
            ->add('siteWeb', 'text',  array('label' => 'Site web'))
            ->add('latitude', 'text',  array('label' => 'Latitude', 'required' => false))
            ->add('longitude', 'text',  array('label' => 'Longitude', 'required' => false))
            ->add('description', 'textarea', array('label' => 'Description','attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'simple'), 
                'required' => false))                
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Lieu'
        ));
    }

    public function getName()
    {
        return 'cinemino_sitebundle_lieutype';
    }
}
