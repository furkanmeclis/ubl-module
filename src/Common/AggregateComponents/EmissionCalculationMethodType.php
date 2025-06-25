<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EmissionCalculationMethodType
 *
 *
 * XSD Type: EmissionCalculationMethodType
 */
class EmissionCalculationMethodType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationMethodCode $calculationMethodCode
     */
    private $calculationMethodCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FullnessIndicationCode $fullnessIndicationCode
     */
    private $fullnessIndicationCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementFromLocation $measurementFromLocation
     */
    private $measurementFromLocation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementToLocation $measurementToLocation
     */
    private $measurementToLocation = null;

    /**
     * Gets as calculationMethodCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationMethodCode
     */
    public function getCalculationMethodCode()
    {
        return $this->calculationMethodCode;
    }

    /**
     * Sets a new calculationMethodCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationMethodCode $calculationMethodCode
     * @return self
     */
    public function setCalculationMethodCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationMethodCode $calculationMethodCode = null)
    {
        $this->calculationMethodCode = $calculationMethodCode;
        return $this;
    }

    /**
     * Gets as fullnessIndicationCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FullnessIndicationCode
     */
    public function getFullnessIndicationCode()
    {
        return $this->fullnessIndicationCode;
    }

    /**
     * Sets a new fullnessIndicationCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FullnessIndicationCode $fullnessIndicationCode
     * @return self
     */
    public function setFullnessIndicationCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\FullnessIndicationCode $fullnessIndicationCode = null)
    {
        $this->fullnessIndicationCode = $fullnessIndicationCode;
        return $this;
    }

    /**
     * Gets as measurementFromLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementFromLocation
     */
    public function getMeasurementFromLocation()
    {
        return $this->measurementFromLocation;
    }

    /**
     * Sets a new measurementFromLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementFromLocation $measurementFromLocation
     * @return self
     */
    public function setMeasurementFromLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementFromLocation $measurementFromLocation = null)
    {
        $this->measurementFromLocation = $measurementFromLocation;
        return $this;
    }

    /**
     * Gets as measurementToLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementToLocation
     */
    public function getMeasurementToLocation()
    {
        return $this->measurementToLocation;
    }

    /**
     * Sets a new measurementToLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementToLocation $measurementToLocation
     * @return self
     */
    public function setMeasurementToLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementToLocation $measurementToLocation = null)
    {
        $this->measurementToLocation = $measurementToLocation;
        return $this;
    }
}

