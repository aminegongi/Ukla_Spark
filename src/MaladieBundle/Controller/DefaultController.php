<?php

namespace MaladieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaladieBundle:Default:index.html.twig');
    }
}
