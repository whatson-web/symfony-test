<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\Customer;
use App\Entity\Place;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',DateType::class)
            ->add('idCustomer',EntityType::class,["class"=>Customer::class,"choice_label"=>"firstName","required"=>true])
            ->add('idPlace',EntityType::class,["class"=>Place::class,"choice_label"=>"name","required"=>true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
