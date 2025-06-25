<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TaxSubtotalType
 *
 *
 * XSD Type: TaxSubtotalType
 */
class TaxSubtotalType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxableAmount $taxableAmount
     */
    private $taxableAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxAmount $taxAmount
     */
    private $taxAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationSequenceNumeric $calculationSequenceNumeric
     */
    private $calculationSequenceNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount
     */
    private $transactionCurrencyTaxAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent $percent
     */
    private $percent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BaseUnitMeasure $baseUnitMeasure
     */
    private $baseUnitMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerUnitAmount $perUnitAmount
     */
    private $perUnitAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * Gets as taxableAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxableAmount
     */
    public function getTaxableAmount()
    {
        return $this->taxableAmount;
    }

    /**
     * Sets a new taxableAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxableAmount $taxableAmount
     * @return self
     */
    public function setTaxableAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxableAmount $taxableAmount = null)
    {
        $this->taxableAmount = $taxableAmount;
        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxAmount
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxAmount $taxAmount
     * @return self
     */
    public function setTaxAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxAmount $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as calculationSequenceNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationSequenceNumeric
     */
    public function getCalculationSequenceNumeric()
    {
        return $this->calculationSequenceNumeric;
    }

    /**
     * Sets a new calculationSequenceNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationSequenceNumeric $calculationSequenceNumeric
     * @return self
     */
    public function setCalculationSequenceNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationSequenceNumeric $calculationSequenceNumeric = null)
    {
        $this->calculationSequenceNumeric = $calculationSequenceNumeric;
        return $this;
    }

    /**
     * Gets as transactionCurrencyTaxAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransactionCurrencyTaxAmount
     */
    public function getTransactionCurrencyTaxAmount()
    {
        return $this->transactionCurrencyTaxAmount;
    }

    /**
     * Sets a new transactionCurrencyTaxAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount
     * @return self
     */
    public function setTransactionCurrencyTaxAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransactionCurrencyTaxAmount $transactionCurrencyTaxAmount = null)
    {
        $this->transactionCurrencyTaxAmount = $transactionCurrencyTaxAmount;
        return $this;
    }

    /**
     * Gets as percent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent $percent
     * @return self
     */
    public function setPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent $percent = null)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as baseUnitMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BaseUnitMeasure
     */
    public function getBaseUnitMeasure()
    {
        return $this->baseUnitMeasure;
    }

    /**
     * Sets a new baseUnitMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BaseUnitMeasure $baseUnitMeasure
     * @return self
     */
    public function setBaseUnitMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BaseUnitMeasure $baseUnitMeasure = null)
    {
        $this->baseUnitMeasure = $baseUnitMeasure;
        return $this;
    }

    /**
     * Gets as perUnitAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerUnitAmount
     */
    public function getPerUnitAmount()
    {
        return $this->perUnitAmount;
    }

    /**
     * Sets a new perUnitAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerUnitAmount $perUnitAmount
     * @return self
     */
    public function setPerUnitAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PerUnitAmount $perUnitAmount = null)
    {
        $this->perUnitAmount = $perUnitAmount;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }
}

