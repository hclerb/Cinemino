<?php

namespace Cinemino\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserTypeNew extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
      {
        $builder
            ->add('username', null, array('label' => 'Nom d\'utilisateur'))
            ->add('email', null, array('label' => 'Email'))

            ->add('locked', 'choice', array(
                'label' => 'Compte',
                'choices' => array(
                    0 => 'Actif',
                    1 => 'Désactivé'
                )))
            ->add('roles', 'choice', array(
                'label' => 'Role',
                'choices' => array(
                    'ROLE_SUPER_ADMIN' => 'ADMINISTRATEUR',
                    'ROLE_PROGRAMMATEUR' => 'PROGRAMMATEUR'
                ),
                'required'  => true,
                'multiple' => true,
                
                ))
                            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Confirmation mot de passe'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
                
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\UserBundle\Entity\User',
            'intention'  => 'registration',
        ));
    }

    public function getName()
    {
        return 'fos_user_registration';
    }
}
