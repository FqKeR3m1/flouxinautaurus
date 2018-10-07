<?php
/**
 * Created by PhpStorm.
 * User: Remi
 * Date: 03/08/2018
 * Time: 13:04
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
  /**
   * @Route("/", name="hephaistos_homepage")
   */
  public function indexAction(){

    return $this->render('homepage.html.twig');
  }
}