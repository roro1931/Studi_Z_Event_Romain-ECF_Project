<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LiveViewDetailledController extends AbstractController
{
    #[Route('/live/view/detailled', name: 'app_live_view_detailled')]
    public function index(): Response
    {
        return $this->render('live_view_detailled/index.html.twig', [
            'controller_name' => 'LiveViewDetailledController',
        ]);
    }
}
