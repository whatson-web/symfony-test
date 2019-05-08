<?php

namespace App\Controller;

use App\Entity\Place;
use League\Csv\Reader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Config\Definition\Exception\Exception;

class CsvUploadController extends AbstractController
{
    /**
     * @Route("/upload_csv", name="upload_csv")
     */
    public function uploadFile(Request $request): Response
    {
        $defaultData = ['message' => 'Type your message here'];
        $form = $this->createFormBuilder($defaultData)
            ->add('file', FileType::class, ['label' => 'Fichier CSV à télécharger'])
            ->add('uploader', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        $csv = null;
        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            $file = $data['file'];

            $fileName = md5(uniqid()).'.csv';

            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter('upload_folder'),
                    $fileName
                );
            } catch (FileException $e) {

                throw new Exception("Erreur");
            }

            $em = $this->getDoctrine()->getManager();

            $fn = fopen($this->getParameter('upload_folder').'/'.$fileName,"r");
  
            while(! feof($fn))  {
              $result = fgets($fn);
              $val = explode(';', $result);
                if(count($val) == 4 ){
                $newPlace = new Place();
                $newPlace->setAddress($val[1]);
                $newPlace->setCity($val[2]);
                $newPlace->setName($val[0]);
                $newPlace->setZipCode($val[3]);

                $em->persist($newPlace);
                }
            }
          
            fclose($fn);
        

            $em->flush();
            $request->getSession()->getFlashBag()->add('notice_success', 'Le fichier csv a bien ét uploadé');

            return $this->redirectToRoute('place_index');
        }

        return $this->render('csvUpload/index.html.twig', [
            'form' => $form->createView(), 'csvcontent' => $csv != null ? $csv->getContent() : []
        ]);
    }

}
