<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing UnstructuredPriceType
 *
 *
 * XSD Type: UnstructuredPriceType
 */
class UnstructuredPriceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeAmount $timeAmount
     */
    private $timeAmount = null;

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
     * Gets as timeAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeAmount
     */
    public function getTimeAmount()
    {
        return $this->timeAmount;
    }

    /**
     * Sets a new timeAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeAmount $timeAmount
     * @return self
     */
    public function setTimeAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeAmount $timeAmount = null)
    {
        $this->timeAmount = $timeAmount;
        return $this;
    }
}

