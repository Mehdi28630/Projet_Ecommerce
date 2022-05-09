<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart_index")
     */
    public function index(Request $request, ProduitRepository $produitRepository)
    {
        $session = $request->getSession();
        $panier = $session->get('panier', []);

        $panierWithData = [];

        foreach($panier as $id => $quantite){
            $panierWithData[] = [
                'produit' => $produitRepository->find($id),
                'quantité' => $quantite,
            ];
        }
        dd($panierWithData);

        return $this->render('cart/index.html.twig',[
            'items' => $panierWithData
        ]);
    }

    /**
     * @Route("/cart/add/{id}", name="cart_add")
     */
    public function add($id, Request $request)
    {
        $session = $request->getSession();
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            $panier[$id]++;
        }
        else{
            $panier[$id] = 1;
        }

        $session->set('panier',$panier);
        dd($session->get('panier'));
    }
}
