<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DutyType
 *
 *
 * XSD Type: DutyType
 */
class DutyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Duty $duty
     */
    private $duty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DutyCode $dutyCode
     */
    private $dutyCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory $taxCategory
     */
    private $taxCategory = null;

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
     * Gets as duty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Duty
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Sets a new duty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Duty $duty
     * @return self
     */
    public function setDuty(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Duty $duty = null)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * Gets as dutyCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DutyCode
     */
    public function getDutyCode()
    {
        return $this->dutyCode;
    }

    /**
     * Sets a new dutyCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DutyCode $dutyCode
     * @return self
     */
    public function setDutyCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DutyCode $dutyCode = null)
    {
        $this->dutyCode = $dutyCode;
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
    public function setTaxCategory(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory $taxCategory = null)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }
}

