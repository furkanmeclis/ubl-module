<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing RetailPlannedImpactType
 *
 *
 * XSD Type: RetailPlannedImpactType
 */
class RetailPlannedImpactType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastPurposeCode $forecastPurposeCode
     */
    private $forecastPurposeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     */
    private $period = null;

    /**
     * Gets as amount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     * @return self
     */
    public function setAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as forecastPurposeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastPurposeCode
     */
    public function getForecastPurposeCode()
    {
        return $this->forecastPurposeCode;
    }

    /**
     * Sets a new forecastPurposeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastPurposeCode $forecastPurposeCode
     * @return self
     */
    public function setForecastPurposeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastPurposeCode $forecastPurposeCode)
    {
        $this->forecastPurposeCode = $forecastPurposeCode;
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
     * Gets as period
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }
}

