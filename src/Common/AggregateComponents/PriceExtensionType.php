<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PriceExtensionType
 *
 *
 * XSD Type: PriceExtensionType
 */
class PriceExtensionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

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
    public function setAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }
}

