<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing RailTransportType
 *
 *
 * XSD Type: RailTransportType
 */
class RailTransportType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TrainID $trainID
     */
    private $trainID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RailCarID $railCarID
     */
    private $railCarID = null;

    /**
     * Gets as trainID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TrainID
     */
    public function getTrainID()
    {
        return $this->trainID;
    }

    /**
     * Sets a new trainID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TrainID $trainID
     * @return self
     */
    public function setTrainID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TrainID $trainID)
    {
        $this->trainID = $trainID;
        return $this;
    }

    /**
     * Gets as railCarID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RailCarID
     */
    public function getRailCarID()
    {
        return $this->railCarID;
    }

    /**
     * Sets a new railCarID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RailCarID $railCarID
     * @return self
     */
    public function setRailCarID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RailCarID $railCarID = null)
    {
        $this->railCarID = $railCarID;
        return $this;
    }
}

