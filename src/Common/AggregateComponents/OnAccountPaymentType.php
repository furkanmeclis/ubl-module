<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing OnAccountPaymentType
 *
 *
 * XSD Type: OnAccountPaymentType
 */
class OnAccountPaymentType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedConsumedQuantity $estimatedConsumedQuantity
     */
    private $estimatedConsumedQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * Gets as estimatedConsumedQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedConsumedQuantity
     */
    public function getEstimatedConsumedQuantity()
    {
        return $this->estimatedConsumedQuantity;
    }

    /**
     * Sets a new estimatedConsumedQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedConsumedQuantity $estimatedConsumedQuantity
     * @return self
     */
    public function setEstimatedConsumedQuantity(\FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedConsumedQuantity $estimatedConsumedQuantity)
    {
        $this->estimatedConsumedQuantity = $estimatedConsumedQuantity;
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
     * Adds as paymentTerms
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }
}

