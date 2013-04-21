<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CineminoUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array('label' => 'Nom d\'utilisateur'))
            ->add('email', null, array('label' => 'Email'))
            ->add('roles', 'choice', array(
                'label' => 'Roles',
                'choices' => array(
                    'ROLE_SUPER_ADMIN' => 'Super Admin',
                    'PROGRAMMATEUR' => 'Programmateur'
                )))
            ->add('locked', 'choice', array(
                'label' => 'Compte',
                'choices' => array(
                    0 => 'Actif',
                    1 => 'Désactivé'
                )))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\CineminoUser'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_cineminousertype';
    }
}
