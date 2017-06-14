<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function PanierAction()
    {
        return $this->render('EcommerceBundle:Default:panier/layout/panier.html.twig');
    }
}
