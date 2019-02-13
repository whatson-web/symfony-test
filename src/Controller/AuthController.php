<?php

namespace App\Controller;


use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use App\Form\RegistrationType;

class AuthController extends AbstractController
{
    /**
     * @Route("/",name="home")
     */
    public function indexAction(Request $request){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render("security/index.html.twig");
    }
    /**
     * @Route("/inscription",name="registration")
     */
    public function RegistrationAction(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {

        // or add an optional message - seen by developers
        //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');

        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sessionReg = $request->request->get('registration');
            $user->setRePassword("");
            //encode password
            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));
            $user->setRoles($sessionReg['roles']);
            //persister
            $manager->persist($user);
            $manager->flush();
            $request->request->set("id", $user->getId());
            $this->addFlash("notice_user", "Votre compte a été crée avec succes");
            return $this->redirectToRoute('registrationComplete', ['id' => $request->request->get('id')]);
        }
        return $this->render('security/Inscription.html.twig', ['formView' => $form->createView()]);
    }

    /**
     * @Route("/inscription/succes",name="registrationComplete",)
     *
     */
    public function registrationCompleteAction(Request $request, ObjectManager $manager)
    {

        if ($request->query->has("id")) {

            $user = $manager->find(User::class, $request->query->get('id'));
            return $this->render('security/inscTerminer.html.twig', ['user' => $user]);
        }

            return $this->redirectToRoute('home');



    }


    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils,Request $request): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
}
