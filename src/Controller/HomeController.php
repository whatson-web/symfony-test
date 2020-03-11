<?php

namespace App\Controller;

use App\Repository\PlaceRepository;
use App\Repository\CustomerRepository;
use App\Repository\AppointmentRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('home.html.twig');
    }


    /**
     * @Route("/dashbord", name="dashboard")
     */
    public function dashboard()
    {
        
        return $this->render('dashboard.html.twig');
    }
}
