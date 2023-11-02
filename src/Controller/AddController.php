<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

//#[Route('/blog', requirements: ['_locale' => 'en|es|fr'], name: 'blog_')]
class AddController extends AbstractController
{
    #[Route(path:'/home', name: 'app_home')]
    public function index(): Response
    {
        $suma = 10+10;
        return $this->json([
            'Message' => 'WELCOME!',
            'Path' => 'src/Controller/PostController.php',
            'Operacion' => $suma 
        ]);
    }

    #[Route(path:'/inicio/{id}', name: 'app_home', defaults: ['id' => null])]
    public function inicio($id): Response
    {
        $variable = $id; 
        $operacion = $id + 10; 
        return $this->json([
            'Message' => 'WELCOME!',
            'Path' => 'src/Controller/PostController.php',
            'Variable' => $variable,
            'Operacion + 10' => $operacion
        ]);
    }

    /*#[Route('/test/{id}', name: 'get_test', defaults: ['id' => null], methods:['GET'])]
    public function GetHelloWorld($id): Response
    { 
        return new Response([
            'Message' => 'Metodo GET',
            'post' => $id
        ]);
    }

    #[Route(path:'/test', name: 'post_test', methods:['POST'])]
    public function PostHelloWorld(): Response
    { 
        return new Response([
            'Message' => 'Metodo POST'
        ]);
    }

    #[Route(path:'/test', name: 'put_test', methods:['PUT'])]
    public function PutHelloWorld(): Response
    { 
        return new Response([
            'Message' => 'Metodo PUT'
        ]);
    }

    #[Route(path:'/test', name: 'delete_test', methods:['DELETE'])]
    public function DeleteHelloWorld(): Response
    { 
        return new Response([
            'Message' => 'Metodo DELETE'
        ]);
    }*/
}

//https://www.youtube.com/watch?v=ZEprUb6Nruk
