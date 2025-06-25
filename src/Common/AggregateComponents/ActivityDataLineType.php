<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ActivityDataLineType
 *
 *
 * XSD Type: ActivityDataLineType
 */
class ActivityDataLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityPeriod $activityPeriod
     */
    private $activityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityOriginLocation $activityOriginLocation
     */
    private $activityOriginLocation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityFinalLocation $activityFinalLocation
     */
    private $activityFinalLocation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem[] $salesItem
     */
    private $salesItem = [
        
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
     * Gets as supplyChainActivityTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCode()
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * Sets a new supplyChainActivityTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode)
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty = null)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as activityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityPeriod
     */
    public function getActivityPeriod()
    {
        return $this->activityPeriod;
    }

    /**
     * Sets a new activityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityPeriod $activityPeriod
     * @return self
     */
    public function setActivityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityPeriod $activityPeriod = null)
    {
        $this->activityPeriod = $activityPeriod;
        return $this;
    }

    /**
     * Gets as activityOriginLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityOriginLocation
     */
    public function getActivityOriginLocation()
    {
        return $this->activityOriginLocation;
    }

    /**
     * Sets a new activityOriginLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityOriginLocation $activityOriginLocation
     * @return self
     */
    public function setActivityOriginLocation(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityOriginLocation $activityOriginLocation)
    {
        $this->activityOriginLocation = $activityOriginLocation;
        return $this;
    }

    /**
     * Gets as activityFinalLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityFinalLocation
     */
    public function getActivityFinalLocation()
    {
        return $this->activityFinalLocation;
    }

    /**
     * Sets a new activityFinalLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityFinalLocation $activityFinalLocation
     * @return self
     */
    public function setActivityFinalLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityFinalLocation $activityFinalLocation = null)
    {
        $this->activityFinalLocation = $activityFinalLocation;
        return $this;
    }

    /**
     * Adds as salesItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem $salesItem
     */
    public function addToSalesItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem $salesItem)
    {
        $this->salesItem[] = $salesItem;
        return $this;
    }

    /**
     * isset salesItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesItem($index)
    {
        return isset($this->salesItem[$index]);
    }

    /**
     * unset salesItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesItem($index)
    {
        unset($this->salesItem[$index]);
    }

    /**
     * Gets as salesItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem[]
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem[] $salesItem
     * @return self
     */
    public function setSalesItem(array $salesItem)
    {
        $this->salesItem = $salesItem;
        return $this;
    }
}

