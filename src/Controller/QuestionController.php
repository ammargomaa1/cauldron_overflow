<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage() : Response
    {
        return new Response('Hello From My first symfony route and controller');
    }

    /**
     * @Route("/questions/{slug}")
     */

     public function show($slug): Response
     {
         return new Response('<h1>HI</h1> ' . $slug);
     }
}
