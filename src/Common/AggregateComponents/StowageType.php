<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing StowageType
 *
 *
 * XSD Type: StowageType
 */
class StowageType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LocationID $locationID
     */
    private $locationID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Location[] $location
     */
    private $location = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * Gets as locationID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LocationID
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * Sets a new locationID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LocationID $locationID
     * @return self
     */
    public function setLocationID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LocationID $locationID = null)
    {
        $this->locationID = $locationID;
        return $this;
    }

    /**
     * Adds as location
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Location $location
     */
    public function addToLocation(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Location $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Location[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Location[] $location
     * @return self
     */
    public function setLocation(?array $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(?array $measurementDimension = null)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }
}

