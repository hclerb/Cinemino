<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MediaInType extends MediaType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('dateDebut', 'date',
                    array('widget' => 'single_text',                     
                          'label' => 'Date de début d\'affichage',
                          'format' => 'dd/MM/yyyy'))
                ->add('dateFin', 'date',
                    array('widget' => 'single_text',                     
                          'label' => 'Date de fin d\'affichage',
                          'format' => 'dd/MM/yyyy'))
        ;
    }
}
