<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FilmCreateType extends FilmType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('affiche')
                ->remove('idMedias')
                ->add('idMedias', 'collection', array('type'   => new MediaCreateType(),
                                                 'label'    => ' ',
						 'allow_add' => true,
						 'allow_delete' => true,
						 'by_reference' => false,));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Film'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_filmcreatetype';
    }
}
