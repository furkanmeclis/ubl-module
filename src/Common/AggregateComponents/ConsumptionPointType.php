<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ConsumptionPointType
 *
 *
 * XSD Type: ConsumptionPointType
 */
class ConsumptionPointType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberID $subscriberID
     */
    private $subscriberID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberType $subscriberType
     */
    private $subscriberType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberTypeCode $subscriberTypeCode
     */
    private $subscriberTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalDeliveredQuantity $totalDeliveredQuantity
     */
    private $totalDeliveredQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Address $address
     */
    private $address = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WebSiteAccess $webSiteAccess
     */
    private $webSiteAccess = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityMeter[] $utilityMeter
     */
    private $utilityMeter = [
        
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
    public function setID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as subscriberID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberID
     */
    public function getSubscriberID()
    {
        return $this->subscriberID;
    }

    /**
     * Sets a new subscriberID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberID $subscriberID
     * @return self
     */
    public function setSubscriberID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberID $subscriberID = null)
    {
        $this->subscriberID = $subscriberID;
        return $this;
    }

    /**
     * Gets as subscriberType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Sets a new subscriberType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberType $subscriberType
     * @return self
     */
    public function setSubscriberType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberType $subscriberType = null)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Gets as subscriberTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberTypeCode
     */
    public function getSubscriberTypeCode()
    {
        return $this->subscriberTypeCode;
    }

    /**
     * Sets a new subscriberTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberTypeCode $subscriberTypeCode
     * @return self
     */
    public function setSubscriberTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberTypeCode $subscriberTypeCode = null)
    {
        $this->subscriberTypeCode = $subscriberTypeCode;
        return $this;
    }

    /**
     * Gets as totalDeliveredQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalDeliveredQuantity
     */
    public function getTotalDeliveredQuantity()
    {
        return $this->totalDeliveredQuantity;
    }

    /**
     * Sets a new totalDeliveredQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalDeliveredQuantity $totalDeliveredQuantity
     * @return self
     */
    public function setTotalDeliveredQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalDeliveredQuantity $totalDeliveredQuantity = null)
    {
        $this->totalDeliveredQuantity = $totalDeliveredQuantity;
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

    /**
     * Gets as webSiteAccess
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WebSiteAccess
     */
    public function getWebSiteAccess()
    {
        return $this->webSiteAccess;
    }

    /**
     * Sets a new webSiteAccess
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WebSiteAccess $webSiteAccess
     * @return self
     */
    public function setWebSiteAccess(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\WebSiteAccess $webSiteAccess = null)
    {
        $this->webSiteAccess = $webSiteAccess;
        return $this;
    }

    /**
     * Adds as utilityMeter
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityMeter $utilityMeter
     */
    public function addToUtilityMeter(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityMeter $utilityMeter)
    {
        $this->utilityMeter[] = $utilityMeter;
        return $this;
    }

    /**
     * isset utilityMeter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUtilityMeter($index)
    {
        return isset($this->utilityMeter[$index]);
    }

    /**
     * unset utilityMeter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUtilityMeter($index)
    {
        unset($this->utilityMeter[$index]);
    }

    /**
     * Gets as utilityMeter
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityMeter[]
     */
    public function getUtilityMeter()
    {
        return $this->utilityMeter;
    }

    /**
     * Sets a new utilityMeter
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityMeter[] $utilityMeter
     * @return self
     */
    public function setUtilityMeter(?array $utilityMeter = null)
    {
        $this->utilityMeter = $utilityMeter;
        return $this;
    }
}

