<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return new Response('<h1>cloudploy-matrix-symfony</h1>');
    }

    #[Route('/health', name: 'health')]
    public function health(): Response
    {
        return new Response('ok');
    }
}
