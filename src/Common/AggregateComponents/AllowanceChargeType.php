<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing AllowanceChargeType
 *
 *
 * XSD Type: AllowanceChargeType
 */
class AllowanceChargeType
{
    /**
     * @var bool $chargeIndicator
     */
    private $chargeIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AllowanceChargeReason $allowanceChargeReason
     */
    private $allowanceChargeReason = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MultiplierFactorNumeric $multiplierFactorNumeric
     */
    private $multiplierFactorNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BaseAmount $baseAmount
     */
    private $baseAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerUnitAmount $perUnitAmount
     */
    private $perUnitAmount = null;

    /**
     * Gets as chargeIndicator
     *
     * @return bool
     */
    public function getChargeIndicator()
    {
        return $this->chargeIndicator;
    }

    /**
     * Sets a new chargeIndicator
     *
     * @param bool $chargeIndicator
     * @return self
     */
    public function setChargeIndicator($chargeIndicator)
    {
        $this->chargeIndicator = $chargeIndicator;
        return $this;
    }

    /**
     * Gets as allowanceChargeReason
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AllowanceChargeReason
     */
    public function getAllowanceChargeReason()
    {
        return $this->allowanceChargeReason;
    }

    /**
     * Sets a new allowanceChargeReason
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AllowanceChargeReason $allowanceChargeReason
     * @return self
     */
    public function setAllowanceChargeReason(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AllowanceChargeReason $allowanceChargeReason = null)
    {
        $this->allowanceChargeReason = $allowanceChargeReason;
        return $this;
    }

    /**
     * Gets as multiplierFactorNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MultiplierFactorNumeric
     */
    public function getMultiplierFactorNumeric()
    {
        return $this->multiplierFactorNumeric;
    }

    /**
     * Sets a new multiplierFactorNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MultiplierFactorNumeric $multiplierFactorNumeric
     * @return self
     */
    public function setMultiplierFactorNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MultiplierFactorNumeric $multiplierFactorNumeric = null)
    {
        $this->multiplierFactorNumeric = $multiplierFactorNumeric;
        return $this;
    }

    /**
     * Gets as sequenceNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric = null)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

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
     * Gets as baseAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BaseAmount
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * Sets a new baseAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BaseAmount $baseAmount
     * @return self
     */
    public function setBaseAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BaseAmount $baseAmount = null)
    {
        $this->baseAmount = $baseAmount;
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
}

