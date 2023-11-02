<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PruebaController extends AbstractController
{
    #[Route('/prueba/{$id}', name: 'app_prueba', defaults: ['id' => null])]
    public function index($id): Response
    {
        return $this->render('prueba/index.html.twig', [
            'controller_name' => 'PruebaController',
            'post' => $id 
        ]);
    }
}
//https://youtube.com/playlist?list=PLn5IkU1Zhgia_-EHWX97v0gYatn24o7FW&si=PA9YOgykATjUU98X 