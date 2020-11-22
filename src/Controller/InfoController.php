<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfoController extends AbstractController {

    /**
     * @Route("/info", name="info")
     *  @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        return $this->render('info/info.html.twig', []);
    }
}