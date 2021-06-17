<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CoursesForm extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name' , null , array ('help' => 'Cours starts with a capital letter' , 'attr' =>array('placeholder' => 'Type here...'))    ) ;
        
    }

}

?>