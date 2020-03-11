<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Place;
use App\Entity\Customer;
use App\Entity\Appointment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AppointmentType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, [
                'label' => 'Date de naissance',
                'years' => range(2020, 2025),
                'format' => 'dd/MM/yyy',
                'placeholder' => [
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
                ]
            ])
            ->add('customer', EntityType::class, [
                'class'         => Customer::class, 
                'choice_label'  => 'firstName', 
                'label' => 'Client *',
                'placeholder'   => 'Selectionner le client'])
            ->add('place', EntityType::class, [
                'class'         => Place::class, 
                'choice_label'  => 'name', 
                'label' => 'Lieux *',
                'placeholder'   => 'Selectionner le lieu'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
