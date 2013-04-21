<?php

namespace Cinemino\SiteBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FilmRechercheForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder->add('motcle', 'text', array('label' => 'Saisissez Mot-clé ( exemple : Harry Potter )'));
    }
    
    public function getName()
    {        
        return 'filmrecherche';
    }
}


?>