<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/panier", name="panier")
     */
    public function panier(ProduitRepository $produitRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'products' => $produitRepository->findAll(),
        ]);
    }



}
