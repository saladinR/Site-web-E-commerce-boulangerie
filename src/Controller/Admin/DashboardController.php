<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Entity\Product;
use App\Entity\Carrier;
use App\Entity\Order;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Eco Ble');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Produits', 'fas fa-shopping-cart', Product::class);
        yield MenuItem::linkToCrud('Catégories', 'fas fa-list', Categories::class);
        yield MenuItem::linkToCrud('Livraison', 'fas fa-truck', Carrier::class);
        yield MenuItem::linkToCrud('Commandes', 'fa fa-cart-arrow-down', Order::class);
        yield MenuItem::linkToCrud('Contact', 'fa fa-comments', Order::class);

    }
}
