<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TaxTotalType
 *
 *
 * XSD Type: TaxTotalType
 */
class TaxTotalType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxAmount $taxAmount
     */
    private $taxAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxSubtotal[] $taxSubtotal
     */
    private $taxSubtotal = [
        
    ];

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
     * Adds as taxSubtotal
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxSubtotal $taxSubtotal
     */
    public function addToTaxSubtotal(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxSubtotal $taxSubtotal)
    {
        $this->taxSubtotal[] = $taxSubtotal;
        return $this;
    }

    /**
     * isset taxSubtotal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxSubtotal($index)
    {
        return isset($this->taxSubtotal[$index]);
    }

    /**
     * unset taxSubtotal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxSubtotal($index)
    {
        unset($this->taxSubtotal[$index]);
    }

    /**
     * Gets as taxSubtotal
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxSubtotal[]
     */
    public function getTaxSubtotal()
    {
        return $this->taxSubtotal;
    }

    /**
     * Sets a new taxSubtotal
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxSubtotal[] $taxSubtotal
     * @return self
     */
    public function setTaxSubtotal(array $taxSubtotal)
    {
        $this->taxSubtotal = $taxSubtotal;
        return $this;
    }
}

