<?php

namespace App\Controller;

use App\Entity\Place;
use App\Entity\PlaceFile;
use App\Form\PlaceImportType;
use App\Repository\PlaceRepository;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class PlaceController extends AbstractController
{
    private function read_csv($csv){
        $file = fopen($csv, 'r');
        while (!feof($file) ) {
            $line[] = fgetcsv($file, 1024);
        }
        fclose($file);
        return $line;
    }
    
    /**
     * @Route("/lieux", name="places")
     */
    public function index(PlaceRepository $repo, Request $request, ObjectManager $manager)
    {

        $csvFile = new PlaceFile();
        $form = $this->createForm(PlaceImportType::class, $csvFile);
        $form->handleRequest($request);
            
        if ($form->isSubmitted() && $form->isValid()) {
            
            $extension = $csvFile->getFile()->guessExtension();

            if ($extension == 'csv') {
                $form->get('file')->addError(new FormError("Vous ne pouvez importer qu'un fichier CSV"));
            }

            else {

                $file = $csvFile->getFile();
                $fileName = $file->getClientOriginalName();

                try {
                    $file->move(
                        $this->getParameter('csv_storage'),
                        $fileName
                    );
                } catch (FileException $e) {
                    //throw $th;
                }

                $csv = 'csv-files/'.$fileName;

                $file = fopen($csv, 'r');
                fgetcsv($file);

                while (($line = fgetcsv($file, 1024, ";")) !== FALSE) {
                    
                    $place = new Place();
                    $place->setName($line[0])
                          ->setAddress($line[1])
                          ->setCity($line[2])
                          ->setZipCode($line[3]);
                    $manager->persist($place);
                    
                }

                $manager->flush();
                    $this->addFlash(
                    'success',
                    "Les lieux ont bien été importé"
                );

                return $this->redirectToRoute('places');
            }
        }

        $places = $repo->findAll();
        return $this->render('place/index.html.twig', [
            'places' => $places,
            'form' => $form->createView(),
            'menu' => 'places'
        ]);
    }
}
