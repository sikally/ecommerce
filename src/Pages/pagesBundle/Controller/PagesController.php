<?php

namespace Pages\pagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function PageAction($id)
    {
        return $this->render('PagesBundle:Default:page/layout/page.html.twig');
    }

}
