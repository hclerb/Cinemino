<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeEvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label',null, array('label' => 'Titre du Type d\'évènement', 'required' => true))
            ->add('picto','text', array('label' => 'Pictogramme','read_only' => true))
            ->add('file', 'file', array('label' => 'Fichier du Pictogramme :', 'required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\TypeEvenement'
        ));
    }

    public function getName()
    {
        return 'cinemino_sitebundle_typeevenementtype';
    }
}
