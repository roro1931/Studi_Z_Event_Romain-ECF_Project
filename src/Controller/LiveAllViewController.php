<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LiveAllViewController extends AbstractController
{
    #[Route('/live/view/all', name: 'app_live_all_view')]
    public function index(): Response
    {
        return $this->render('live_all_view/index.html.twig', [
            'controller_name' => 'LiveAllViewController',
        ]);
    }
}