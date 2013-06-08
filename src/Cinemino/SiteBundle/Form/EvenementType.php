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
            ->add('titreEvenement', null, array('label' => 'Nom de l\'évènement', 'required' => true))
            ->add('descriptionEvenement','textarea', array('label' => 'Description de l\'évènement','attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'simple', 
                'required' => true)))
            ->add('idType', null, array('label' => 'Type d\'évènement', 'required' => true))
            ->add('idIntervenants', null, array('label' => 'Associé un ou des intervenants', 'required' => false))
            ->add('idMedias', 'collection', array('type'   => new MediaType('MediaEvt','mediaevtssid'),
                                                 'label'    => ' ',
						 'allow_add' => true,
						 'allow_delete' => true,
						 'by_reference' => false,))
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
