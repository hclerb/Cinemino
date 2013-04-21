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
            ->add('titre', null, array( 'label' => 'Media', 'required' => true))
            ->add('url', 'file', array( 'label' => 'Media', 
            'data_class' => null,
            'required' => true))
            ->add('type', 'choice', array('label' => 'Type','required' => true,   
                'choices' => array(
                    'p' => 'photo',
                    'v' => 'Video'  
                )))
            //->add('idFilm', null, array( 'label' => 'Selectionnez les films que vous voulez lier au média :'))
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
