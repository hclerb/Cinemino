<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SponsorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomSponsor', null, array('label' => 'Nom du sponsor', 'required' => true))
            ->add('logo', null, array('label' => 'Url logo', 'required' => true))
            ->add('adresse', null, array('label' => 'adresse', 'required' => true))
            ->add('siteWeb', null, array('label' => 'Site Web'))
            ->add('actif', 'choice', array('label' => 'Actif', 'required' => true, 
                'choices' => array(
                    'o' => 'Oui',
                    'n' => 'Non'
                    ))
                  )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Sponsor'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_sponsortype';
    }
}
