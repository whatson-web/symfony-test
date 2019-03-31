<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('email')
            ->add('username')
            ->add('password')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){
            $password = $encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($password);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
        }

        $user->setRoles(['ROLE_USER']);
        return $this->render('security/register.html.twig', [
            'reg_form' => $form->createView()
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('security/login.html.twig', [
        ]);
    }

    /**
     * @Route("/logout",name="logout")
     */
    public function logout()
    {

    }
}
