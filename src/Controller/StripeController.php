<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Order;
use App\Entity\Product;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;

class StripeController extends AbstractController
{


    /**
     * @Route("/commande/create-session/{reference}", name="stripe_create_session")
     */
    public function index(EntityManagerInterface  $entityManager , $reference, OrderRepository $orderRepository): Response
    {

        
        $cleprive = "";
       

        $product_for_stripe = []; 
        $YOUR_DOMAIN = "http://127.0.0.1:8000"; 
        $order = $orderRepository->findOneByReference($reference);
         
        if (!$order) {
            new JsonResponse(['error' => 'order']);
        }
        //dd($order);
        foreach ($order->getOrderDetails()->getValues() as $product) {
          
            $product_object = $entityManager->getRepository(Product::class)->findOneByName($product->getProduct());
            $product_for_stripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $product->getPrice(),
                    'product_data' => [
                          'name' => $product->getName(),
                        // 'images' => [$YOUR_DOMAIN . "/uploads/" . $product_object->getImage()],
                    ],
                ],
                'quantity' => $product->getQuantity(),
            ];
        }



        $product_for_stripe[] = [
            'price_data' => [
                'currency' => 'eur',
                'unit_amount' => $order->getCarrierPrice(),
                'product_data' => [
                    'name' => $order->getCarrierName(),
                    'images' => [$YOUR_DOMAIN],
                ],
            ],
            'quantity' => 1,
        ];
 

       // Stripe::setApiKey('sk_test_2towwcQeiYvFfkDZjhkStC0H00ttUql3Tb');

        Stripe::setApiKey('');

        $checkout_session = Session::create([
            'customer_email'=>$this->getUser()->getEmail(),
            'payment_method_types' => ['card'],
            'line_items' => [
                $product_for_stripe
            ],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/commande/merci/{CHECKOUT_SESSION_ID}',
            'cancel_url' => $YOUR_DOMAIN . '/commande/error/{CHECKOUT_SESSION_ID}',
        ]);
        $order->setStripeSessionId($checkout_session->id);
        $entityManager->flush();

        $response = new JsonResponse(['id' => $checkout_session->id]);
        return $response;
    }
}
