<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DeliveryType
 *
 *
 * XSD Type: DeliveryType
 */
class DeliveryType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * @var \DateTime $actualDeliveryDate
     */
    private $actualDeliveryDate = null;

    /**
     * @var \DateTime $actualDeliveryTime
     */
    private $actualDeliveryTime = null;

    /**
     * @var \DateTime $latestDeliveryDate
     */
    private $latestDeliveryDate = null;

    /**
     * @var \DateTime $latestDeliveryTime
     */
    private $latestDeliveryTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TrackingID $trackingID
     */
    private $trackingID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryAddress $deliveryAddress
     */
    private $deliveryAddress = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AlternativeDeliveryLocation $alternativeDeliveryLocation
     */
    private $alternativeDeliveryLocation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDeliveryPeriod $estimatedDeliveryPeriod
     */
    private $estimatedDeliveryPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CarrierParty $carrierParty
     */
    private $carrierParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryParty $deliveryParty
     */
    private $deliveryParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Despatch $despatch
     */
    private $despatch = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms[] $deliveryTerms
     */
    private $deliveryTerms = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment
     */
    private $shipment = null;

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
     * Gets as quantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as actualDeliveryDate
     *
     * @return \DateTime
     */
    public function getActualDeliveryDate()
    {
        return $this->actualDeliveryDate;
    }

    /**
     * Sets a new actualDeliveryDate
     *
     * @param \DateTime $actualDeliveryDate
     * @return self
     */
    public function setActualDeliveryDate(?\DateTime $actualDeliveryDate = null)
    {
        $this->actualDeliveryDate = $actualDeliveryDate;
        return $this;
    }

    /**
     * Gets as actualDeliveryTime
     *
     * @return \DateTime
     */
    public function getActualDeliveryTime()
    {
        return $this->actualDeliveryTime;
    }

    /**
     * Sets a new actualDeliveryTime
     *
     * @param \DateTime $actualDeliveryTime
     * @return self
     */
    public function setActualDeliveryTime(?\DateTime $actualDeliveryTime = null)
    {
        $this->actualDeliveryTime = $actualDeliveryTime;
        return $this;
    }

    /**
     * Gets as latestDeliveryDate
     *
     * @return \DateTime
     */
    public function getLatestDeliveryDate()
    {
        return $this->latestDeliveryDate;
    }

    /**
     * Sets a new latestDeliveryDate
     *
     * @param \DateTime $latestDeliveryDate
     * @return self
     */
    public function setLatestDeliveryDate(?\DateTime $latestDeliveryDate = null)
    {
        $this->latestDeliveryDate = $latestDeliveryDate;
        return $this;
    }

    /**
     * Gets as latestDeliveryTime
     *
     * @return \DateTime
     */
    public function getLatestDeliveryTime()
    {
        return $this->latestDeliveryTime;
    }

    /**
     * Sets a new latestDeliveryTime
     *
     * @param \DateTime $latestDeliveryTime
     * @return self
     */
    public function setLatestDeliveryTime(?\DateTime $latestDeliveryTime = null)
    {
        $this->latestDeliveryTime = $latestDeliveryTime;
        return $this;
    }

    /**
     * Gets as trackingID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TrackingID
     */
    public function getTrackingID()
    {
        return $this->trackingID;
    }

    /**
     * Sets a new trackingID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TrackingID $trackingID
     * @return self
     */
    public function setTrackingID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TrackingID $trackingID = null)
    {
        $this->trackingID = $trackingID;
        return $this;
    }

    /**
     * Gets as deliveryAddress
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryAddress
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets a new deliveryAddress
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryAddress $deliveryAddress
     * @return self
     */
    public function setDeliveryAddress(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryAddress $deliveryAddress = null)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * Gets as alternativeDeliveryLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AlternativeDeliveryLocation
     */
    public function getAlternativeDeliveryLocation()
    {
        return $this->alternativeDeliveryLocation;
    }

    /**
     * Sets a new alternativeDeliveryLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AlternativeDeliveryLocation $alternativeDeliveryLocation
     * @return self
     */
    public function setAlternativeDeliveryLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AlternativeDeliveryLocation $alternativeDeliveryLocation = null)
    {
        $this->alternativeDeliveryLocation = $alternativeDeliveryLocation;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDeliveryPeriod
     */
    public function getEstimatedDeliveryPeriod()
    {
        return $this->estimatedDeliveryPeriod;
    }

    /**
     * Sets a new estimatedDeliveryPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDeliveryPeriod $estimatedDeliveryPeriod
     * @return self
     */
    public function setEstimatedDeliveryPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDeliveryPeriod $estimatedDeliveryPeriod = null)
    {
        $this->estimatedDeliveryPeriod = $estimatedDeliveryPeriod;
        return $this;
    }

    /**
     * Gets as carrierParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CarrierParty
     */
    public function getCarrierParty()
    {
        return $this->carrierParty;
    }

    /**
     * Sets a new carrierParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CarrierParty $carrierParty
     * @return self
     */
    public function setCarrierParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CarrierParty $carrierParty = null)
    {
        $this->carrierParty = $carrierParty;
        return $this;
    }

    /**
     * Gets as deliveryParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryParty
     */
    public function getDeliveryParty()
    {
        return $this->deliveryParty;
    }

    /**
     * Sets a new deliveryParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryParty $deliveryParty
     * @return self
     */
    public function setDeliveryParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryParty $deliveryParty = null)
    {
        $this->deliveryParty = $deliveryParty;
        return $this;
    }

    /**
     * Gets as despatch
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Despatch
     */
    public function getDespatch()
    {
        return $this->despatch;
    }

    /**
     * Sets a new despatch
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Despatch $despatch
     * @return self
     */
    public function setDespatch(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Despatch $despatch = null)
    {
        $this->despatch = $despatch;
        return $this;
    }

    /**
     * Adds as deliveryTerms
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     */
    public function addToDeliveryTerms(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms[] = $deliveryTerms;
        return $this;
    }

    /**
     * isset deliveryTerms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryTerms($index)
    {
        return isset($this->deliveryTerms[$index]);
    }

    /**
     * unset deliveryTerms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryTerms($index)
    {
        unset($this->deliveryTerms[$index]);
    }

    /**
     * Gets as deliveryTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms[]
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms[] $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?array $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

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
    public function setShipment(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }
}

