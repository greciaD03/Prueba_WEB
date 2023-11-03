<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PruebaController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function form($nombre, $usuario, $telefono): Response
    {
        return $this->render('prueba/index.html.twig', [
            $nombre,
            $usuario, 
            $telefono
        ]); 
    }
}
//https://youtube.com/playlist?list=PLn5IkU1Zhgia_-EHWX97v0gYatn24o7FW&si=PA9YOgykATjUU98X 