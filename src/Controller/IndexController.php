<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="base")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(): Response
    {
        return $this->render('index/connexion.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
     * @Route("/homme", name="homme")
     */
    public function homme(): Response
    {
        return $this->render('index/homme.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
    * @Route("/femme", name="femme")
    */

    public function femme(): Response
    {
        return $this->render('index/femme.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
    * @Route("/enfant", name="enfant")
    */

    public function enfant(): Response
    {
        return $this->render('index/enfant.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
    * @Route("/promotions", name="promotions")
    */
    public function promotions(): Response
    {
        return $this->render('index/promotions.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
    * @Route("/panier", name="panier")
    */
    public function panier(): Response
    {
        return $this->render('index/panier.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }





}
