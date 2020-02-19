<?php

namespace App\Controller;

use App\Entity\Place;
use App\Form\UploadPlaceType;
use App\Repository\PlaceRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/places", name="places")
     */
    public function places(PlaceRepository $placeRepository,Request $request):response
    {

        $form = $this->createForm(UploadPlaceType::class);

        $form->handleRequest($request);

        dump($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $placeFile = $form->get('fichier')->getData();
            $file = fopen($placeFile, "r");
            
            while (($column = fgetcsv($file, 10000, ";")) !== FALSE) {
                $place = new Place();
                $place->setName($column[0]);
                $place->setAddress($column[1]);
                $place->setCity($column[2]);
                $place->setZipCode($column[3]);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($place);
                $entityManager->flush();
            }
        }

        return $this->render('place/index.html.twig', [
            'places' => $placeRepository->findAll(),
            'leplaceform' => $form->createView(),
        ]);
    }
}
