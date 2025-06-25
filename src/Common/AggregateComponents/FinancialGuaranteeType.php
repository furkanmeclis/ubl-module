<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing FinancialGuaranteeType
 *
 *
 * XSD Type: FinancialGuaranteeType
 */
class FinancialGuaranteeType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\GuaranteeTypeCode $guaranteeTypeCode
     */
    private $guaranteeTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LiabilityAmount $liabilityAmount
     */
    private $liabilityAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AmountRate $amountRate
     */
    private $amountRate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConstitutionPeriod $constitutionPeriod
     */
    private $constitutionPeriod = null;

    /**
     * Gets as guaranteeTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\GuaranteeTypeCode
     */
    public function getGuaranteeTypeCode()
    {
        return $this->guaranteeTypeCode;
    }

    /**
     * Sets a new guaranteeTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\GuaranteeTypeCode $guaranteeTypeCode
     * @return self
     */
    public function setGuaranteeTypeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\GuaranteeTypeCode $guaranteeTypeCode)
    {
        $this->guaranteeTypeCode = $guaranteeTypeCode;
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
     * Gets as liabilityAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LiabilityAmount
     */
    public function getLiabilityAmount()
    {
        return $this->liabilityAmount;
    }

    /**
     * Sets a new liabilityAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LiabilityAmount $liabilityAmount
     * @return self
     */
    public function setLiabilityAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LiabilityAmount $liabilityAmount = null)
    {
        $this->liabilityAmount = $liabilityAmount;
        return $this;
    }

    /**
     * Gets as amountRate
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AmountRate
     */
    public function getAmountRate()
    {
        return $this->amountRate;
    }

    /**
     * Sets a new amountRate
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AmountRate $amountRate
     * @return self
     */
    public function setAmountRate(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AmountRate $amountRate = null)
    {
        $this->amountRate = $amountRate;
        return $this;
    }

    /**
     * Gets as constitutionPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConstitutionPeriod
     */
    public function getConstitutionPeriod()
    {
        return $this->constitutionPeriod;
    }

    /**
     * Sets a new constitutionPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConstitutionPeriod $constitutionPeriod
     * @return self
     */
    public function setConstitutionPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConstitutionPeriod $constitutionPeriod = null)
    {
        $this->constitutionPeriod = $constitutionPeriod;
        return $this;
    }
}

