<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TaxCategoryType
 *
 *
 * XSD Type: TaxCategoryType
 */
class TaxCategoryType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExemptionReasonCode $taxExemptionReasonCode
     */
    private $taxExemptionReasonCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExemptionReason $taxExemptionReason
     */
    private $taxExemptionReason = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as name
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as taxExemptionReasonCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExemptionReasonCode
     */
    public function getTaxExemptionReasonCode()
    {
        return $this->taxExemptionReasonCode;
    }

    /**
     * Sets a new taxExemptionReasonCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExemptionReasonCode $taxExemptionReasonCode
     * @return self
     */
    public function setTaxExemptionReasonCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExemptionReasonCode $taxExemptionReasonCode = null)
    {
        $this->taxExemptionReasonCode = $taxExemptionReasonCode;
        return $this;
    }

    /**
     * Gets as taxExemptionReason
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExemptionReason
     */
    public function getTaxExemptionReason()
    {
        return $this->taxExemptionReason;
    }

    /**
     * Sets a new taxExemptionReason
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExemptionReason $taxExemptionReason
     * @return self
     */
    public function setTaxExemptionReason(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExemptionReason $taxExemptionReason = null)
    {
        $this->taxExemptionReason = $taxExemptionReason;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }
}

