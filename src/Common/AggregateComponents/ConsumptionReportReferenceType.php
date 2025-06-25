<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ConsumptionReportReferenceType
 *
 *
 * XSD Type: ConsumptionReportReferenceType
 */
class ConsumptionReportReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionReportID $consumptionReportID
     */
    private $consumptionReportID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalConsumedQuantity $totalConsumedQuantity
     */
    private $totalConsumedQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     */
    private $period = null;

    /**
     * Gets as consumptionReportID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionReportID
     */
    public function getConsumptionReportID()
    {
        return $this->consumptionReportID;
    }

    /**
     * Sets a new consumptionReportID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionReportID $consumptionReportID
     * @return self
     */
    public function setConsumptionReportID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionReportID $consumptionReportID)
    {
        $this->consumptionReportID = $consumptionReportID;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType $consumptionType = null)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode $consumptionTypeCode = null)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
        return $this;
    }

    /**
     * Gets as totalConsumedQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalConsumedQuantity
     */
    public function getTotalConsumedQuantity()
    {
        return $this->totalConsumedQuantity;
    }

    /**
     * Sets a new totalConsumedQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalConsumedQuantity $totalConsumedQuantity
     * @return self
     */
    public function setTotalConsumedQuantity(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalConsumedQuantity $totalConsumedQuantity)
    {
        $this->totalConsumedQuantity = $totalConsumedQuantity;
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
    public function setPeriod(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period)
    {
        $this->period = $period;
        return $this;
    }
}

