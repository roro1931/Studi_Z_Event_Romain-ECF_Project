<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class SpaceStreamerController extends AbstractController
{
    #[Route('/space/streamer', name: 'app_space_streamer')]
    public function index(): Response
    {
        return $this->render('space_streamer/index.html.twig', [
            'controller_name' => 'SpaceStreamerController',
        ]);
    }
}
