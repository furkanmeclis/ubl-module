<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ConsumptionCorrectionType
 *
 *
 * XSD Type: ConsumptionCorrectionType
 */
class ConsumptionCorrectionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionType $correctionType
     */
    private $correctionType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionTypeCode $correctionTypeCode
     */
    private $correctionTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterNumber $meterNumber
     */
    private $meterNumber = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\GasPressureQuantity $gasPressureQuantity
     */
    private $gasPressureQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity
     */
    private $actualTemperatureReductionQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity
     */
    private $normalTemperatureReductionQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity
     */
    private $differenceTemperatureReductionQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionUnitAmount $correctionUnitAmount
     */
    private $correctionUnitAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionEnergyQuantity $consumptionEnergyQuantity
     */
    private $consumptionEnergyQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionWaterQuantity $consumptionWaterQuantity
     */
    private $consumptionWaterQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionAmount $correctionAmount
     */
    private $correctionAmount = null;

    /**
     * Gets as correctionType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionType
     */
    public function getCorrectionType()
    {
        return $this->correctionType;
    }

    /**
     * Sets a new correctionType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionType $correctionType
     * @return self
     */
    public function setCorrectionType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionType $correctionType = null)
    {
        $this->correctionType = $correctionType;
        return $this;
    }

    /**
     * Gets as correctionTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionTypeCode
     */
    public function getCorrectionTypeCode()
    {
        return $this->correctionTypeCode;
    }

    /**
     * Sets a new correctionTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionTypeCode $correctionTypeCode
     * @return self
     */
    public function setCorrectionTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionTypeCode $correctionTypeCode = null)
    {
        $this->correctionTypeCode = $correctionTypeCode;
        return $this;
    }

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
     * Gets as gasPressureQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\GasPressureQuantity
     */
    public function getGasPressureQuantity()
    {
        return $this->gasPressureQuantity;
    }

    /**
     * Sets a new gasPressureQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\GasPressureQuantity $gasPressureQuantity
     * @return self
     */
    public function setGasPressureQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\GasPressureQuantity $gasPressureQuantity = null)
    {
        $this->gasPressureQuantity = $gasPressureQuantity;
        return $this;
    }

    /**
     * Gets as actualTemperatureReductionQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActualTemperatureReductionQuantity
     */
    public function getActualTemperatureReductionQuantity()
    {
        return $this->actualTemperatureReductionQuantity;
    }

    /**
     * Sets a new actualTemperatureReductionQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity
     * @return self
     */
    public function setActualTemperatureReductionQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ActualTemperatureReductionQuantity $actualTemperatureReductionQuantity = null)
    {
        $this->actualTemperatureReductionQuantity = $actualTemperatureReductionQuantity;
        return $this;
    }

    /**
     * Gets as normalTemperatureReductionQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NormalTemperatureReductionQuantity
     */
    public function getNormalTemperatureReductionQuantity()
    {
        return $this->normalTemperatureReductionQuantity;
    }

    /**
     * Sets a new normalTemperatureReductionQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity
     * @return self
     */
    public function setNormalTemperatureReductionQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\NormalTemperatureReductionQuantity $normalTemperatureReductionQuantity = null)
    {
        $this->normalTemperatureReductionQuantity = $normalTemperatureReductionQuantity;
        return $this;
    }

    /**
     * Gets as differenceTemperatureReductionQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DifferenceTemperatureReductionQuantity
     */
    public function getDifferenceTemperatureReductionQuantity()
    {
        return $this->differenceTemperatureReductionQuantity;
    }

    /**
     * Sets a new differenceTemperatureReductionQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity
     * @return self
     */
    public function setDifferenceTemperatureReductionQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DifferenceTemperatureReductionQuantity $differenceTemperatureReductionQuantity = null)
    {
        $this->differenceTemperatureReductionQuantity = $differenceTemperatureReductionQuantity;
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
     * Gets as correctionUnitAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionUnitAmount
     */
    public function getCorrectionUnitAmount()
    {
        return $this->correctionUnitAmount;
    }

    /**
     * Sets a new correctionUnitAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionUnitAmount $correctionUnitAmount
     * @return self
     */
    public function setCorrectionUnitAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionUnitAmount $correctionUnitAmount = null)
    {
        $this->correctionUnitAmount = $correctionUnitAmount;
        return $this;
    }

    /**
     * Gets as consumptionEnergyQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionEnergyQuantity
     */
    public function getConsumptionEnergyQuantity()
    {
        return $this->consumptionEnergyQuantity;
    }

    /**
     * Sets a new consumptionEnergyQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionEnergyQuantity $consumptionEnergyQuantity
     * @return self
     */
    public function setConsumptionEnergyQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionEnergyQuantity $consumptionEnergyQuantity = null)
    {
        $this->consumptionEnergyQuantity = $consumptionEnergyQuantity;
        return $this;
    }

    /**
     * Gets as consumptionWaterQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionWaterQuantity
     */
    public function getConsumptionWaterQuantity()
    {
        return $this->consumptionWaterQuantity;
    }

    /**
     * Sets a new consumptionWaterQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionWaterQuantity $consumptionWaterQuantity
     * @return self
     */
    public function setConsumptionWaterQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionWaterQuantity $consumptionWaterQuantity = null)
    {
        $this->consumptionWaterQuantity = $consumptionWaterQuantity;
        return $this;
    }

    /**
     * Gets as correctionAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionAmount
     */
    public function getCorrectionAmount()
    {
        return $this->correctionAmount;
    }

    /**
     * Sets a new correctionAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionAmount $correctionAmount
     * @return self
     */
    public function setCorrectionAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CorrectionAmount $correctionAmount = null)
    {
        $this->correctionAmount = $correctionAmount;
        return $this;
    }
}

