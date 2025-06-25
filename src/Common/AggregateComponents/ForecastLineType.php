<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ForecastLineType
 *
 *
 * XSD Type: ForecastLineType
 */
class ForecastLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var bool $frozenDocumentIndicator
     */
    private $frozenDocumentIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastPeriod $forecastPeriod
     */
    private $forecastPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem $salesItem
     */
    private $salesItem = null;

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
     * Adds as note
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note
     */
    public function addToNote(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as frozenDocumentIndicator
     *
     * @return bool
     */
    public function getFrozenDocumentIndicator()
    {
        return $this->frozenDocumentIndicator;
    }

    /**
     * Sets a new frozenDocumentIndicator
     *
     * @param bool $frozenDocumentIndicator
     * @return self
     */
    public function setFrozenDocumentIndicator($frozenDocumentIndicator)
    {
        $this->frozenDocumentIndicator = $frozenDocumentIndicator;
        return $this;
    }

    /**
     * Gets as forecastTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode
     */
    public function getForecastTypeCode()
    {
        return $this->forecastTypeCode;
    }

    /**
     * Sets a new forecastTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode $forecastTypeCode)
    {
        $this->forecastTypeCode = $forecastTypeCode;
        return $this;
    }

    /**
     * Gets as forecastPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastPeriod
     */
    public function getForecastPeriod()
    {
        return $this->forecastPeriod;
    }

    /**
     * Sets a new forecastPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastPeriod $forecastPeriod
     * @return self
     */
    public function setForecastPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastPeriod $forecastPeriod = null)
    {
        $this->forecastPeriod = $forecastPeriod;
        return $this;
    }

    /**
     * Gets as salesItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem $salesItem
     * @return self
     */
    public function setSalesItem(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem $salesItem = null)
    {
        $this->salesItem = $salesItem;
        return $this;
    }
}

