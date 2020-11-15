<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogControllerPhpController extends AbstractController
{
    /**
     * @Route("/blog/controller/php", name="blog_controller_php")
     */
    public function index(): Response
    {
        return $this->render('blog_controller_php/index.html.twig', [
            'controller_name' => 'BlogControllerPhpController',
        ]);
    }
}
