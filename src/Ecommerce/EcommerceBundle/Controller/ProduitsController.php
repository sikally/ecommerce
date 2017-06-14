<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function ProduitsAction()
    {
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig');
    }

    public function PresentationAction()
    {
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig');
    }
}
