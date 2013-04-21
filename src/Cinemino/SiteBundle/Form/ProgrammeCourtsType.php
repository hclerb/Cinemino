<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProgrammeCourtsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreFilm')
            ->add('realisateur')
            ->add('duree')
            ->add('anneeProd')
            ->add('classementArtEssai')
            ->add('provenance')
            ->add('interdiction')
            ->add('ageConseille')
            ->add('acteurs')
            ->add('synopsys')
            ->add('critique')
            ->add('affiche')
            ->add('couleurTexte')
            ->add('couleurFondFilm')
            ->add('type')
            ->add('progCourts')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\ProgrammeCourts'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_programmecourtstype';
    }
}
