<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing AirTransportType
 *
 *
 * XSD Type: AirTransportType
 */
class AirTransportType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AircraftID $aircraftID
     */
    private $aircraftID = null;

    /**
     * Gets as aircraftID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AircraftID
     */
    public function getAircraftID()
    {
        return $this->aircraftID;
    }

    /**
     * Sets a new aircraftID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AircraftID $aircraftID
     * @return self
     */
    public function setAircraftID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\AircraftID $aircraftID)
    {
        $this->aircraftID = $aircraftID;
        return $this;
    }
}

