<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Form\CustomerType;
use App\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
// PAGE D'ACCUEIL DU SITE (avec affichage des clients)
    /**
     * @Route("/", name="home")
     */
    public function index(CustomerRepository $repo)
    {
        $customers = $repo->findAll();

        return $this->render('site/index.html.twig', [
            'customers' => $customers,
        ]);
    }

// FORMULAIRE DE CREATION OU MODIFICATION D'UN CLIENT
    /**
     * @Route("customer/create", name="create_customer")
     * @Route("customer/{id}/edit", name="edit_customer")
     */
    public function form(Customer $customer = null, Request $request, ObjectManager $manager) {
        if (!$customer) {
            $customer = new Customer();
        }

        $form = $this->createForm(CustomerType::class, $customer);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($customer);
            $manager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('site/create.html.twig', [
            'formCustomer' => $form->createView(),
            'editMode' => $customer->getId() !== null
        ]);
    }

// SUPPRESSION D'UN CLIENT
    /**
     * @Route("customer/{id}/delete", name="delete_customer")
     */
    public function delete(Customer $customer, ObjectManager $manager) {
        $manager->remove($customer);        
        $manager->flush();

        return $this->RedirectToRoute('home');
    }
}
