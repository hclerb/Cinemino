<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArchiveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('annee', null, array('label' => 'L\'année en question', 'required' => true))
            ->add('rapport', 'textarea', array('label' => 'Commentaire sur cette année là','required' => true,'attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'simple')))
            ->add('affiche', null, array('label' => 'L\'affiche','read_only' => true))
            ->add('fileaffiche', 'file', array('label' => 'Fichier de l\'affiche :', 'required' => false))
            ->add('programme', null, array('label' => 'Le programme en PDF','read_only' => true))
            ->add('fileprogramme', 'file', array('label' => 'Fichier du programme :', 'required' => false))                
            ->add('idMedias', 'collection', array('type'   => new MediaType('MediaArchive','mediaarchivessid'),
                                                 'label'    => ' ',
						 'allow_add' => true,
						 'allow_delete' => true,
						 'by_reference' => false,))                
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Archive'
        ));
    }

    public function getName()
    {
        return 'cinemino_sitebundle_archivetype';
    }
}
