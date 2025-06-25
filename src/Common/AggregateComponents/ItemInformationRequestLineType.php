<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ItemInformationRequestLineType
 *
 *
 * XSD Type: ItemInformationRequestLineType
 */
class ItemInformationRequestLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeFrequencyCode $timeFrequencyCode
     */
    private $timeFrequencyCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerformanceMetricTypeCode $performanceMetricTypeCode
     */
    private $performanceMetricTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period[] $period
     */
    private $period = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SalesItem[] $salesItem
     */
    private $salesItem = [
        
    ];

    /**
     * Gets as timeFrequencyCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeFrequencyCode
     */
    public function getTimeFrequencyCode()
    {
        return $this->timeFrequencyCode;
    }

    /**
     * Sets a new timeFrequencyCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeFrequencyCode $timeFrequencyCode
     * @return self
     */
    public function setTimeFrequencyCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeFrequencyCode $timeFrequencyCode = null)
    {
        $this->timeFrequencyCode = $timeFrequencyCode;
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
    public function setSupplyChainActivityTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode = null)
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;
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
    public function setForecastTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode $forecastTypeCode = null)
    {
        $this->forecastTypeCode = $forecastTypeCode;
        return $this;
    }

    /**
     * Gets as performanceMetricTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerformanceMetricTypeCode
     */
    public function getPerformanceMetricTypeCode()
    {
        return $this->performanceMetricTypeCode;
    }

    /**
     * Sets a new performanceMetricTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerformanceMetricTypeCode $performanceMetricTypeCode
     * @return self
     */
    public function setPerformanceMetricTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PerformanceMetricTypeCode $performanceMetricTypeCode = null)
    {
        $this->performanceMetricTypeCode = $performanceMetricTypeCode;
        return $this;
    }

    /**
     * Adds as period
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     */
    public function addToPeriod(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period[] $period
     * @return self
     */
    public function setPeriod(array $period)
    {
        $this->period = $period;
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

