<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LiveCreateController extends AbstractController
{
    #[Route('/live/create', name: 'app_live_create')]
    public function index(): Response
    {
        return $this->render('live_create/index.html.twig', [
            'controller_name' => 'LiveCreateController',
        ]);
    }
}
