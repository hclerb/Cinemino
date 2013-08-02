<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomDocument','text',array('label' => 'Nom document','required' => true))
            ->add('descriptifDocument', 'textarea', array('label' => 'Description du document','attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'simple'), 
                'required' => true))
            ->add('debutaffichage', 'date',
                    array('widget' => 'single_text',                     
                          'label' => 'Début affichage',
                          'format' => 'dd/MM/yyyy'))
            ->add('finaffichage', 'date',
                    array('widget' => 'single_text',                     
                          'label' => 'Date de fin d\'affichage',
                          'format' => 'dd/MM/yyyy'))
            ->add('urlFichier', null, array('label' => 'Fichier Document','read_only' => true))
            ->add('filefichier', 'file', array('label' => 'Fichier du document (Taille 4Mo Maxi)', 'required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Document'
        ));
    }

    public function getName()
    {
        return 'cinemino_sitebundle_documenttype';
    }
}
