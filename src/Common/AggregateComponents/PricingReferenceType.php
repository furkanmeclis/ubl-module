<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PricingReferenceType
 *
 *
 * XSD Type: PricingReferenceType
 */
class PricingReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginalItemLocationQuantity $originalItemLocationQuantity
     */
    private $originalItemLocationQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AlternativeConditionPrice[] $alternativeConditionPrice
     */
    private $alternativeConditionPrice = [
        
    ];

    /**
     * Gets as originalItemLocationQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginalItemLocationQuantity
     */
    public function getOriginalItemLocationQuantity()
    {
        return $this->originalItemLocationQuantity;
    }

    /**
     * Sets a new originalItemLocationQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginalItemLocationQuantity $originalItemLocationQuantity
     * @return self
     */
    public function setOriginalItemLocationQuantity(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginalItemLocationQuantity $originalItemLocationQuantity = null)
    {
        $this->originalItemLocationQuantity = $originalItemLocationQuantity;
        return $this;
    }

    /**
     * Adds as alternativeConditionPrice
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AlternativeConditionPrice $alternativeConditionPrice
     */
    public function addToAlternativeConditionPrice(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AlternativeConditionPrice $alternativeConditionPrice)
    {
        $this->alternativeConditionPrice[] = $alternativeConditionPrice;
        return $this;
    }

    /**
     * isset alternativeConditionPrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternativeConditionPrice($index)
    {
        return isset($this->alternativeConditionPrice[$index]);
    }

    /**
     * unset alternativeConditionPrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternativeConditionPrice($index)
    {
        unset($this->alternativeConditionPrice[$index]);
    }

    /**
     * Gets as alternativeConditionPrice
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AlternativeConditionPrice[]
     */
    public function getAlternativeConditionPrice()
    {
        return $this->alternativeConditionPrice;
    }

    /**
     * Sets a new alternativeConditionPrice
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AlternativeConditionPrice[] $alternativeConditionPrice
     * @return self
     */
    public function setAlternativeConditionPrice(?array $alternativeConditionPrice = null)
    {
        $this->alternativeConditionPrice = $alternativeConditionPrice;
        return $this;
    }
}

