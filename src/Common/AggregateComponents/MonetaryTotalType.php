<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing MonetaryTotalType
 *
 *
 * XSD Type: MonetaryTotalType
 */
class MonetaryTotalType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExclusiveAmount $taxExclusiveAmount
     */
    private $taxExclusiveAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxInclusiveAmount $taxInclusiveAmount
     */
    private $taxInclusiveAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AllowanceTotalAmount $allowanceTotalAmount
     */
    private $allowanceTotalAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeTotalAmount $chargeTotalAmount
     */
    private $chargeTotalAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PayableRoundingAmount $payableRoundingAmount
     */
    private $payableRoundingAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PayableAmount $payableAmount
     */
    private $payableAmount = null;

    /**
     * Gets as lineExtensionAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as taxExclusiveAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExclusiveAmount
     */
    public function getTaxExclusiveAmount()
    {
        return $this->taxExclusiveAmount;
    }

    /**
     * Sets a new taxExclusiveAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExclusiveAmount $taxExclusiveAmount
     * @return self
     */
    public function setTaxExclusiveAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxExclusiveAmount $taxExclusiveAmount)
    {
        $this->taxExclusiveAmount = $taxExclusiveAmount;
        return $this;
    }

    /**
     * Gets as taxInclusiveAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxInclusiveAmount
     */
    public function getTaxInclusiveAmount()
    {
        return $this->taxInclusiveAmount;
    }

    /**
     * Sets a new taxInclusiveAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxInclusiveAmount $taxInclusiveAmount
     * @return self
     */
    public function setTaxInclusiveAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TaxInclusiveAmount $taxInclusiveAmount)
    {
        $this->taxInclusiveAmount = $taxInclusiveAmount;
        return $this;
    }

    /**
     * Gets as allowanceTotalAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AllowanceTotalAmount
     */
    public function getAllowanceTotalAmount()
    {
        return $this->allowanceTotalAmount;
    }

    /**
     * Sets a new allowanceTotalAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AllowanceTotalAmount $allowanceTotalAmount
     * @return self
     */
    public function setAllowanceTotalAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AllowanceTotalAmount $allowanceTotalAmount = null)
    {
        $this->allowanceTotalAmount = $allowanceTotalAmount;
        return $this;
    }

    /**
     * Gets as chargeTotalAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeTotalAmount
     */
    public function getChargeTotalAmount()
    {
        return $this->chargeTotalAmount;
    }

    /**
     * Sets a new chargeTotalAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeTotalAmount $chargeTotalAmount
     * @return self
     */
    public function setChargeTotalAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeTotalAmount $chargeTotalAmount = null)
    {
        $this->chargeTotalAmount = $chargeTotalAmount;
        return $this;
    }

    /**
     * Gets as payableRoundingAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PayableRoundingAmount
     */
    public function getPayableRoundingAmount()
    {
        return $this->payableRoundingAmount;
    }

    /**
     * Sets a new payableRoundingAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PayableRoundingAmount $payableRoundingAmount
     * @return self
     */
    public function setPayableRoundingAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PayableRoundingAmount $payableRoundingAmount = null)
    {
        $this->payableRoundingAmount = $payableRoundingAmount;
        return $this;
    }

    /**
     * Gets as payableAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PayableAmount
     */
    public function getPayableAmount()
    {
        return $this->payableAmount;
    }

    /**
     * Sets a new payableAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PayableAmount $payableAmount
     * @return self
     */
    public function setPayableAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PayableAmount $payableAmount)
    {
        $this->payableAmount = $payableAmount;
        return $this;
    }
}

