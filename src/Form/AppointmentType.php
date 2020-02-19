<?php

namespace App\Form;

use App\Entity\Appointment;
use Symfony\Component\Form\AbstractType;
use App\Entity\User;
use App\Entity\Customer;
use App\Entity\Place;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
                'choice_label' => 'username',
                'label' => 'Utilisateur: '
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            
            ->add('idCustomer', EntityType::class, [
                'class' => Customer::class,
                'choice_label' => 'getText',
                'label' => 'Personne: '
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            
            ->add('idPlace', EntityType::class, [
                'class' => Place::class,
                'choice_label' => 'getText',
                'label' => 'Place: '
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
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
