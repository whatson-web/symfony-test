<?php

namespace App\Controller;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * 
 */
class PlaceController extends AbstractController
{
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/place", name="place_index", methods={"GET"})
     */
    public function index(PlaceRepository $placeRepository) : Response
    {
        return $this->render('place/index.html.twig', [
            'places' => $placeRepository->findAll(),
        ]);
    }
}
