<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing RoadTransportType
 *
 *
 * XSD Type: RoadTransportType
 */
class RoadTransportType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LicensePlateID $licensePlateID
     */
    private $licensePlateID = null;

    /**
     * Gets as licensePlateID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LicensePlateID
     */
    public function getLicensePlateID()
    {
        return $this->licensePlateID;
    }

    /**
     * Sets a new licensePlateID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LicensePlateID $licensePlateID
     * @return self
     */
    public function setLicensePlateID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\LicensePlateID $licensePlateID)
    {
        $this->licensePlateID = $licensePlateID;
        return $this;
    }
}

