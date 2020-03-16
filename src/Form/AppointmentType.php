<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\Customer;
use App\Entity\Place;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('idUser', EntityType::class, [
                'class' => User::class,
                'multiple' => true,
                'label' => 'User'
            ])
            ->add('idCustomer', EntityType::class, [
                'class' => Customer::class,
                'multiple' => true,
                'label' => 'Customer',
                'required' => true
            ])
            ->add('idPlace', EntityType::class, [
                'class' => Place::class,
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
