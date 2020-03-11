<?php

namespace App\Controller;

use DateTime;
use App\Entity\Appointment;
use App\Form\AppointmentType;
use Symfony\Component\Form\FormError;
use App\Repository\AppointmentRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AppointmentController extends AbstractController
{
    
    /**
     * @Route("/rendez-vous", name="appointments")
     */
    public function index(AppointmentRepository $repo, Request $request, ObjectManager $manager)
    {
        $user = $this->getUser();
        
        $appointment = new Appointment();
        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);
            
        if ($form->isSubmitted() && $form->isValid()) {
            
            $appointment->setUser($user);
            $manager->persist($appointment);
            $manager->flush();

            $this->addFlash(
                'success',
                "Le rendez-vous a bien été ajouté"
            );

            return $this->redirectToRoute('appointments');
            
        }
        
        
        $appointments = $repo->findBy(['user' => $user], ['id' => 'DESC']);
        return $this->render('appointment/index.html.twig', [
            'appointments' => $appointments,
            'form' => $form->createView(),
            'menu' => 'appointments'
        ]);
    }

    /**
     * @Route("/rendez-vous/{id}/modification", name="appointment_edit")
     */
    public function edit_appointment(Appointment $appointment, Request $request, ObjectManager $manager)
    {
        
        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);
            
        if ($form->isSubmitted() && $form->isValid()) {
            
            $manager->persist($appointment);
            $manager->flush();

            $this->addFlash(
                'success',
                "Le rendez-vous a bien été modifié"
            );

            return $this->redirectToRoute('appointments');
            
        }
        
        return $this->render('appointment/edit-appointment.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/rendez-vous/{id}/supression", name="appointment_delete")
     */
    public function appointment_delete(Appointment $appointment, ObjectManager $manager)
    {
        $manager->remove($appointment);
        $manager->flush();

        $this->addFlash(
            'success',
            "Le rendez-vous a bien été supprimé"
        );

        return $this->redirectToRoute('appointments');
    }
}
