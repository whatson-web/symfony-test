<?php

namespace App\Controller;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\LexerConfig;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\File;

class PlacesListController extends AbstractController
{
    /**
     * @Route("/places", name="places_list")
     */
    public function index(Request $request, PlaceRepository $placeRepository): Response
    {
        if (!is_object($this->get('security.token_storage')->getToken()->getUser())) {
            return $this->redirectToRoute('app_login');
        }

        $success = false;
        $csv = null;
        $form = $this->createFormBuilder($csv)
        ->add('submitFile', FileType::class, ['label' => 'Import a CSV file', 'constraints' => [
            new File([
                'mimeTypes' => [
                    "text/plain", "text/csv", "application/octet-stream"
                ],
                'mimeTypesMessage' => 'Please upload a valid CSV document',
            ])
        ],
        ])
        ->add('submit', SubmitType::class)
        ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $placeRepository->clear();
            $propertyAccessor = PropertyAccess::createPropertyAccessor();
            $file = $propertyAccessor->getValue($form->getData(), '[submitFile]');
            if (($handle = fopen($file->getPathname(), "r")) !== FALSE) {
                while (($data = fgetcsv($handle, $file->getSize(), ";")) !== FALSE) {
                    $place = new Place();
                    $place->setName($data[0]);
                    $place->setAddress($data[1]);
                    $place->setCity($data[2]);
                    $place->setZipCode($data[3]);
                    $entityManager->persist($place);
                }
                fclose($handle);
                $entityManager->flush();
                $success = true;
            }
        }

        return $this->render('places_list/index.html.twig', [
            'places' => $placeRepository->findAll(),
            'form' => $form->createView(),
            'success' => $success
        ]);
    }
}
