<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EnergyTaxReportType
 *
 *
 * XSD Type: EnergyTaxReportType
 */
class EnergyTaxReportType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyAmount $taxEnergyAmount
     */
    private $taxEnergyAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     */
    private $taxEnergyOnAccountAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     */
    private $taxEnergyBalanceAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as taxEnergyAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyAmount
     */
    public function getTaxEnergyAmount()
    {
        return $this->taxEnergyAmount;
    }

    /**
     * Sets a new taxEnergyAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyAmount $taxEnergyAmount
     * @return self
     */
    public function setTaxEnergyAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyAmount $taxEnergyAmount = null)
    {
        $this->taxEnergyAmount = $taxEnergyAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyOnAccountAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyOnAccountAmount
     */
    public function getTaxEnergyOnAccountAmount()
    {
        return $this->taxEnergyOnAccountAmount;
    }

    /**
     * Sets a new taxEnergyOnAccountAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     * @return self
     */
    public function setTaxEnergyOnAccountAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount = null)
    {
        $this->taxEnergyOnAccountAmount = $taxEnergyOnAccountAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyBalanceAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyBalanceAmount
     */
    public function getTaxEnergyBalanceAmount()
    {
        return $this->taxEnergyBalanceAmount;
    }

    /**
     * Sets a new taxEnergyBalanceAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     * @return self
     */
    public function setTaxEnergyBalanceAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxEnergyBalanceAmount $taxEnergyBalanceAmount = null)
    {
        $this->taxEnergyBalanceAmount = $taxEnergyBalanceAmount;
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

