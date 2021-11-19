<?php

namespace App\Controller;

use App\Entity\Order;
use App\Form\CheckoutType;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    private $cartService;
    private $session;
    private $entityManager;
    public function __construct(CartService $cartService,SessionInterface $session,EntityManagerInterface $entityManager)
    {
        $this->cartService = $cartService;
        $this->session = $session;
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/checkout", name="checkout")
     */
    public function index(Request $request): Response
    {   
        $user = $this->getUser();
        $cart = $this->cartService->getFullCart();

        if(isset($cart['product'])){
            return $this->redirectToRoute('home');
        }
        if(!$user->getAddresses()->getValues()){
            $this->addFlash('checkout_message','svp ajouter votre addresse pour contunier');
            return $this->redirectToRoute("address_new");
        }
         $form = $this->createForm(CheckoutType::class,null,['user'=>$user]);
 

        return $this->render('checkout/index.html.twig',[
            'cart' => $cart,
            'checkout' => $form->createView(),
            'address' => $user->getAddresses()->getValues(),

        ]);
    }

    /**
     * @Route("/checkout/confim", name="checkout_confirm")
     */
    public function confirm(Request $request):Response{

        $user = $this->getUser();
        $cart = $this->cartService->getFullCart();

        if(isset($cart['product'])){
            return $this->redirectToRoute('home');
        }
        if(!$user->getAddresses()->getValues()){
            $this->addFlash('checkout_message','svp ajouter votre addresse pour contunier');
            return $this->redirectToRoute("address_new");
        }
         $form = $this->createForm(CheckoutType::class,null,['user'=>$user]);
         $form->handleRequest($request);

         if($form->isSubmitted() && $form->isValid() || $this->session->get('checkout_data')){
             if($this->session->get('checkout_data')){
                 $data = $this->session->get('checkout_data');
             }else{
                 $data = $form->getData();
                 $this->session->set('checkout_data',$data);
             }
 
             if($user->getAddresses()){
                $address = $user->getAddresses(); 
             }else{
                $address = $data['address']; 
             }

             //qvar_dump($address);
           
             $carrier = $form->get('carrier')->getData();
             $adresslv = $form->get('address')->getData();
             if($adresslv){
                
         
             $adress_content = $adresslv->getFullname();
             $adress_content .= '<br/>'.$adresslv->getPhone();
 
             if ($adresslv->getCompany()) {
                 $adress_content .= '<br/>'.$adresslv->getCompany();
             }
             $adress_content .= '<br/>'.$adresslv->getAddress();
             $adress_content .= '<br/>'.$adresslv->getCodepostal().' '.$adresslv->getCity();
             $adress_content .= '<br/>'.$adresslv->getCountry();
          
             $informations = $data['informations'];
            



                // Enregistrer ma commande Order()
                $date = new \DateTime();
                $order = new Order();
                $reference = $date->format('dmY').'-'.uniqid();
                $order->setReference($reference);
                $order->setUser($this->getUser());
                $order->setCreatedAt($date);
                $order->setCarrierName($carrier->getName());
                $order->setCarrierPrice($carrier->getPrice());
                $order->setDelivery($adress_content);
                $order->setState(0);
                $this->entityManager->persist($order);

                $this->entityManager->flush();
                $ref = $order->getReference();
               }else{
                return $this->redirectToRoute("checkout");
                }



                
            return $this->render('checkout/confirm.html.twig',[
                'cart' => $cart,
                'address' => $adress_content,
                'carrier' => $carrier,
                'informations' => $informations,
                'checkout' => $form->createView(),
                'reference' => $ref,
            ]);
         }




         return $this->redirectToRoute('checkout');

    }

}
