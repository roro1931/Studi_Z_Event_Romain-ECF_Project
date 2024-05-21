<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\Type\TaskType;
use Symfony\Component\Form\Form;

class CreateStreamerController extends AbstractController
{
    #[Route('/create/streamer', name: 'app_create_streamer')]
    public function index(): Response
    {
        return $this->render('create_streamer/index.html.twig', [
            'controller_name' => 'CreateStreamerController'
        ]);
    }
}

