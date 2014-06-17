<?php

namespace Bk\MeteoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maitre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bk\MeteoBundle\Entity\WeatherRepository")
 */
class Weather {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="City", inversedBy="weathers", cascade={"remove"})
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $sunrise;

    /**
     * @ORM\Column(type="integer")
     */
    private $sunset;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $temperature;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $temperatureMin;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $temperatureMax;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $pressure;

    /**
     * @ORM\Column(type="integer")
     */
    private $humidity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $windSpeed;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $windSpeedCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $windDirection;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $windDirectionCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clouds;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $cloudsCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cloudsDescription;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $precipitation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $precipitationDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $general;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $generalIcon;

    /**
     * @ORM\Column(type="integer")
     */
    private $generalCode;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Weather
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sunrise
     *
     * @param integer $sunrise
     * @return Weather
     */
    public function setSunrise($sunrise)
    {
        $this->sunrise = $sunrise;

        return $this;
    }

    /**
     * Get sunrise
     *
     * @return integer 
     */
    public function getSunrise()
    {
        return $this->sunrise;
    }

    /**
     * Set sunset
     *
     * @param integer $sunset
     * @return Weather
     */
    public function setSunset($sunset)
    {
        $this->sunset = $sunset;

        return $this;
    }

    /**
     * Get sunset
     *
     * @return integer 
     */
    public function getSunset()
    {
        return $this->sunset;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     * @return Weather
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set temperatureMin
     *
     * @param string $temperatureMin
     * @return Weather
     */
    public function setTemperatureMin($temperatureMin)
    {
        $this->temperatureMin = $temperatureMin;

        return $this;
    }

    /**
     * Get temperatureMin
     *
     * @return string 
     */
    public function getTemperatureMin()
    {
        return $this->temperatureMin;
    }

    /**
     * Set temperatureMax
     *
     * @param string $temperatureMax
     * @return Weather
     */
    public function setTemperatureMax($temperatureMax)
    {
        $this->temperatureMax = $temperatureMax;

        return $this;
    }

    /**
     * Get temperatureMax
     *
     * @return string 
     */
    public function getTemperatureMax()
    {
        return $this->temperatureMax;
    }

    /**
     * Set pressure
     *
     * @param string $pressure
     * @return Weather
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;

        return $this;
    }

    /**
     * Get pressure
     *
     * @return string 
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Set humidity
     *
     * @param integer $humidity
     * @return Weather
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get humidity
     *
     * @return integer 
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set windSpeed
     *
     * @param string $windSpeed
     * @return Weather
     */
    public function setWindSpeed($windSpeed)
    {
        $this->windSpeed = $windSpeed;

        return $this;
    }

    /**
     * Get windSpeed
     *
     * @return string 
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * Set windSpeedCode
     *
     * @param string $windSpeedCode
     * @return Weather
     */
    public function setWindSpeedCode($windSpeedCode)
    {
        $this->windSpeedCode = $windSpeedCode;

        return $this;
    }

    /**
     * Get windSpeedCode
     *
     * @return string 
     */
    public function getWindSpeedCode()
    {
        return $this->windSpeedCode;
    }

    /**
     * Set windDirection
     *
     * @param string $windDirection
     * @return Weather
     */
    public function setWindDirection($windDirection)
    {
        $this->windDirection = $windDirection;

        return $this;
    }

    /**
     * Get windDirection
     *
     * @return string 
     */
    public function getWindDirection()
    {
        return $this->windDirection;
    }

    /**
     * Set windDirectionCode
     *
     * @param string $windDirectionCode
     * @return Weather
     */
    public function setWindDirectionCode($windDirectionCode)
    {
        $this->windDirectionCode = $windDirectionCode;

        return $this;
    }

    /**
     * Get windDirectionCode
     *
     * @return string 
     */
    public function getWindDirectionCode()
    {
        return $this->windDirectionCode;
    }

    /**
     * Set clouds
     *
     * @param string $clouds
     * @return Weather
     */
    public function setClouds($clouds)
    {
        $this->clouds = $clouds;

        return $this;
    }

    /**
     * Get clouds
     *
     * @return string 
     */
    public function getClouds()
    {
        return $this->clouds;
    }

    /**
     * Set cloudsCode
     *
     * @param string $cloudsCode
     * @return Weather
     */
    public function setCloudsCode($cloudsCode)
    {
        $this->cloudsCode = $cloudsCode;

        return $this;
    }

    /**
     * Get cloudsCode
     *
     * @return string 
     */
    public function getCloudsCode()
    {
        return $this->cloudsCode;
    }

    /**
     * Set cloudsDescription
     *
     * @param string $cloudsDescription
     * @return Weather
     */
    public function setCloudsDescription($cloudsDescription)
    {
        $this->cloudsDescription = $cloudsDescription;

        return $this;
    }

    /**
     * Get cloudsDescription
     *
     * @return string 
     */
    public function getCloudsDescription()
    {
        return $this->cloudsDescription;
    }

    /**
     * Set precipitation
     *
     * @param string $precipitation
     * @return Weather
     */
    public function setPrecipitation($precipitation)
    {
        $this->precipitation = $precipitation;

        return $this;
    }

    /**
     * Get precipitation
     *
     * @return string 
     */
    public function getPrecipitation()
    {
        return $this->precipitation;
    }

    /**
     * Set precipitationDescription
     *
     * @param string $precipitationDescription
     * @return Weather
     */
    public function setPrecipitationDescription($precipitationDescription)
    {
        $this->precipitationDescription = $precipitationDescription;

        return $this;
    }

    /**
     * Get precipitationDescription
     *
     * @return string 
     */
    public function getPrecipitationDescription()
    {
        return $this->precipitationDescription;
    }

    /**
     * Set general
     *
     * @param string $general
     * @return Weather
     */
    public function setGeneral($general)
    {
        $this->general = $general;

        return $this;
    }

    /**
     * Get general
     *
     * @return string 
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * Set generalIcon
     *
     * @param string $generalIcon
     * @return Weather
     */
    public function setGeneralIcon($generalIcon)
    {
        $this->generalIcon = $generalIcon;

        return $this;
    }

    /**
     * Get generalIcon
     *
     * @return string 
     */
    public function getGeneralIcon()
    {
        return $this->generalIcon;
    }

    /**
     * Set generalCode
     *
     * @param integer $generalCode
     * @return Weather
     */
    public function setGeneralCode($generalCode)
    {
        $this->generalCode = $generalCode;

        return $this;
    }

    /**
     * Get generalCode
     *
     * @return integer 
     */
    public function getGeneralCode()
    {
        return $this->generalCode;
    }

    /**
     * Set city
     *
     * @param \Bk\MeteoBundle\Entity\City $city
     * @return Weather
     */
    public function setCity(\Bk\MeteoBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Bk\MeteoBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }
}
