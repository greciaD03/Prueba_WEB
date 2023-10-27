<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /*#[Route('/movies/{name}', name: 'movies', defaults: ['name' => null], methods:
    ['GET', 'HEAD'])]
    public function index($name): Response
    {
        return $this->json([
            'post' => $name,
            'custom_post' => 'src/Controller/PostController.php'
        ]);
    }*/

    /*#[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'title' => 'Good morning little star´s, the world says HI!'
        ]);
    }*/

     /*#[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = 'Genre: '.u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All Genres';
        }
        return new Response($title);
    }*/

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        $title = u(str_replace('-', ' ', $slug))->title(true); 
        return new Response('Genre: ' .$title); 
    }
}