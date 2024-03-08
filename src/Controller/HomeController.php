<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    
    public function home(): Response
    {
        return $this->render('page/home.html.twig', [
        ]);
    }
    public function second(): Response
    {
        return $this->render('page/second.html.twig', [
            
        ]);
    }
}
