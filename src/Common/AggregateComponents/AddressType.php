<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: AddressType
 */
class AddressType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Postbox $postbox
     */
    private $postbox = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Room $room
     */
    private $room = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\StreetName $streetName
     */
    private $streetName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BlockName $blockName
     */
    private $blockName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BuildingName $buildingName
     */
    private $buildingName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BuildingNumber $buildingNumber
     */
    private $buildingNumber = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CitySubdivisionName $citySubdivisionName
     */
    private $citySubdivisionName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CityName $cityName
     */
    private $cityName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PostalZone $postalZone
     */
    private $postalZone = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Region $region
     */
    private $region = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\District $district
     */
    private $district = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Country $country
     */
    private $country = null;

    /**
     * Gets as iD
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     * @return self
     */
    public function setID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as postbox
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Postbox
     */
    public function getPostbox()
    {
        return $this->postbox;
    }

    /**
     * Sets a new postbox
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Postbox $postbox
     * @return self
     */
    public function setPostbox(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Postbox $postbox = null)
    {
        $this->postbox = $postbox;
        return $this;
    }

    /**
     * Gets as room
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets a new room
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Room $room
     * @return self
     */
    public function setRoom(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Room $room = null)
    {
        $this->room = $room;
        return $this;
    }

    /**
     * Gets as streetName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\StreetName
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Sets a new streetName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\StreetName $streetName
     * @return self
     */
    public function setStreetName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\StreetName $streetName = null)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * Gets as blockName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BlockName
     */
    public function getBlockName()
    {
        return $this->blockName;
    }

    /**
     * Sets a new blockName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BlockName $blockName
     * @return self
     */
    public function setBlockName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BlockName $blockName = null)
    {
        $this->blockName = $blockName;
        return $this;
    }

    /**
     * Gets as buildingName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BuildingName
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * Sets a new buildingName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BuildingName $buildingName
     * @return self
     */
    public function setBuildingName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BuildingName $buildingName = null)
    {
        $this->buildingName = $buildingName;
        return $this;
    }

    /**
     * Gets as buildingNumber
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BuildingNumber
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Sets a new buildingNumber
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BuildingNumber $buildingNumber
     * @return self
     */
    public function setBuildingNumber(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BuildingNumber $buildingNumber = null)
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    /**
     * Gets as citySubdivisionName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CitySubdivisionName
     */
    public function getCitySubdivisionName()
    {
        return $this->citySubdivisionName;
    }

    /**
     * Sets a new citySubdivisionName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CitySubdivisionName $citySubdivisionName
     * @return self
     */
    public function setCitySubdivisionName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\CitySubdivisionName $citySubdivisionName)
    {
        $this->citySubdivisionName = $citySubdivisionName;
        return $this;
    }

    /**
     * Gets as cityName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CityName
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CityName $cityName
     * @return self
     */
    public function setCityName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\CityName $cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as postalZone
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PostalZone
     */
    public function getPostalZone()
    {
        return $this->postalZone;
    }

    /**
     * Sets a new postalZone
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PostalZone $postalZone
     * @return self
     */
    public function setPostalZone(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PostalZone $postalZone = null)
    {
        $this->postalZone = $postalZone;
        return $this;
    }

    /**
     * Gets as region
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Region $region
     * @return self
     */
    public function setRegion(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Region $region = null)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as district
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\District
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets a new district
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\District $district
     * @return self
     */
    public function setDistrict(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\District $district = null)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Country $country
     * @return self
     */
    public function setCountry(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Country $country)
    {
        $this->country = $country;
        return $this;
    }
}

