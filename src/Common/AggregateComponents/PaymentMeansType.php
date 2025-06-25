<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PaymentMeansType
 *
 *
 * XSD Type: PaymentMeansType
 */
class PaymentMeansType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentMeansCode $paymentMeansCode
     */
    private $paymentMeansCode = null;

    /**
     * @var \DateTime $paymentDueDate
     */
    private $paymentDueDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentChannelCode $paymentChannelCode
     */
    private $paymentChannelCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\InstructionNote $instructionNote
     */
    private $instructionNote = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayerFinancialAccount $payerFinancialAccount
     */
    private $payerFinancialAccount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayeeFinancialAccount $payeeFinancialAccount
     */
    private $payeeFinancialAccount = null;

    /**
     * Gets as paymentMeansCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentMeansCode
     */
    public function getPaymentMeansCode()
    {
        return $this->paymentMeansCode;
    }

    /**
     * Sets a new paymentMeansCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentMeansCode $paymentMeansCode
     * @return self
     */
    public function setPaymentMeansCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentMeansCode $paymentMeansCode)
    {
        $this->paymentMeansCode = $paymentMeansCode;
        return $this;
    }

    /**
     * Gets as paymentDueDate
     *
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * Sets a new paymentDueDate
     *
     * @param \DateTime $paymentDueDate
     * @return self
     */
    public function setPaymentDueDate(?\DateTime $paymentDueDate = null)
    {
        $this->paymentDueDate = $paymentDueDate;
        return $this;
    }

    /**
     * Gets as paymentChannelCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentChannelCode
     */
    public function getPaymentChannelCode()
    {
        return $this->paymentChannelCode;
    }

    /**
     * Sets a new paymentChannelCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentChannelCode $paymentChannelCode
     * @return self
     */
    public function setPaymentChannelCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentChannelCode $paymentChannelCode = null)
    {
        $this->paymentChannelCode = $paymentChannelCode;
        return $this;
    }

    /**
     * Gets as instructionNote
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\InstructionNote
     */
    public function getInstructionNote()
    {
        return $this->instructionNote;
    }

    /**
     * Sets a new instructionNote
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\InstructionNote $instructionNote
     * @return self
     */
    public function setInstructionNote(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\InstructionNote $instructionNote = null)
    {
        $this->instructionNote = $instructionNote;
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
     * Gets as payeeFinancialAccount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayeeFinancialAccount
     */
    public function getPayeeFinancialAccount()
    {
        return $this->payeeFinancialAccount;
    }

    /**
     * Sets a new payeeFinancialAccount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayeeFinancialAccount $payeeFinancialAccount
     * @return self
     */
    public function setPayeeFinancialAccount(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayeeFinancialAccount $payeeFinancialAccount = null)
    {
        $this->payeeFinancialAccount = $payeeFinancialAccount;
        return $this;
    }
}

