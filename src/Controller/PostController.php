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

    /*#[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'title' => 'Good morning little star´s, the world says HI!'
        ]);
    }*/
}