<?php

namespace diateco\pedidosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pedidosBundle:Default:index.html.twig');
    }
}
