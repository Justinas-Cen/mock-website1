<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[When(env: 'dev')]
class TestController extends AbstractController
{
    //test1
    #[Route('/test1', name:'test1', methods:'GET')]
    public function test1()
    {
        die('test1');
    }
       
    //test2
    #[Route('/test2', name:'test2', methods: 'GET')]
    public function test2()
    {
        return $this->render('test/test2.html.twig');
    }
   
    //test3
    #[Route('/test3', name:'test3', methods: 'GET')]
    public function test3()
    {
        return $this->render('test/test3.html.twig');
    }
}