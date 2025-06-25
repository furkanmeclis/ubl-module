<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ExchangeRateType
 *
 *
 * XSD Type: ExchangeRateType
 */
class ExchangeRateType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SourceCurrencyCode $sourceCurrencyCode
     */
    private $sourceCurrencyCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetCurrencyCode $targetCurrencyCode
     */
    private $targetCurrencyCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationRate $calculationRate
     */
    private $calculationRate = null;

    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as sourceCurrencyCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SourceCurrencyCode
     */
    public function getSourceCurrencyCode()
    {
        return $this->sourceCurrencyCode;
    }

    /**
     * Sets a new sourceCurrencyCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SourceCurrencyCode $sourceCurrencyCode
     * @return self
     */
    public function setSourceCurrencyCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\SourceCurrencyCode $sourceCurrencyCode)
    {
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        return $this;
    }

    /**
     * Gets as targetCurrencyCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetCurrencyCode
     */
    public function getTargetCurrencyCode()
    {
        return $this->targetCurrencyCode;
    }

    /**
     * Sets a new targetCurrencyCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetCurrencyCode $targetCurrencyCode
     * @return self
     */
    public function setTargetCurrencyCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetCurrencyCode $targetCurrencyCode)
    {
        $this->targetCurrencyCode = $targetCurrencyCode;
        return $this;
    }

    /**
     * Gets as calculationRate
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationRate
     */
    public function getCalculationRate()
    {
        return $this->calculationRate;
    }

    /**
     * Sets a new calculationRate
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationRate $calculationRate
     * @return self
     */
    public function setCalculationRate(\FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationRate $calculationRate)
    {
        $this->calculationRate = $calculationRate;
        return $this;
    }

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }
}

