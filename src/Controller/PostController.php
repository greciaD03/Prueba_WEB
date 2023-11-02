<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
use App\Enum\OrderStatusEnum;

//#[Route('/blog', requirements: ['_locale' => 'en|es|fr'], name: 'blog_')]
class PostController extends AbstractController
{
    /*#[Route('/{_locale}', name: 'index')]
    public function index(): Response
    {
        return new Response ('Informacion');
    }

    #[Route('/{_locale}/posts/{slug}', name: 'show')]
    public function show(string $slug): Response
    {
        return new Response ('Doble: ' .$slug);
    }

    #[Route('/{_locale}/post', name: 'low')]
    public function low(): Response
    {
        return new Response ('Parangaricutirimícuaro');
    }

    #[Route('/{_locale}/doc/{page?}', name: 'blog', defaults: ['page' => 1, 'title' => 'Hello world!'])]
    public function blog(?int $page, string $title): Response
    {
        return new Response ('Sub-Texto: ' .$title);
    }

    /*#[Route('/orders/list/{status}', name: 'list_orders_by_status')]
    public function list(OrderStatusEnum $status = OrderStatusEnum::Paid): Response
    {
        return new Response ('PRUE-ba: ' .$status);
    }
    
    #[Route('/{_locale}/lista/{page?}', name: 'lista', requirements: ['page' => '2'], priority: 3)]
    public function lista(?int $page=2): Response
    {
        return new Response ('Pagina: ' .$page); 
    }

    #[Route('/{_locale}/parrafo/{page3}', name: 'parrafo', requirements: ['page3' => '3'], priority: 2)]
    public function parrafo(int $page3=3): Response
    {
        return new Response ('Pagina con contador: ' .$page3); 
    }

    #[Route('/{_locale}/conjunto/{page4}', name: 'conjunto', requirements: ['page4' => '4'])]
    public function conjunto(int $page4=4): Response
    {
        return new Response ('TEXTO TEXTO TEXO TEXTO: ' .$page4); 
    }

    //"/blog/my-first-post"

    #[Route('/{_locale}/sho/{slug}', name: 'sho')]
    public function sho($slug='mi-pagina-web', $title='A B C D'): Response
    {
        return new Response ('NOMBRE de la Pagina: ' .$slug .$title);
    }

    #[Route('/{_locale}/bloqlist/{page<\d+>?1}', name: 'bloqlist')]
    public function bloqlist(?int $page=1): Response
    {
        return new Response ('T E X T O: ' .$page); 
    }

   #[Route('/{_locale}/movies/{name}', name: 'movies', defaults: ['name' => null], methods:
    ['GET', 'HEAD'])]
    public function movies($name): Response
    {
        return $this->json([
            'post' => $name,
            'custom_post' => 'RUTA Movies'
        ]);
    }

    #[Route('/{_locale}/hobbys/{id}', name: 'hobbys', defaults: ['id' => null], methods:
    ['GET', 'HEAD'])]
    public function hobbys($id): Response
    {
        return $this->json([
            'post' => $id,
            'custom_post' => 'RUTA Hobbys'
        ]);
    }

    #[Route('/{_locale}/deportes/{dat}', name: 'deportes', defaults: ['dat' => null], methods:
    ['GET', 'HEAD'])]
    public function deportes($dat): Response
    {
        return $this->json([
            'post' => $dat,
            'custom_post' => 'Ruta Deportes'
        ]);
    }

    /*#[Route('/movies/{name}', name: 'movies', defaults: ['name' => null], methods:
    ['PUT'])]
    public function index($name): Response
    {
        return $this->json([
            'post' => $name,
            'custom_post' => 'src/Controller/PostController.php'
        ]);
    }

    #[Route('/{_locale}/mov', name: 'mov')]
    public function mov(): Response
    {
        return $this->render('post/index.html.twig', [
            'title' => 'Good morning little star´s, the world says HI!'
        ]);
    }

    #[Route('/{_locale}/brecha/{slug}', name: 'brecha')]
    public function brecha(string $slug): Response
    {
        $title = u(str_replace('-', ' ', $slug))->title(true);
        return new Response('Genre: ' .$title);
    }

    #[Route('/{_locale}/broch/{slug}', name: 'broch')]
    public function broch(string $slug): Response
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
