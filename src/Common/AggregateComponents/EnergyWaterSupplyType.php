<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EnergyWaterSupplyType
 *
 *
 * XSD Type: EnergyWaterSupplyType
 */
class EnergyWaterSupplyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReport[] $consumptionReport
     */
    private $consumptionReport = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyTaxReport[] $energyTaxReport
     */
    private $energyTaxReport = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionAverage[] $consumptionAverage
     */
    private $consumptionAverage = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyWaterConsumptionCorrection[] $energyWaterConsumptionCorrection
     */
    private $energyWaterConsumptionCorrection = [
        
    ];

    /**
     * Adds as consumptionReport
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReport $consumptionReport
     */
    public function addToConsumptionReport(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReport $consumptionReport)
    {
        $this->consumptionReport[] = $consumptionReport;
        return $this;
    }

    /**
     * isset consumptionReport
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionReport($index)
    {
        return isset($this->consumptionReport[$index]);
    }

    /**
     * unset consumptionReport
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionReport($index)
    {
        unset($this->consumptionReport[$index]);
    }

    /**
     * Gets as consumptionReport
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReport[]
     */
    public function getConsumptionReport()
    {
        return $this->consumptionReport;
    }

    /**
     * Sets a new consumptionReport
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReport[] $consumptionReport
     * @return self
     */
    public function setConsumptionReport(?array $consumptionReport = null)
    {
        $this->consumptionReport = $consumptionReport;
        return $this;
    }

    /**
     * Adds as energyTaxReport
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyTaxReport $energyTaxReport
     */
    public function addToEnergyTaxReport(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyTaxReport $energyTaxReport)
    {
        $this->energyTaxReport[] = $energyTaxReport;
        return $this;
    }

    /**
     * isset energyTaxReport
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnergyTaxReport($index)
    {
        return isset($this->energyTaxReport[$index]);
    }

    /**
     * unset energyTaxReport
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnergyTaxReport($index)
    {
        unset($this->energyTaxReport[$index]);
    }

    /**
     * Gets as energyTaxReport
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyTaxReport[]
     */
    public function getEnergyTaxReport()
    {
        return $this->energyTaxReport;
    }

    /**
     * Sets a new energyTaxReport
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyTaxReport[] $energyTaxReport
     * @return self
     */
    public function setEnergyTaxReport(?array $energyTaxReport = null)
    {
        $this->energyTaxReport = $energyTaxReport;
        return $this;
    }

    /**
     * Adds as consumptionAverage
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionAverage $consumptionAverage
     */
    public function addToConsumptionAverage(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionAverage $consumptionAverage)
    {
        $this->consumptionAverage[] = $consumptionAverage;
        return $this;
    }

    /**
     * isset consumptionAverage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionAverage($index)
    {
        return isset($this->consumptionAverage[$index]);
    }

    /**
     * unset consumptionAverage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionAverage($index)
    {
        unset($this->consumptionAverage[$index]);
    }

    /**
     * Gets as consumptionAverage
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionAverage[]
     */
    public function getConsumptionAverage()
    {
        return $this->consumptionAverage;
    }

    /**
     * Sets a new consumptionAverage
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionAverage[] $consumptionAverage
     * @return self
     */
    public function setConsumptionAverage(?array $consumptionAverage = null)
    {
        $this->consumptionAverage = $consumptionAverage;
        return $this;
    }

    /**
     * Adds as energyWaterConsumptionCorrection
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyWaterConsumptionCorrection $energyWaterConsumptionCorrection
     */
    public function addToEnergyWaterConsumptionCorrection(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyWaterConsumptionCorrection $energyWaterConsumptionCorrection)
    {
        $this->energyWaterConsumptionCorrection[] = $energyWaterConsumptionCorrection;
        return $this;
    }

    /**
     * isset energyWaterConsumptionCorrection
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnergyWaterConsumptionCorrection($index)
    {
        return isset($this->energyWaterConsumptionCorrection[$index]);
    }

    /**
     * unset energyWaterConsumptionCorrection
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnergyWaterConsumptionCorrection($index)
    {
        unset($this->energyWaterConsumptionCorrection[$index]);
    }

    /**
     * Gets as energyWaterConsumptionCorrection
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyWaterConsumptionCorrection[]
     */
    public function getEnergyWaterConsumptionCorrection()
    {
        return $this->energyWaterConsumptionCorrection;
    }

    /**
     * Sets a new energyWaterConsumptionCorrection
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyWaterConsumptionCorrection[] $energyWaterConsumptionCorrection
     * @return self
     */
    public function setEnergyWaterConsumptionCorrection(?array $energyWaterConsumptionCorrection = null)
    {
        $this->energyWaterConsumptionCorrection = $energyWaterConsumptionCorrection;
        return $this;
    }
}

