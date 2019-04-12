<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\User;
use App\Entity\Customer;
use App\Entity\Place;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCustomer', EntityType::class, [
                'class' => Customer::class,
                'label' => false,
                'choice_label' => function ($label) {
                    return $label->getLastNameAndFirstName();
                },
                'choice_value' => 'id',
            ])
            ->add('idPlace', EntityType::class, [
                'class' => Place::class,
                'label' => false,
                'choice_label' => function ($label) {
                    return $label->getAddressAndCity();
                },
                'choice_value' => 'id',
            ])
            ->add('date', DateType::class, [
                'label' => 'Date du rendez-vous',
                'format' => 'dd-MM-yyyy',
                'widget' => 'choice',
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
