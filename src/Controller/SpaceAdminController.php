<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SpaceAdminController extends AbstractController
{
    #[Route('/space/admin', name: 'app_space_admin')]
    public function index(): Response
    {
        return $this->render('space_admin/index.html.twig', [
            'controller_name' => 'SpaceAdminController',
        ]);
    }
}
