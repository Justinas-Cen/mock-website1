<?php
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class HomeController extends AbstractController
{
    //homepage
    #[Route('/', name:'app_homepage', methods: 'GET')]
    public function homepage()
    {
        return $this->render('homepage.html.twig');
    }
}


