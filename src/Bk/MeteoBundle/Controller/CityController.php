<?php

namespace Bk\MeteoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CityController extends Controller {

    public function indexAction() {

        $param = $this->container->getParameter('OpenWeatherMap');
        $fake = '../src/Bk/MeteoBundle/cache/fake/paris.xml';

        $xml = new \SimpleXMLElement(file_get_contents($fake));
        $weather = new \Bk\MeteoBundle\Entity\Weather();
        $weather
                ->setDate($xml->lastupdate->__toString())
                ->setSunrise($xml->city->sun['rise']->__toString())
                ->setSunset($xml->city->sun['set']->__toString())
                ->setTemperature($xml->temperature['value']->__toString())
                ->setTemperatureMin($xml->temperature['min']->__toString())
                ->setTemperatureMax($xml->temperature['max']->__toString())
                ->setPressure($xml->pressure['value']->__toString()
                        . ' ' . $xml->temperature['unit']->__toString())
                ->setHumidity($xml->humidity['value']->__toString()
                        . ' ' . $xml->humidity['unit']->__toString())
                ->setWindSpeed($xml->wind->speed['name']->__toString())
                ->setWindSpeedCode($xml->wind->speed['value']->__toString())
                ->setWindDirection($xml->wind->speed['name']->__toString())
                ->setWindDirectionCode($xml->wind->speed['value']->__toString())
                ->setClouds($xml->clouds['name']->__toString())
                ->setCloudsCode($xml->clouds['value']->__toString())
                ->setPrecipitation($xml->precipitation['mode']->__toString())
                ->setGeneral($xml->weather['value']->__toString())
                ->setGeneralIcon($xml->weather['icon']->__toString())
                ->setGeneralCode($xml->weather['number']->__toString())
        ;
        $city = new \Bk\MeteoBundle\Entity\City();
        $city
                ->setName($xml->city['name']->__toString())
                ->setLongitude($xml->city->coord['lon']->__toString())
                ->setLatitude($xml->city->coord['lat']->__toString())
                ->addWeather($weather)
        ;

        return $this->render('BkMeteoBundle:Meteo:city.html.twig', array('city' => $city));
    }

}
