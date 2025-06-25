<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PriceListType
 *
 *
 * XSD Type: PriceListType
 */
class PriceListType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusCode $statusCode
     */
    private $statusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreviousPriceList $previousPriceList
     */
    private $previousPriceList = null;

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
     * Gets as statusCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusCode $statusCode
     * @return self
     */
    public function setStatusCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusCode $statusCode = null)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?array $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as previousPriceList
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreviousPriceList
     */
    public function getPreviousPriceList()
    {
        return $this->previousPriceList;
    }

    /**
     * Sets a new previousPriceList
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreviousPriceList $previousPriceList
     * @return self
     */
    public function setPreviousPriceList(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreviousPriceList $previousPriceList = null)
    {
        $this->previousPriceList = $previousPriceList;
        return $this;
    }
}

