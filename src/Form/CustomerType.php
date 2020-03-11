<?php

namespace App\Form;

use App\Entity\Customer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CustomerType extends AbstractType
{
    private function conf($label, $placeholder, $class, $options = [])
    {
        return array_merge([
            'label' => $label,
            'attr'  => [
                'placeholder' => $placeholder,
                'class' => $class

            ]
        ], $options);
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, $this->conf("Prénom *", "Prénom du client", ""))
            ->add('lastName', TextType::class, $this->conf("Nom *", "Nom du client", ""))
            ->add('birthDate', DateType::class, [
                'label' => 'Date de naissance',
                'years' => range(1920,2020),
                'format' => 'dd/MM/yyy',
                'placeholder' => [
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Customer::class,
        ]);
    }
}
