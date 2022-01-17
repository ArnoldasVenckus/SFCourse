<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return new Response (
            '<h1>Welcome freeCodeCamp!</h1>'
        );
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     */

    public function custom(Request $request) {
        $name = $request->get($key = 'name');
        return new Response(
            '<h1>Welcome ' . $name . '!</h1>'
        );
    }
}