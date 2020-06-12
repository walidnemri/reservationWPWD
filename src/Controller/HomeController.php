<?php

namespace App\Controller;

use Twig\Environment;
//use App\Repository\PropertyRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

  /**
   *@Route("/", name="home") 
   */
  public function index()
  {
    return $this->render('pages/home.html.twig',[
    ]);
  }

}