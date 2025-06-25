<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ConsumptionHistoryType
 *
 *
 * XSD Type: ConsumptionHistoryType
 */
class ConsumptionHistoryType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterNumber $meterNumber
     */
    private $meterNumber = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionLevelCode $consumptionLevelCode
     */
    private $consumptionLevelCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionLevel $consumptionLevel
     */
    private $consumptionLevel = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     */
    private $period = null;

    /**
     * Gets as meterNumber
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterNumber
     */
    public function getMeterNumber()
    {
        return $this->meterNumber;
    }

    /**
     * Sets a new meterNumber
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterNumber $meterNumber
     * @return self
     */
    public function setMeterNumber(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterNumber $meterNumber = null)
    {
        $this->meterNumber = $meterNumber;
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
    public function setQuantity(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

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
    public function setAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as consumptionLevelCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionLevelCode
     */
    public function getConsumptionLevelCode()
    {
        return $this->consumptionLevelCode;
    }

    /**
     * Sets a new consumptionLevelCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionLevelCode $consumptionLevelCode
     * @return self
     */
    public function setConsumptionLevelCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionLevelCode $consumptionLevelCode = null)
    {
        $this->consumptionLevelCode = $consumptionLevelCode;
        return $this;
    }

    /**
     * Gets as consumptionLevel
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionLevel
     */
    public function getConsumptionLevel()
    {
        return $this->consumptionLevel;
    }

    /**
     * Sets a new consumptionLevel
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionLevel $consumptionLevel
     * @return self
     */
    public function setConsumptionLevel(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionLevel $consumptionLevel = null)
    {
        $this->consumptionLevel = $consumptionLevel;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
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

