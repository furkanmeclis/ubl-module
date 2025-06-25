<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing FinancialAccountType
 *
 *
 * XSD Type: FinancialAccountType
 */
class FinancialAccountType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrencyCode $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentNote $paymentNote
     */
    private $paymentNote = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialInstitutionBranch $financialInstitutionBranch
     */
    private $financialInstitutionBranch = null;

    /**
     * Gets as iD
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     * @return self
     */
    public function setID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrencyCode $currencyCode
     * @return self
     */
    public function setCurrencyCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrencyCode $currencyCode = null)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as paymentNote
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentNote
     */
    public function getPaymentNote()
    {
        return $this->paymentNote;
    }

    /**
     * Sets a new paymentNote
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentNote $paymentNote
     * @return self
     */
    public function setPaymentNote(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentNote $paymentNote = null)
    {
        $this->paymentNote = $paymentNote;
        return $this;
    }

    /**
     * Gets as financialInstitutionBranch
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialInstitutionBranch
     */
    public function getFinancialInstitutionBranch()
    {
        return $this->financialInstitutionBranch;
    }

    /**
     * Sets a new financialInstitutionBranch
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialInstitutionBranch $financialInstitutionBranch
     * @return self
     */
    public function setFinancialInstitutionBranch(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialInstitutionBranch $financialInstitutionBranch = null)
    {
        $this->financialInstitutionBranch = $financialInstitutionBranch;
        return $this;
    }
}

