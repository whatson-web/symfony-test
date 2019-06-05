<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }
    
    /**
     * @Route("/new", name="account_create")
     */
    public function create()
    {
        return $this->render('site/create.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }
}
