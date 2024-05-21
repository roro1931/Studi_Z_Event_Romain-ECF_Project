<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LiveController extends AbstractController
{
    #[Route('/live', name: 'app_live')]
    public function index(): Response
    {
        return $this->render('live/index.html.twig', [
            'controller_name' => 'LiveController',
        ]);
    }
}
