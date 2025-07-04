<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing RemittanceAdviceLineType
 *
 *
 * XSD Type: RemittanceAdviceLineType
 */
class RemittanceAdviceLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DebitLineAmount $debitLineAmount
     */
    private $debitLineAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CreditLineAmount $creditLineAmount
     */
    private $creditLineAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BalanceAmount $balanceAmount
     */
    private $balanceAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\InvoicingPartyReference $invoicingPartyReference
     */
    private $invoicingPartyReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExchangeRate $exchangeRate
     */
    private $exchangeRate = null;

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
     * Adds as note
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note
     */
    public function addToNote(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID
     * @return self
     */
    public function setUUID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as debitLineAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DebitLineAmount
     */
    public function getDebitLineAmount()
    {
        return $this->debitLineAmount;
    }

    /**
     * Sets a new debitLineAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DebitLineAmount $debitLineAmount
     * @return self
     */
    public function setDebitLineAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DebitLineAmount $debitLineAmount = null)
    {
        $this->debitLineAmount = $debitLineAmount;
        return $this;
    }

    /**
     * Gets as creditLineAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CreditLineAmount
     */
    public function getCreditLineAmount()
    {
        return $this->creditLineAmount;
    }

    /**
     * Sets a new creditLineAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CreditLineAmount $creditLineAmount
     * @return self
     */
    public function setCreditLineAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CreditLineAmount $creditLineAmount = null)
    {
        $this->creditLineAmount = $creditLineAmount;
        return $this;
    }

    /**
     * Gets as balanceAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BalanceAmount
     */
    public function getBalanceAmount()
    {
        return $this->balanceAmount;
    }

    /**
     * Sets a new balanceAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BalanceAmount $balanceAmount
     * @return self
     */
    public function setBalanceAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BalanceAmount $balanceAmount = null)
    {
        $this->balanceAmount = $balanceAmount;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentPurposeCode
     */
    public function getPaymentPurposeCode()
    {
        return $this->paymentPurposeCode;
    }

    /**
     * Sets a new paymentPurposeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentPurposeCode $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentPurposeCode $paymentPurposeCode = null)
    {
        $this->paymentPurposeCode = $paymentPurposeCode;
        return $this;
    }

    /**
     * Gets as invoicingPartyReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\InvoicingPartyReference
     */
    public function getInvoicingPartyReference()
    {
        return $this->invoicingPartyReference;
    }

    /**
     * Sets a new invoicingPartyReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\InvoicingPartyReference $invoicingPartyReference
     * @return self
     */
    public function setInvoicingPartyReference(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\InvoicingPartyReference $invoicingPartyReference = null)
    {
        $this->invoicingPartyReference = $invoicingPartyReference;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccountingSupplierParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * Sets a new accountingSupplierParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccountingSupplierParty $accountingSupplierParty = null)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccountingCustomerParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * Sets a new accountingCustomerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccountingCustomerParty $accountingCustomerParty = null)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty = null)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as originatorCustomerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginatorCustomerParty
     */
    public function getOriginatorCustomerParty()
    {
        return $this->originatorCustomerParty;
    }

    /**
     * Sets a new originatorCustomerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     * @return self
     */
    public function setOriginatorCustomerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginatorCustomerParty $originatorCustomerParty = null)
    {
        $this->originatorCustomerParty = $originatorCustomerParty;
        return $this;
    }

    /**
     * Gets as payeeParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayeeParty
     */
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * Sets a new payeeParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayeeParty $payeeParty
     * @return self
     */
    public function setPayeeParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PayeeParty $payeeParty = null)
    {
        $this->payeeParty = $payeeParty;
        return $this;
    }

    /**
     * Adds as invoicePeriod
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicePeriod($index)
    {
        return isset($this->invoicePeriod[$index]);
    }

    /**
     * unset invoicePeriod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicePeriod($index)
    {
        unset($this->invoicePeriod[$index]);
    }

    /**
     * Gets as invoicePeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(?array $invoicePeriod = null)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReference $billingReference
     */
    public function addToBillingReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(?array $billingReference = null)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExchangeRate
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExchangeRate $exchangeRate
     * @return self
     */
    public function setExchangeRate(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExchangeRate $exchangeRate = null)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }
}

