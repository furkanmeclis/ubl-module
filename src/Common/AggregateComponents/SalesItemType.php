<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing SalesItemType
 *
 *
 * XSD Type: SalesItemType
 */
class SalesItemType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityProperty[] $activityProperty
     */
    private $activityProperty = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxExclusivePrice[] $taxExclusivePrice
     */
    private $taxExclusivePrice = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxInclusivePrice[] $taxInclusivePrice
     */
    private $taxInclusivePrice = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

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
    public function setQuantity(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as activityProperty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityProperty $activityProperty
     */
    public function addToActivityProperty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityProperty $activityProperty)
    {
        $this->activityProperty[] = $activityProperty;
        return $this;
    }

    /**
     * isset activityProperty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActivityProperty($index)
    {
        return isset($this->activityProperty[$index]);
    }

    /**
     * unset activityProperty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActivityProperty($index)
    {
        unset($this->activityProperty[$index]);
    }

    /**
     * Gets as activityProperty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityProperty[]
     */
    public function getActivityProperty()
    {
        return $this->activityProperty;
    }

    /**
     * Sets a new activityProperty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActivityProperty[] $activityProperty
     * @return self
     */
    public function setActivityProperty(?array $activityProperty = null)
    {
        $this->activityProperty = $activityProperty;
        return $this;
    }

    /**
     * Adds as taxExclusivePrice
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxExclusivePrice $taxExclusivePrice
     */
    public function addToTaxExclusivePrice(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxExclusivePrice $taxExclusivePrice)
    {
        $this->taxExclusivePrice[] = $taxExclusivePrice;
        return $this;
    }

    /**
     * isset taxExclusivePrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxExclusivePrice($index)
    {
        return isset($this->taxExclusivePrice[$index]);
    }

    /**
     * unset taxExclusivePrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxExclusivePrice($index)
    {
        unset($this->taxExclusivePrice[$index]);
    }

    /**
     * Gets as taxExclusivePrice
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxExclusivePrice[]
     */
    public function getTaxExclusivePrice()
    {
        return $this->taxExclusivePrice;
    }

    /**
     * Sets a new taxExclusivePrice
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxExclusivePrice[] $taxExclusivePrice
     * @return self
     */
    public function setTaxExclusivePrice(?array $taxExclusivePrice = null)
    {
        $this->taxExclusivePrice = $taxExclusivePrice;
        return $this;
    }

    /**
     * Adds as taxInclusivePrice
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxInclusivePrice $taxInclusivePrice
     */
    public function addToTaxInclusivePrice(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxInclusivePrice $taxInclusivePrice)
    {
        $this->taxInclusivePrice[] = $taxInclusivePrice;
        return $this;
    }

    /**
     * isset taxInclusivePrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxInclusivePrice($index)
    {
        return isset($this->taxInclusivePrice[$index]);
    }

    /**
     * unset taxInclusivePrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxInclusivePrice($index)
    {
        unset($this->taxInclusivePrice[$index]);
    }

    /**
     * Gets as taxInclusivePrice
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxInclusivePrice[]
     */
    public function getTaxInclusivePrice()
    {
        return $this->taxInclusivePrice;
    }

    /**
     * Sets a new taxInclusivePrice
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxInclusivePrice[] $taxInclusivePrice
     * @return self
     */
    public function setTaxInclusivePrice(?array $taxInclusivePrice = null)
    {
        $this->taxInclusivePrice = $taxInclusivePrice;
        return $this;
    }

    /**
     * Gets as item
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item
     * @return self
     */
    public function setItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }
}

