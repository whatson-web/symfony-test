<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController {
    /**
     * @Route("/", name="whatson_index", methods="GET")
     */
    public function index(): Response
    {
        return $this->render('whatson/index.html.twig');
    }

}

?>