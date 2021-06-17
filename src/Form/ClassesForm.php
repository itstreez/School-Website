<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ClassesForm extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('section' , null , array ('help' => 'Eg: Section Z' , 'attr' =>array('placeholder' => 'Type here...'))    ) ;
        
    }

}

?>