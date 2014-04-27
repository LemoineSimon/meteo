<?php

namespace Bk\MeteoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MeteoController extends Controller
{
    public function indexAction()
    {
        return $this->render('BkMeteoBundle:Meteo:index.html.twig', array('name' => 'meteo'));
    }
}
