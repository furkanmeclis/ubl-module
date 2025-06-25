<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PaymentMandateType
 *
 *
 * XSD Type: PaymentMandateType
 */
class PaymentMandateType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MandateTypeCode $mandateTypeCode
     */
    private $mandateTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric
     */
    private $maximumPaymentInstructionsNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPaidAmount $maximumPaidAmount
     */
    private $maximumPaidAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SignatureID $signatureID
     */
    private $signatureID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayerParty $payerParty
     */
    private $payerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayerFinancialAccount $payerFinancialAccount
     */
    private $payerFinancialAccount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentReversalPeriod $paymentReversalPeriod
     */
    private $paymentReversalPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause[] $clause
     */
    private $clause = [
        
    ];

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
    public function setID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as mandateTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MandateTypeCode
     */
    public function getMandateTypeCode()
    {
        return $this->mandateTypeCode;
    }

    /**
     * Sets a new mandateTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MandateTypeCode $mandateTypeCode
     * @return self
     */
    public function setMandateTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MandateTypeCode $mandateTypeCode = null)
    {
        $this->mandateTypeCode = $mandateTypeCode;
        return $this;
    }

    /**
     * Gets as maximumPaymentInstructionsNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPaymentInstructionsNumeric
     */
    public function getMaximumPaymentInstructionsNumeric()
    {
        return $this->maximumPaymentInstructionsNumeric;
    }

    /**
     * Sets a new maximumPaymentInstructionsNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric
     * @return self
     */
    public function setMaximumPaymentInstructionsNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric = null)
    {
        $this->maximumPaymentInstructionsNumeric = $maximumPaymentInstructionsNumeric;
        return $this;
    }

    /**
     * Gets as maximumPaidAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPaidAmount
     */
    public function getMaximumPaidAmount()
    {
        return $this->maximumPaidAmount;
    }

    /**
     * Sets a new maximumPaidAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPaidAmount $maximumPaidAmount
     * @return self
     */
    public function setMaximumPaidAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPaidAmount $maximumPaidAmount = null)
    {
        $this->maximumPaidAmount = $maximumPaidAmount;
        return $this;
    }

    /**
     * Gets as signatureID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SignatureID
     */
    public function getSignatureID()
    {
        return $this->signatureID;
    }

    /**
     * Sets a new signatureID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SignatureID $signatureID
     * @return self
     */
    public function setSignatureID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SignatureID $signatureID = null)
    {
        $this->signatureID = $signatureID;
        return $this;
    }

    /**
     * Gets as payerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayerParty
     */
    public function getPayerParty()
    {
        return $this->payerParty;
    }

    /**
     * Sets a new payerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayerParty $payerParty
     * @return self
     */
    public function setPayerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayerParty $payerParty = null)
    {
        $this->payerParty = $payerParty;
        return $this;
    }

    /**
     * Gets as payerFinancialAccount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayerFinancialAccount
     */
    public function getPayerFinancialAccount()
    {
        return $this->payerFinancialAccount;
    }

    /**
     * Sets a new payerFinancialAccount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayerFinancialAccount $payerFinancialAccount
     * @return self
     */
    public function setPayerFinancialAccount(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayerFinancialAccount $payerFinancialAccount = null)
    {
        $this->payerFinancialAccount = $payerFinancialAccount;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as paymentReversalPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentReversalPeriod
     */
    public function getPaymentReversalPeriod()
    {
        return $this->paymentReversalPeriod;
    }

    /**
     * Sets a new paymentReversalPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentReversalPeriod $paymentReversalPeriod
     * @return self
     */
    public function setPaymentReversalPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentReversalPeriod $paymentReversalPeriod = null)
    {
        $this->paymentReversalPeriod = $paymentReversalPeriod;
        return $this;
    }

    /**
     * Adds as clause
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause $clause
     */
    public function addToClause(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause $clause)
    {
        $this->clause[] = $clause;
        return $this;
    }

    /**
     * isset clause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClause($index)
    {
        return isset($this->clause[$index]);
    }

    /**
     * unset clause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClause($index)
    {
        unset($this->clause[$index]);
    }

    /**
     * Gets as clause
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause[]
     */
    public function getClause()
    {
        return $this->clause;
    }

    /**
     * Sets a new clause
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause[] $clause
     * @return self
     */
    public function setClause(?array $clause = null)
    {
        $this->clause = $clause;
        return $this;
    }
}

