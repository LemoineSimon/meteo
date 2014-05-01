<?php

namespace Bk\MeteoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MeteoController extends Controller {

    public function indexAction() {
        $param = $this->container->getParameter('OpenWeatherMap');
        $fake = '../src/Bk/MeteoBundle/cache/fake/france.json';
        $json = json_decode(file_get_contents($fake));
        $cities = $json->list;
        return $this->render('BkMeteoBundle:Meteo:index.html.twig', array('cities' => $cities));
    }

}
