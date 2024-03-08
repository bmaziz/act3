<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    #[Route('/test/{age}', name: 'app_test')]
    public function test($age)
    {
        return $this->render('demo/test.html.twig', [
            'title'=>'Les amies',
            'age'=>$age,     
                   
        ]);
    }
    #[Route('/demo', name: 'app_demo')]
    public function index()
    {
        return $this->render('demo/index.html.twig', [   
            'controller_name'=>'demo',         
        ]);
    }
    public function index2($username)
    {
        return $this->render('demo/index2.html.twig', [
            'nom'=>$username   
                   
        ]);
    }
}
?>
