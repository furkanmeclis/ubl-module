<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EnvironmentalEmissionType
 *
 *
 * XSD Type: EnvironmentalEmissionType
 */
class EnvironmentalEmissionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode
     */
    private $environmentalEmissionTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueMeasure $valueMeasure
     */
    private $valueMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmissionCalculationMethod[] $emissionCalculationMethod
     */
    private $emissionCalculationMethod = [
        
    ];

    /**
     * Gets as environmentalEmissionTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EnvironmentalEmissionTypeCode
     */
    public function getEnvironmentalEmissionTypeCode()
    {
        return $this->environmentalEmissionTypeCode;
    }

    /**
     * Sets a new environmentalEmissionTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode
     * @return self
     */
    public function setEnvironmentalEmissionTypeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\EnvironmentalEmissionTypeCode $environmentalEmissionTypeCode)
    {
        $this->environmentalEmissionTypeCode = $environmentalEmissionTypeCode;
        return $this;
    }

    /**
     * Gets as valueMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueMeasure
     */
    public function getValueMeasure()
    {
        return $this->valueMeasure;
    }

    /**
     * Sets a new valueMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueMeasure $valueMeasure
     * @return self
     */
    public function setValueMeasure(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueMeasure $valueMeasure)
    {
        $this->valueMeasure = $valueMeasure;
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
     * Adds as emissionCalculationMethod
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmissionCalculationMethod $emissionCalculationMethod
     */
    public function addToEmissionCalculationMethod(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmissionCalculationMethod $emissionCalculationMethod)
    {
        $this->emissionCalculationMethod[] = $emissionCalculationMethod;
        return $this;
    }

    /**
     * isset emissionCalculationMethod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmissionCalculationMethod($index)
    {
        return isset($this->emissionCalculationMethod[$index]);
    }

    /**
     * unset emissionCalculationMethod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmissionCalculationMethod($index)
    {
        unset($this->emissionCalculationMethod[$index]);
    }

    /**
     * Gets as emissionCalculationMethod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmissionCalculationMethod[]
     */
    public function getEmissionCalculationMethod()
    {
        return $this->emissionCalculationMethod;
    }

    /**
     * Sets a new emissionCalculationMethod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmissionCalculationMethod[] $emissionCalculationMethod
     * @return self
     */
    public function setEmissionCalculationMethod(?array $emissionCalculationMethod = null)
    {
        $this->emissionCalculationMethod = $emissionCalculationMethod;
        return $this;
    }
}

