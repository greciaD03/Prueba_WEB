<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/movies/{name}', name: 'movies', defaults: ['name' => null], methods:
    ['GET', 'HEAD'])]
    public function index($name): Response
    {
        return $this->json([
            'post' => $name,
            'custom_post' => 'src/Controller/PostController.php'
        ]);
    }
}