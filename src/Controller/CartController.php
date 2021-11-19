<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Service\CartService;


use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    private $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function index(): Response
    {
       $cart = $this->cartService->getFullCart();

       if(!isset($cart['products'])){
           return $this->redirectToRoute('home');
       }

        return $this->render('cart/index.html.twig', [
            'cart' => $cart
            
        ]);
    }




    /**
     * @Route("/cart/add/{id}", name="cart_add")
     */
    public function addToCart($id): Response{
       
        $this->cartService->addToCart($id);
        return $this->redirectToRoute("cart");
  
    }

    /**
     * @Route("/cart/delete/{id}", name="cart_delete")
     */
    public function deleteFromCart($id): Response{
       
        $this->cartService->deleteFromToCart($id);
        return $this->redirectToRoute("cart");
       

    }
    /**
     * @Route("/cart/delete_all/{id}", name="cart_delete_all")
     */
    public function deleteAllToCard($id): Response{
       
        $this->cartService->deleteAllToCard($id);
        return $this->redirectToRoute("cart");
       

    }
}
