<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CinemaType extends AbstractType
{

    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('nomCinema', 'text',  array('label' => 'Nom cinéma'))
            ->add('photo', 'text', array('label' => 'Url photo'))
            ->add('logo', 'text',  array('label' => 'Url logo'))
            ->add('adresse', 'text',  array('label' => 'Adresse'))
            ->add('adresseMail', 'text',  array('label' => 'Adresse mail'))
            ->add('coordonneesTel', 'text',  array('label' => 'Numéro téléphone'))
            ->add('siteWeb', 'text',  array('label' => 'Site web'))
            ->add('couleurFondCinema', 'text',  array('label' => 'Couleur de fond', 'attr' => array('class' => 'color')))
            ->add('type', 'choice',  array('label' => 'Type',  'choices' => array(
                    'n' => 'Normal',
                    'i' => 'Itinérant'
                    )))
            ->add('idCompte', null,  array('label' => 'Utilisateur qui gère ce cinéma :'))
          
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Cinema'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_cinematype';
    }
}
