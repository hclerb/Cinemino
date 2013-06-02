<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', null, array( 'label' => 'Légende', 'required' => true))
            ->add('url', 'text', array('label' => 'Nom du fichier','read_only' => true))
            ->add('file', 'file', array('label' => 'Fichier associé', 'required' => false))
            ->add('type', 'choice', array('label' => 'Type','required' => true,   
                'choices' => array(
                    'p' => 'photo',
                    'v' => 'Video',
                    's' => 'Bande son'
                )))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Media'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_mediatype';
    }
}
            