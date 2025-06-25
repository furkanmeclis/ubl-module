<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ItemComparisonType
 *
 *
 * XSD Type: ItemComparisonType
 */
class ItemComparisonType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * Gets as priceAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceAmount
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * Sets a new priceAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceAmount $priceAmount
     * @return self
     */
    public function setPriceAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceAmount $priceAmount = null)
    {
        $this->priceAmount = $priceAmount;
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
}

