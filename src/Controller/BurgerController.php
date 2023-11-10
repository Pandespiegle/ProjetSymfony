<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BurgerController extends AbstractController
{
    #[Route('/liste_burger', name: 'liste_burger')]

    
    public function liste(): Response
    {
    $burgers = ["burger1", "burger2", "burger3"];
 
    return $this->render('burger/liste_burger.html.twig', [
        'burgers' => $burgers,
    ]);
}
}
