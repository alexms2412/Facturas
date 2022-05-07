<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetalleController extends AbstractController
{
    #[Route('/detalle', name: 'app_detalle')]
    public function index(): Response
    {
        return $this->render('detalle/index.html.twig', [
            'controller_name' => 'DetalleController',
        ]);
    }
}
