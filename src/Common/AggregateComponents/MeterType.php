<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing MeterType
 *
 *
 * XSD Type: MeterType
 */
class MeterType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterNumber $meterNumber
     */
    private $meterNumber = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterName $meterName
     */
    private $meterName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterConstant $meterConstant
     */
    private $meterConstant = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterConstantCode $meterConstantCode
     */
    private $meterConstantCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalDeliveredQuantity $totalDeliveredQuantity
     */
    private $totalDeliveredQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterReading[] $meterReading
     */
    private $meterReading = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterProperty[] $meterProperty
     */
    private $meterProperty = [
        
    ];

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
     * Gets as meterName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterName
     */
    public function getMeterName()
    {
        return $this->meterName;
    }

    /**
     * Sets a new meterName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterName $meterName
     * @return self
     */
    public function setMeterName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterName $meterName = null)
    {
        $this->meterName = $meterName;
        return $this;
    }

    /**
     * Gets as meterConstant
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterConstant
     */
    public function getMeterConstant()
    {
        return $this->meterConstant;
    }

    /**
     * Sets a new meterConstant
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterConstant $meterConstant
     * @return self
     */
    public function setMeterConstant(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterConstant $meterConstant = null)
    {
        $this->meterConstant = $meterConstant;
        return $this;
    }

    /**
     * Gets as meterConstantCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterConstantCode
     */
    public function getMeterConstantCode()
    {
        return $this->meterConstantCode;
    }

    /**
     * Sets a new meterConstantCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterConstantCode $meterConstantCode
     * @return self
     */
    public function setMeterConstantCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterConstantCode $meterConstantCode = null)
    {
        $this->meterConstantCode = $meterConstantCode;
        return $this;
    }

    /**
     * Gets as totalDeliveredQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalDeliveredQuantity
     */
    public function getTotalDeliveredQuantity()
    {
        return $this->totalDeliveredQuantity;
    }

    /**
     * Sets a new totalDeliveredQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalDeliveredQuantity $totalDeliveredQuantity
     * @return self
     */
    public function setTotalDeliveredQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalDeliveredQuantity $totalDeliveredQuantity = null)
    {
        $this->totalDeliveredQuantity = $totalDeliveredQuantity;
        return $this;
    }

    /**
     * Adds as meterReading
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterReading $meterReading
     */
    public function addToMeterReading(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterReading $meterReading)
    {
        $this->meterReading[] = $meterReading;
        return $this;
    }

    /**
     * isset meterReading
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeterReading($index)
    {
        return isset($this->meterReading[$index]);
    }

    /**
     * unset meterReading
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeterReading($index)
    {
        unset($this->meterReading[$index]);
    }

    /**
     * Gets as meterReading
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterReading[]
     */
    public function getMeterReading()
    {
        return $this->meterReading;
    }

    /**
     * Sets a new meterReading
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterReading[] $meterReading
     * @return self
     */
    public function setMeterReading(?array $meterReading = null)
    {
        $this->meterReading = $meterReading;
        return $this;
    }

    /**
     * Adds as meterProperty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterProperty $meterProperty
     */
    public function addToMeterProperty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterProperty $meterProperty)
    {
        $this->meterProperty[] = $meterProperty;
        return $this;
    }

    /**
     * isset meterProperty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeterProperty($index)
    {
        return isset($this->meterProperty[$index]);
    }

    /**
     * unset meterProperty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeterProperty($index)
    {
        unset($this->meterProperty[$index]);
    }

    /**
     * Gets as meterProperty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterProperty[]
     */
    public function getMeterProperty()
    {
        return $this->meterProperty;
    }

    /**
     * Sets a new meterProperty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeterProperty[] $meterProperty
     * @return self
     */
    public function setMeterProperty(?array $meterProperty = null)
    {
        $this->meterProperty = $meterProperty;
        return $this;
    }
}

