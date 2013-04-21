<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreEvenement', null, array('label' => 'Titre de l\'évènement', 'required' => true))
            ->add('descriptionEvenement', null, array('label' => 'Description de l\'évènement', 'required' => true))
            ->add('dateEvenement', 'date', array('label' => 'Date de début', 'required' => true))
            ->add('dateFin', 'date', array('label' => 'Date de fin', 'required' => true))
            ->add('priorite', null, array('label' => 'Priorité', 'required' => true))
            ->add('idType', null, array('label' => 'Type d\'évènement', 'required' => true))
            ->add('idLieu', null, array('label' => 'Lieu', 'required' => true))
            ->add('idIntervenant', null, array('label' => 'Associé un ou des intervenants', 'required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Evenement'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_evenementtype';
    }
}
