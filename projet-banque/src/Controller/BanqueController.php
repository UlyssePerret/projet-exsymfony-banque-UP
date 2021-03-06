<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BanqueController extends AbstractController
{
    /**
    * @Route("/banque", name="banque")
    */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('banque/banque.html.twig', [
            'number' => $number,
            'controller_name' => 'BanqueController',
        ]);

    }
}