<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    
    /**
     * @Route("/connexion", name="user_login")
     */
    public function login(AuthenticationUtils $utils)
    {
        $user = $this->getUser();

        if ($user != null) {
            return $this->redirectToRoute("homepage");
        }
        else {
            $error = $utils->getLastAuthenticationError();
            $username = $utils->getLastUsername();
            return $this->render('user/login.html.twig',[
                'hasError' => $error !== null,
                'username' => $username
            ]);
        }
    }

    /**
     * @Route("/deconnexion", name="user_logout")
     */
    public function logout() {}
    
    /**
     * @Route("/inscription", name="registration")
     */
    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
            
        if ($form->isSubmitted() && $form->isValid()) {
            
            $hash = $encoder->encodePassword($user, $user->getPass());
            $user->setPass($hash);

            $manager->persist($user);
            $manager->flush();

            $this->addFlash(
                'success',
                "Votre compte a bien été créé"
            );

            return $this->redirectToRoute('registration');
        }

        return $this->render('user/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
