<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TransportMeansType
 *
 *
 * XSD Type: TransportMeansType
 */
class TransportMeansType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\JourneyID $journeyID
     */
    private $journeyID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationNationalityID $registrationNationalityID
     */
    private $registrationNationalityID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationNationality[] $registrationNationality
     */
    private $registrationNationality = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DirectionCode $directionCode
     */
    private $directionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportMeansTypeCode $transportMeansTypeCode
     */
    private $transportMeansTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TradeServiceCode $tradeServiceCode
     */
    private $tradeServiceCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Stowage $stowage
     */
    private $stowage = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AirTransport $airTransport
     */
    private $airTransport = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RoadTransport $roadTransport
     */
    private $roadTransport = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RailTransport $railTransport
     */
    private $railTransport = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MaritimeTransport $maritimeTransport
     */
    private $maritimeTransport = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OwnerParty $ownerParty
     */
    private $ownerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * Gets as journeyID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\JourneyID
     */
    public function getJourneyID()
    {
        return $this->journeyID;
    }

    /**
     * Sets a new journeyID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\JourneyID $journeyID
     * @return self
     */
    public function setJourneyID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\JourneyID $journeyID = null)
    {
        $this->journeyID = $journeyID;
        return $this;
    }

    /**
     * Gets as registrationNationalityID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationNationalityID
     */
    public function getRegistrationNationalityID()
    {
        return $this->registrationNationalityID;
    }

    /**
     * Sets a new registrationNationalityID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationNationalityID $registrationNationalityID
     * @return self
     */
    public function setRegistrationNationalityID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationNationalityID $registrationNationalityID = null)
    {
        $this->registrationNationalityID = $registrationNationalityID;
        return $this;
    }

    /**
     * Adds as registrationNationality
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationNationality $registrationNationality
     */
    public function addToRegistrationNationality(\FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationNationality $registrationNationality)
    {
        $this->registrationNationality[] = $registrationNationality;
        return $this;
    }

    /**
     * isset registrationNationality
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegistrationNationality($index)
    {
        return isset($this->registrationNationality[$index]);
    }

    /**
     * unset registrationNationality
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegistrationNationality($index)
    {
        unset($this->registrationNationality[$index]);
    }

    /**
     * Gets as registrationNationality
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationNationality[]
     */
    public function getRegistrationNationality()
    {
        return $this->registrationNationality;
    }

    /**
     * Sets a new registrationNationality
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationNationality[] $registrationNationality
     * @return self
     */
    public function setRegistrationNationality(?array $registrationNationality = null)
    {
        $this->registrationNationality = $registrationNationality;
        return $this;
    }

    /**
     * Gets as directionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DirectionCode
     */
    public function getDirectionCode()
    {
        return $this->directionCode;
    }

    /**
     * Sets a new directionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DirectionCode $directionCode
     * @return self
     */
    public function setDirectionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DirectionCode $directionCode = null)
    {
        $this->directionCode = $directionCode;
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
     * Gets as tradeServiceCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TradeServiceCode
     */
    public function getTradeServiceCode()
    {
        return $this->tradeServiceCode;
    }

    /**
     * Sets a new tradeServiceCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TradeServiceCode $tradeServiceCode
     * @return self
     */
    public function setTradeServiceCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TradeServiceCode $tradeServiceCode = null)
    {
        $this->tradeServiceCode = $tradeServiceCode;
        return $this;
    }

    /**
     * Gets as stowage
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Stowage
     */
    public function getStowage()
    {
        return $this->stowage;
    }

    /**
     * Sets a new stowage
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Stowage $stowage
     * @return self
     */
    public function setStowage(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Stowage $stowage = null)
    {
        $this->stowage = $stowage;
        return $this;
    }

    /**
     * Gets as airTransport
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AirTransport
     */
    public function getAirTransport()
    {
        return $this->airTransport;
    }

    /**
     * Sets a new airTransport
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AirTransport $airTransport
     * @return self
     */
    public function setAirTransport(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AirTransport $airTransport = null)
    {
        $this->airTransport = $airTransport;
        return $this;
    }

    /**
     * Gets as roadTransport
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RoadTransport
     */
    public function getRoadTransport()
    {
        return $this->roadTransport;
    }

    /**
     * Sets a new roadTransport
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RoadTransport $roadTransport
     * @return self
     */
    public function setRoadTransport(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RoadTransport $roadTransport = null)
    {
        $this->roadTransport = $roadTransport;
        return $this;
    }

    /**
     * Gets as railTransport
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RailTransport
     */
    public function getRailTransport()
    {
        return $this->railTransport;
    }

    /**
     * Sets a new railTransport
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RailTransport $railTransport
     * @return self
     */
    public function setRailTransport(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RailTransport $railTransport = null)
    {
        $this->railTransport = $railTransport;
        return $this;
    }

    /**
     * Gets as maritimeTransport
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MaritimeTransport
     */
    public function getMaritimeTransport()
    {
        return $this->maritimeTransport;
    }

    /**
     * Sets a new maritimeTransport
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MaritimeTransport $maritimeTransport
     * @return self
     */
    public function setMaritimeTransport(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MaritimeTransport $maritimeTransport = null)
    {
        $this->maritimeTransport = $maritimeTransport;
        return $this;
    }

    /**
     * Gets as ownerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OwnerParty
     */
    public function getOwnerParty()
    {
        return $this->ownerParty;
    }

    /**
     * Sets a new ownerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OwnerParty $ownerParty
     * @return self
     */
    public function setOwnerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OwnerParty $ownerParty = null)
    {
        $this->ownerParty = $ownerParty;
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

