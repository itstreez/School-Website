<?php
namespace App\Form;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class StudentsForm extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Name' ,null , array ('help' => 'Name starts with a capital letter' , 'attr' =>array('placeholder' => 'Type here...'))    ) 
        ->add('Age' , null , array ('help' => 'Integer values only' , 'attr' =>array('placeholder' => 'Type here...'))    ) ;
    }
}
