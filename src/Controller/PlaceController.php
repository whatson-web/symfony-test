<?php

namespace App\Controller;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class PlaceController extends AbstractController
{
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/place", name="place_index")
     */
    public function index(PlaceRepository $placeRepository, Request $request) : Response
    {
        //Create the form to submit a csv
        $form = $this->createFormBuilder()
            ->add('file', FileType::class, [
                'label' => 'Fichier CSV',
            ])
            ->add('Sauvegarder', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            //I store the temporary path
            $path = $form->getData()['file']->getRealPath();   
            //I get and store the contents of the csv file as a string
            $file = file_get_contents($path);
            //I divide the string after each "/n"
            $newPlaces = str_getcsv($file, "\n");
            //In each division I explode the string after each ";" and I create a new string that I store in $newPlaces
            $newPlaces = array_map(function($string){
                return explode(";", $string);
            }, $newPlaces);
            //For each piece exploded in the string, I implode them in my Place object
            foreach($newPlaces as $key => $value) {
                $place = new Place();
                $place->setName($value[0]);
                $place->setAddress($value[1]);
                $place->setCity($value[2]);
                $place->setZipCode($value[3]);
                $newPlaces[$key] = $place;  
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($place);
                $entityManager->flush();              
            }
        }

        return $this->render('place/index.html.twig', [
            'places' => $placeRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }
}
