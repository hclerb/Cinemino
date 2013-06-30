<?php

namespace Cinemino\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use \Cinemino\SiteBundle\Entity\CineminoUser;

class SeanceType extends AbstractType
{
    protected $iduser;
    
    public function __construct($iduser) {
        $this->iduser = $iduser;;
    }
    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateSeance', 'datetime',
                    array('widget' => 'single_text',                     
                          'label' => 'Jour et Heure de la séance',
                          'format' => 'dd/MM/yyyy HH:mm'))
            ->add('version',  'choice', array('label' => 'Version (VO, VOSTFR etc..)','choices' => array(
                    'VF' => 'VF',
                    'VOST' => 'VOST',
                    'VOSTM' => 'VOST pour Malentendants',
                   )))
            ->add('type', 'choice', array('label' => 'Type (2D, 3D)','choices' => array(
                    '2D' => '2D',
                    '3D' => '3D',
                    ),
                    'required' => true))
            ->add('avantPremiere', 'choice', array('label' => 'Avant première','choices' => array(
                    'n' => 'Non',
                    'o' => 'Oui',
                    )))
            ->add('sortieNationale', 'choice', array('label' => 'Sortie Nationale','choices' => array(
                    'n' => 'Non',
                    'o' => 'Oui',
                    )))
            ->add('idEvenements', null, array('label' => 'Attacher un ou plusieurs évènements', 'required' => false))
            ->add('idEvenementAssocies', null, array('label' => 'Attacher un ou plusieurs évènements associés', 'required' => false))                
            ->add('idCinema', 'entity', array(
                'label' => 'Cinéma',
                'class' => 'CineminoSiteBundle:Cinema',
                'property' => 'nomCinema',
                'query_builder' => function (\Cinemino\SiteBundle\Entity\CinemaRepository $r){
                                    return $r->getCineAutorise($this->iduser);
                                  }  
                ))
            ->add('idFilm', null, array('label' => 'Choisir le film pour cette séance', 'required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinemino\SiteBundle\Entity\Seance'
        ));
    }

    public function getName()
    {
        return 'cinemino_Sitebundle_seancetype';
    }
}
