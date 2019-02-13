<?php

namespace App\Controller;

use App\Entity\Place;
use App\Form\PlaceType;
use App\Repository\PlaceRepository;
use App\Serializer\Normalizer\PlaceNormalizer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PlaceController extends AbstractController
{
    /**
     * @Route("/place", name="place")
     */
    public function indexAction(Request $request, ObjectManager $manager)
    {

        $form = $this->createForm(PlaceType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sessionReg = $request->files->get('place');

                $file = new UploadedFile($sessionReg['fichier'], $sessionReg['fichier']);
                $fileName = md5(uniqid()).'.csv'; //.$file->guessExtension();
            $fich=$this->getParameter('contents_dir').$fileName;
            try {
                $file->move(
                    $this->getParameter('contents_dir') ,
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }$data =  array();
            foreach (file($fich) as $k)
                $data[] = explode(';',$k);
            if($data != null){
                foreach ($data as $val){
                    $place = new Place();
                    $place->setName($val[0]);
                    $place->setAddress($val[1]);
                    $place->setCity($val[2]);
                    $place->setZipCode(intval($val[3]));
                    $manager->persist($place);
                }
                $manager->flush();
            }

        }
        return $this->render('place/index.html.twig', ['form'=>$form->createView(),'place' => $manager->getRepository(Place::class)->findAll()]);
    }
}
