<?php

namespace Bk\MeteoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maitre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bk\MeteoBundle\Entity\CityRepository")
 */
class City {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $latitude;

    /**
     * @ORM\OneToMany(targetEntity="Weather", mappedBy="city", cascade={"remove", "persist"})
     */
    private $weathers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->weathers = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return City
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return City
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Add weathers
     *
     * @param \Bk\MeteoBundle\Entity\Weather $weathers
     * @return City
     */
    public function addWeather(\Bk\MeteoBundle\Entity\Weather $weathers)
    {
        $this->weathers[] = $weathers;

        return $this;
    }

    /**
     * Remove weathers
     *
     * @param \Bk\MeteoBundle\Entity\Weather $weathers
     */
    public function removeWeather(\Bk\MeteoBundle\Entity\Weather $weathers)
    {
        $this->weathers->removeElement($weathers);
    }

    /**
     * Get weathers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWeathers()
    {
        return $this->weathers;
    }
}
