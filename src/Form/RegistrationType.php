<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
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
            ->add('firstName', TextType::class, $this->conf("Prénom *", "Votre prénom", ""))
            ->add('lastName', TextType::class, $this->conf("Nom *", "votre nom", ""))
            ->add('username', TextType::class, $this->conf("Nom d'utilisateur *", "Votre nom d'utilisateur", ""))
            ->add('pass', PasswordType::class, $this->conf("Mot de passe *", "Votre mot de passe", ""))
            ->add('passConfirm', PasswordType::class, $this->conf("Confirmation mot de passe *", "Retaper votre mot de passe", ""))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
