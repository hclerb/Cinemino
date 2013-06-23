<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProgrammeCourtsCreateType extends ProgrammeCourtsType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('affiche')
                ->remove('idMedias')
                ->add('idMedias', 'collection', array('type'   => new MediaFilmCreateType('MediaFilm','mediafilmssid'),
                                                 'label'    => ' ',               
						 'allow_add' => true,
						 'allow_delete' => true,
						 'by_reference' => false,));
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\ProgrammeCourts'
        ));
    }

    public function getName()
    {
        return 'cinemino_sitebundle_programmecourtscreatetype';
    }
}
