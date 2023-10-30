<?php

namespace App\Controller;

use App\Enum\OrderStatusEnum;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class PostController extends AbstractController
{
    #[Route('/orders/list/{status}', name: 'list_orders_by_status')]
    public function list(OrderStatusEnum $status = OrderStatusEnum::Paid): Response
    {
        return new Response ('PRUE-ba: ' .$status);
    }
    
    /*#[Route('/blog/{page?}', name: 'blog_list', requirements: ['page' => '\d+'], priority: 3)]
    public function list(?int $page=2): Response
    {
        return new Response ('Pagina: ' .$page); 
    } 

    #[Route('/blog/{page3}', name: 'blog_list', requirements: ['page3' => '\d+'], priority: 2)]
    public function parrafo(int $page3=3): Response
    {
        return new Response ('Pagina con contador: ' .$page3); 
    } 

    #[Route('/blog/{page4}', name: 'blog_list', requirements: ['page4' => '\d+'])]
    public function conjunto(int $page4=4): Response
    {
        return new Response ('TEXTO TEXTO TEXO TEXTO: ' .$page4); 
    }*/

    //"/blog/my-first-post"

    /*#[Route('/blog/{slug}', name: 'blog_show')]
    public function show($slug='mi-pagina-web'): Response
    {
        return new Response ('NOMBRE de la Pagina: ' .$slug);
    }*/

    /*#[Route('/blog/{page<\d+>?1}', name: 'blog_list')]
    public function list(?int $page=1): Response
    {
        return new Response ('T E X T O: ' .$page); 
    }*/

   /*#[Route('/movies/{name}', name: 'movies', defaults: ['name' => null], methods:
    ['GET', 'HEAD'])]
    public function index($name): Response
    {
        return $this->json([
            'post' => $name,
            'custom_post' => 'RUTA Movies'
        ]);
    }

    #[Route('/hobbys/{id}', name: 'hobbys', defaults: ['id' => null], methods:
    ['GET', 'HEAD'])]
    public function list($id): Response
    {
        return $this->json([
            'post' => $id,
            'custom_post' => 'RUTA Hobbys'
        ]);
    }

    #[Route('/deportes/{date}', name: 'deportes', defaults: ['date' => null], methods:
    ['GET', 'HEAD'])]
    public function post($date): Response
    {
        return $this->json([
            'post' => $date,
            'custom_post' => 'Ruta Deportes'
        ]);
    }/*

    /*#[Route('/movies/{name}', name: 'movies', defaults: ['name' => null], methods:
    ['PUT'])]
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

    /*#[Route('/brecha/{slug}', name: 'brecha')]
    public function brecha(string $slug): Response
    {
        $title = u(str_replace('-', ' ', $slug))->title(true);
        return new Response('Genre: ' .$title);
    }*/

    /*#[Route('/brecha/{slug}', name: 'brecha')]
    public function brecha(string $slug): Response
    {
        if ($slug) {
            $title = 'Genre: '.u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All Genres';
        }
        return new Response($title);
    }*/

    /*#[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        $title = u(str_replace('-', ' ', $slug))->title(true); 
        return new Response('Genre: ' .$title); 
    }*/
}

//https://gitnacho.github.io/symfony-docs-es/cookbook/routing/method_parameters.html
//https://symfonycasts.com/es/screencast/symfony/wildcard-route
//Parangaricutirimícuaro "Paranga-ricutirimí-cuaro"
//      /brecha/Paranga-ricutirimí-cuaro
/* protected $name = 'GreciaDeyanira';
    protected $age = '19años';

    protected $lastname = 'MartinezLopez';
    protected $birthday = '22/12';

    protected $year = '2003';
    protected $school = 'Facultad LMAD';*/
