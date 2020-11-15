<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BanqueController
{
    /**
    * @Route("/banque")
    */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>
            Je suis une banque </br>
            Lucky number: '.$number.'</body></html>'
        );
    }
}