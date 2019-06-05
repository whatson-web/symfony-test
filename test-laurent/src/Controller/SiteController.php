<?php

namespace App\Controller;

use App\Entity\Place;
use App\Entity\Customer;
use App\Form\CustomerType;
use App\Repository\PlaceRepository;
use App\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
// PAGE D'ACCUEIL DU SITE (avec affichage des clients)
    /**
     * @Route("/", name="home")
     */
    public function index(CustomerRepository $repo)
    {
        return $this->render('site/index.html.twig');
    }

// PAGE D'AFFICHAGE DES CLIENTS
    /**
     * @Route("/customers", name="customers_list")
     */
    public function customers(CustomerRepository $repo)
    {
        $customers = $repo->findAll();

        return $this->render('site/customers_list.html.twig', [
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

            return $this->redirectToRoute('customers_list');
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

        return $this->RedirectToRoute('customers_list');
    }

// AFFICHAGE DES PLACES
    /**
     * @Route("places", name="places_list")
     */
    public function places(PlaceRepository $repo) {
        $places = $repo->findAll();

        return $this->render('site/places_list.html.twig', [
            'places' => $places,
        ]);
    }

// UPLOAD DES PLACES PAR FICHIER CSV
    /**
     * @Route("places/csv", name="places_csv")
     */
    public function upload(Request $request, ObjectManager $manager) {
        $file = null;

        $form = $this->createFormBuilder($file)
                     ->add('file', FileType::class)
                     ->add('btn', SubmitType::class)
                     ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form['file']->getData();
            $row = 1;
            if (($handle = fopen($file, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $num = count($data);
                    $row++;
                    for ($i=0; $i < $num; $i++) {
                        $place = new Place();

                        $place->setName($data[0]);
                        $place->setAdress($data[1]);
                        $place->setZipCode($data[3]);
                        $place->setCity($data[2]);
                    }
                $manager->persist($place);        
                $manager->flush();
                }
                fclose($handle);
            }
            return $this->RedirectToRoute('places_list');
        }
        

        return $this->render('site/places_csv.html.twig', [
            'formCSV' => $form->createView()
        ]);
    }
}

