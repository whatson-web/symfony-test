<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use App\Repository\AppointmentRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AppointmentController extends AbstractController
{
// PAGE D'AFFICHAGE DES CLIENTS
    /**
     * @Route("/appointments", name="appointments_list")
     */
    public function appointments(AppointmentRepository $repo)
    {
        $appointments = $repo->findAll();

        return $this->render('appointment/appointments_list.html.twig', [
            'appointments' => $appointments,
        ]);
    }

// FORMULAIRE DE CREATION OU MODIFICATION D'UN RDV
    /**
     * @Route("appointment/create", name="create_appointment")
     * @Route("appointment/{id}/edit", name="edit_appointment")
     */
    public function form(Appointment $appointment = null, Request $request, ObjectManager $manager) {
        if (!$appointment) {
            $appointment = new Appointment();
        }

        $form = $this->createForm(AppointmentType::class, $appointment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($appointment);
            $manager->flush();

            return $this->redirectToRoute('appointments_list');
        }

        return $this->render('appointment/create.html.twig', [
            'formAppointment' => $form->createView(),
            'editMode' => $appointment->getId() !== null
        ]);
    }

// SUPPRESSION D'UN RDV
    /**
     * @Route("appointment/{id}/delete", name="delete_appointment")
     */
    public function delete(Appointment $appointment, ObjectManager $manager) {
        $manager->remove($appointment);        
        $manager->flush();

        return $this->RedirectToRoute('appointments_list');
    }
}
