<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing OrderedShipmentType
 *
 *
 * XSD Type: OrderedShipmentType
 */
class OrderedShipmentType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Package[] $package
     */
    private $package = [
        
    ];

    /**
     * Gets as shipment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as package
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Package $package
     */
    public function addToPackage(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Package $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Package[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Package[] $package
     * @return self
     */
    public function setPackage(?array $package = null)
    {
        $this->package = $package;
        return $this;
    }
}

