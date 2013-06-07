<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementAssocieType extends EvenementType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('dateEvenement', 'date',
                    array('widget' => 'single_text',                     
                          'label' => 'Date de début',
                          'format' => 'dd/MM/yyyy'))
            ->add('dateFin', 'date',
                    array('widget' => 'single_text',                     
                          'label' => 'Date de fin',
                          'format' => 'dd/MM/yyyy'))
            ->add('idLieu', null, array('label' => 'Lieu', 'required' => true))
            ->add('priorite', null, array('label' => 'Priorité', 'required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\EvenementAssocie'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_evenementassocietype';
    }
}
