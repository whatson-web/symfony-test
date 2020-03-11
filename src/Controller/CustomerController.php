<?php

namespace App\Controller;

use DateTime;
use App\Entity\Customer;
use App\Form\CustomerType;
use Symfony\Component\Form\FormError;
use App\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CustomerController extends AbstractController
{
    
    /**
     * @Route("/clients", name="customers")
     */
    public function index(CustomerRepository $repo, Request $request, ObjectManager $manager)
    {
        $customer = new Customer();
        $form = $this->createForm(CustomerType::class, $customer);
        $form->handleRequest($request);
            
        if ($form->isSubmitted() && $form->isValid()) {
            
            $manager->persist($customer);
            $manager->flush();

            $this->addFlash(
                'success',
                "Le client a bien été ajouté"
            );

            return $this->redirectToRoute('customers');
            
        }
        
        
        $customers = $repo->findAll();
        return $this->render('customer/index.html.twig', [
            'customers' => $customers,
            'form' => $form->createView(),
            'menu' => 'customers'
        ]);
    }

    /**
     * @Route("/clients/{id}/modification", name="customer_edit")
     */
    public function edit_customer(Customer $customer, Request $request, ObjectManager $manager)
    {
        
        $form = $this->createForm(CustomerType::class, $customer);
        $form->handleRequest($request);
            
        if ($form->isSubmitted() && $form->isValid()) {
            
            $manager->persist($customer);
            $manager->flush();

            $this->addFlash(
                'success',
                "Le client a bien été modifié"
            );

            return $this->redirectToRoute('customers');
            
        }
        
        return $this->render('customer/edit-customer.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/clients/{id}/supression", name="customer_delete")
     */
    public function customer_delete(Customer $customer, ObjectManager $manager)
    {
        $manager->remove($customer);
        $manager->flush();

        $this->addFlash(
            'success',
            "Le client a bien été supprimé"
        );

        return $this->redirectToRoute('customers');
    }
}
