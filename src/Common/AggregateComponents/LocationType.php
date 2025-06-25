<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing LocationType
 *
 *
 * XSD Type: LocationType
 */
class LocationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Address $address
     */
    private $address = null;

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
     * Gets as address
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Address $address
     * @return self
     */
    public function setAddress(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }
}

