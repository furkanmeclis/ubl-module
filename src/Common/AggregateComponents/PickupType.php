<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PickupType
 *
 *
 * XSD Type: PickupType
 */
class PickupType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \DateTime $actualPickupDate
     */
    private $actualPickupDate = null;

    /**
     * @var \DateTime $actualPickupTime
     */
    private $actualPickupTime = null;

    /**
     * @var \DateTime $earliestPickupDate
     */
    private $earliestPickupDate = null;

    /**
     * @var \DateTime $earliestPickupTime
     */
    private $earliestPickupTime = null;

    /**
     * @var \DateTime $latestPickupDate
     */
    private $latestPickupDate = null;

    /**
     * @var \DateTime $latestPickupTime
     */
    private $latestPickupTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PickupLocation $pickupLocation
     */
    private $pickupLocation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PickupParty $pickupParty
     */
    private $pickupParty = null;

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
     * Gets as actualPickupDate
     *
     * @return \DateTime
     */
    public function getActualPickupDate()
    {
        return $this->actualPickupDate;
    }

    /**
     * Sets a new actualPickupDate
     *
     * @param \DateTime $actualPickupDate
     * @return self
     */
    public function setActualPickupDate(?\DateTime $actualPickupDate = null)
    {
        $this->actualPickupDate = $actualPickupDate;
        return $this;
    }

    /**
     * Gets as actualPickupTime
     *
     * @return \DateTime
     */
    public function getActualPickupTime()
    {
        return $this->actualPickupTime;
    }

    /**
     * Sets a new actualPickupTime
     *
     * @param \DateTime $actualPickupTime
     * @return self
     */
    public function setActualPickupTime(?\DateTime $actualPickupTime = null)
    {
        $this->actualPickupTime = $actualPickupTime;
        return $this;
    }

    /**
     * Gets as earliestPickupDate
     *
     * @return \DateTime
     */
    public function getEarliestPickupDate()
    {
        return $this->earliestPickupDate;
    }

    /**
     * Sets a new earliestPickupDate
     *
     * @param \DateTime $earliestPickupDate
     * @return self
     */
    public function setEarliestPickupDate(?\DateTime $earliestPickupDate = null)
    {
        $this->earliestPickupDate = $earliestPickupDate;
        return $this;
    }

    /**
     * Gets as earliestPickupTime
     *
     * @return \DateTime
     */
    public function getEarliestPickupTime()
    {
        return $this->earliestPickupTime;
    }

    /**
     * Sets a new earliestPickupTime
     *
     * @param \DateTime $earliestPickupTime
     * @return self
     */
    public function setEarliestPickupTime(?\DateTime $earliestPickupTime = null)
    {
        $this->earliestPickupTime = $earliestPickupTime;
        return $this;
    }

    /**
     * Gets as latestPickupDate
     *
     * @return \DateTime
     */
    public function getLatestPickupDate()
    {
        return $this->latestPickupDate;
    }

    /**
     * Sets a new latestPickupDate
     *
     * @param \DateTime $latestPickupDate
     * @return self
     */
    public function setLatestPickupDate(?\DateTime $latestPickupDate = null)
    {
        $this->latestPickupDate = $latestPickupDate;
        return $this;
    }

    /**
     * Gets as latestPickupTime
     *
     * @return \DateTime
     */
    public function getLatestPickupTime()
    {
        return $this->latestPickupTime;
    }

    /**
     * Sets a new latestPickupTime
     *
     * @param \DateTime $latestPickupTime
     * @return self
     */
    public function setLatestPickupTime(?\DateTime $latestPickupTime = null)
    {
        $this->latestPickupTime = $latestPickupTime;
        return $this;
    }

    /**
     * Gets as pickupLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PickupLocation
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * Sets a new pickupLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PickupLocation $pickupLocation
     * @return self
     */
    public function setPickupLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PickupLocation $pickupLocation = null)
    {
        $this->pickupLocation = $pickupLocation;
        return $this;
    }

    /**
     * Gets as pickupParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PickupParty
     */
    public function getPickupParty()
    {
        return $this->pickupParty;
    }

    /**
     * Sets a new pickupParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PickupParty $pickupParty
     * @return self
     */
    public function setPickupParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PickupParty $pickupParty = null)
    {
        $this->pickupParty = $pickupParty;
        return $this;
    }
}

