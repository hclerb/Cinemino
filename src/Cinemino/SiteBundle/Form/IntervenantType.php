<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IntervenantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomIntervenant', null, array('label' => 'Nom de l\'intervenant'))
            ->add('descriptionIntervenant', 'textarea', array('label' => 'Description intervenant','attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'simple', 
                'required' => true)))
            ->add('urlPhotoIntervenant', null, array('label' => 'Photo'))
            ->add('filephoto', 'file', array('label' => 'Fichier de la photo :', 'required' => false))
            ->add('urlLogo', null, array('label' => 'Logo'))
            ->add('filelogo', 'file', array('label' => 'Fichier de la photo :', 'required' => false))
            ->add('idEvenements', null, array('label' => 'Evènement(s) rataché(s)', 'required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Intervenant'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_intervenanttype';
    }
}
