<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IntervenantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomIntervenant', null, array('label' => 'Nom de l\'intervenant', 'required' => true))
            ->add('descriptionIntervenant', 'textarea', array('label' => 'Description intervenant','required' => true,'attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'simple')))
            ->add('urlPhotoIntervenant', null, array('label' => 'Photo','read_only' => true))
            ->add('filephoto', 'file', array('label' => 'Fichier de la photo (format jpeg, Taille 2Mo Maxi)', 'required' => false))
            ->add('urlLogo', null, array('label' => 'Logo','read_only' => true))
            ->add('filelogo', 'file', array('label' => 'Fichier de son logo (format jpeg, Taille 2Mo Maxi)', 'required' => false))
            ->add('idEvenements', null, array('label' => 'Evènement(s) rataché(s)', 'required' => false))
            ->add('idMedias', 'collection', array('type'   => new MediaType('MediaIntervenant','mediaintervenantssid'),
                                                 'label'    => ' ',
						 'allow_add' => true,
						 'allow_delete' => true,
						 'by_reference' => false,))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Intervenant'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_intervenanttype';
    }
}
