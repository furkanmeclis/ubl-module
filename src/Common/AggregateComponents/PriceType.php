<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PriceType
 *
 *
 * XSD Type: PriceType
 */
class PriceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceAmount $priceAmount
     */
    private $priceAmount = null;

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
    public function setPriceAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceAmount $priceAmount)
    {
        $this->priceAmount = $priceAmount;
        return $this;
    }
}

