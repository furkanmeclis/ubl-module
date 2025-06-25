<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ShipmentStageType
 *
 *
 * XSD Type: ShipmentStageType
 */
class ShipmentStageType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportModeCode $transportModeCode
     */
    private $transportModeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportMeansTypeCode $transportMeansTypeCode
     */
    private $transportMeansTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransitDirectionCode $transitDirectionCode
     */
    private $transitDirectionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Instructions[] $instructions
     */
    private $instructions = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransitPeriod $transitPeriod
     */
    private $transitPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportMeans $transportMeans
     */
    private $transportMeans = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DriverPerson[] $driverPerson
     */
    private $driverPerson = [
        
    ];

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
     * Gets as transportModeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportModeCode
     */
    public function getTransportModeCode()
    {
        return $this->transportModeCode;
    }

    /**
     * Sets a new transportModeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportModeCode $transportModeCode
     * @return self
     */
    public function setTransportModeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportModeCode $transportModeCode = null)
    {
        $this->transportModeCode = $transportModeCode;
        return $this;
    }

    /**
     * Gets as transportMeansTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportMeansTypeCode
     */
    public function getTransportMeansTypeCode()
    {
        return $this->transportMeansTypeCode;
    }

    /**
     * Sets a new transportMeansTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportMeansTypeCode $transportMeansTypeCode
     * @return self
     */
    public function setTransportMeansTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportMeansTypeCode $transportMeansTypeCode = null)
    {
        $this->transportMeansTypeCode = $transportMeansTypeCode;
        return $this;
    }

    /**
     * Gets as transitDirectionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransitDirectionCode
     */
    public function getTransitDirectionCode()
    {
        return $this->transitDirectionCode;
    }

    /**
     * Sets a new transitDirectionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransitDirectionCode $transitDirectionCode
     * @return self
     */
    public function setTransitDirectionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransitDirectionCode $transitDirectionCode = null)
    {
        $this->transitDirectionCode = $transitDirectionCode;
        return $this;
    }

    /**
     * Adds as instructions
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Instructions $instructions
     */
    public function addToInstructions(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Instructions $instructions)
    {
        $this->instructions[] = $instructions;
        return $this;
    }

    /**
     * isset instructions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstructions($index)
    {
        return isset($this->instructions[$index]);
    }

    /**
     * unset instructions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstructions($index)
    {
        unset($this->instructions[$index]);
    }

    /**
     * Gets as instructions
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Instructions[]
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Sets a new instructions
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Instructions[] $instructions
     * @return self
     */
    public function setInstructions(?array $instructions = null)
    {
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * Gets as transitPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransitPeriod
     */
    public function getTransitPeriod()
    {
        return $this->transitPeriod;
    }

    /**
     * Sets a new transitPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransitPeriod $transitPeriod
     * @return self
     */
    public function setTransitPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransitPeriod $transitPeriod = null)
    {
        $this->transitPeriod = $transitPeriod;
        return $this;
    }

    /**
     * Gets as transportMeans
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportMeans
     */
    public function getTransportMeans()
    {
        return $this->transportMeans;
    }

    /**
     * Sets a new transportMeans
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportMeans $transportMeans
     * @return self
     */
    public function setTransportMeans(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportMeans $transportMeans = null)
    {
        $this->transportMeans = $transportMeans;
        return $this;
    }

    /**
     * Adds as driverPerson
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DriverPerson $driverPerson
     */
    public function addToDriverPerson(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DriverPerson $driverPerson)
    {
        $this->driverPerson[] = $driverPerson;
        return $this;
    }

    /**
     * isset driverPerson
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDriverPerson($index)
    {
        return isset($this->driverPerson[$index]);
    }

    /**
     * unset driverPerson
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDriverPerson($index)
    {
        unset($this->driverPerson[$index]);
    }

    /**
     * Gets as driverPerson
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DriverPerson[]
     */
    public function getDriverPerson()
    {
        return $this->driverPerson;
    }

    /**
     * Sets a new driverPerson
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DriverPerson[] $driverPerson
     * @return self
     */
    public function setDriverPerson(?array $driverPerson = null)
    {
        $this->driverPerson = $driverPerson;
        return $this;
    }
}

