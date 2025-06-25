<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing BillingReferenceType
 *
 *
 * XSD Type: BillingReferenceType
 */
class BillingReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoiceDocumentReference $invoiceDocumentReference
     */
    private $invoiceDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     */
    private $selfBilledInvoiceDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference
     */
    private $creditNoteDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     */
    private $selfBilledCreditNoteDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference
     */
    private $debitNoteDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReminderDocumentReference $reminderDocumentReference
     */
    private $reminderDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    private $additionalDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReferenceLine[] $billingReferenceLine
     */
    private $billingReferenceLine = [
        
    ];

    /**
     * Gets as invoiceDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoiceDocumentReference
     */
    public function getInvoiceDocumentReference()
    {
        return $this->invoiceDocumentReference;
    }

    /**
     * Sets a new invoiceDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoiceDocumentReference $invoiceDocumentReference
     * @return self
     */
    public function setInvoiceDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoiceDocumentReference $invoiceDocumentReference = null)
    {
        $this->invoiceDocumentReference = $invoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledInvoiceDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SelfBilledInvoiceDocumentReference
     */
    public function getSelfBilledInvoiceDocumentReference()
    {
        return $this->selfBilledInvoiceDocumentReference;
    }

    /**
     * Sets a new selfBilledInvoiceDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     * @return self
     */
    public function setSelfBilledInvoiceDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference = null)
    {
        $this->selfBilledInvoiceDocumentReference = $selfBilledInvoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as creditNoteDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CreditNoteDocumentReference
     */
    public function getCreditNoteDocumentReference()
    {
        return $this->creditNoteDocumentReference;
    }

    /**
     * Sets a new creditNoteDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference
     * @return self
     */
    public function setCreditNoteDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference = null)
    {
        $this->creditNoteDocumentReference = $creditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledCreditNoteDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SelfBilledCreditNoteDocumentReference
     */
    public function getSelfBilledCreditNoteDocumentReference()
    {
        return $this->selfBilledCreditNoteDocumentReference;
    }

    /**
     * Sets a new selfBilledCreditNoteDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     * @return self
     */
    public function setSelfBilledCreditNoteDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference = null)
    {
        $this->selfBilledCreditNoteDocumentReference = $selfBilledCreditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as debitNoteDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DebitNoteDocumentReference
     */
    public function getDebitNoteDocumentReference()
    {
        return $this->debitNoteDocumentReference;
    }

    /**
     * Sets a new debitNoteDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference
     * @return self
     */
    public function setDebitNoteDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference = null)
    {
        $this->debitNoteDocumentReference = $debitNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as reminderDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReminderDocumentReference
     */
    public function getReminderDocumentReference()
    {
        return $this->reminderDocumentReference;
    }

    /**
     * Sets a new reminderDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReminderDocumentReference $reminderDocumentReference
     * @return self
     */
    public function setReminderDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReminderDocumentReference $reminderDocumentReference = null)
    {
        $this->reminderDocumentReference = $reminderDocumentReference;
        return $this;
    }

    /**
     * Gets as additionalDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference = null)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as billingReferenceLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReferenceLine $billingReferenceLine
     */
    public function addToBillingReferenceLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReferenceLine $billingReferenceLine)
    {
        $this->billingReferenceLine[] = $billingReferenceLine;
        return $this;
    }

    /**
     * isset billingReferenceLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReferenceLine($index)
    {
        return isset($this->billingReferenceLine[$index]);
    }

    /**
     * unset billingReferenceLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReferenceLine($index)
    {
        unset($this->billingReferenceLine[$index]);
    }

    /**
     * Gets as billingReferenceLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReferenceLine[]
     */
    public function getBillingReferenceLine()
    {
        return $this->billingReferenceLine;
    }

    /**
     * Sets a new billingReferenceLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BillingReferenceLine[] $billingReferenceLine
     * @return self
     */
    public function setBillingReferenceLine(?array $billingReferenceLine = null)
    {
        $this->billingReferenceLine = $billingReferenceLine;
        return $this;
    }
}

