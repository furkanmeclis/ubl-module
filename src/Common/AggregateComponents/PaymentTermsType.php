<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PaymentTermsType
 *
 *
 * XSD Type: PaymentTermsType
 */
class PaymentTermsType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PenaltySurchargePercent $penaltySurchargePercent
     */
    private $penaltySurchargePercent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PenaltyAmount $penaltyAmount
     */
    private $penaltyAmount = null;

    /**
     * @var \DateTime $paymentDueDate
     */
    private $paymentDueDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SettlementPeriod $settlementPeriod
     */
    private $settlementPeriod = null;

    /**
     * Gets as note
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note
     * @return self
     */
    public function setNote(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as penaltySurchargePercent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PenaltySurchargePercent
     */
    public function getPenaltySurchargePercent()
    {
        return $this->penaltySurchargePercent;
    }

    /**
     * Sets a new penaltySurchargePercent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PenaltySurchargePercent $penaltySurchargePercent
     * @return self
     */
    public function setPenaltySurchargePercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PenaltySurchargePercent $penaltySurchargePercent = null)
    {
        $this->penaltySurchargePercent = $penaltySurchargePercent;
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
    public function setAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as penaltyAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PenaltyAmount
     */
    public function getPenaltyAmount()
    {
        return $this->penaltyAmount;
    }

    /**
     * Sets a new penaltyAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PenaltyAmount $penaltyAmount
     * @return self
     */
    public function setPenaltyAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PenaltyAmount $penaltyAmount = null)
    {
        $this->penaltyAmount = $penaltyAmount;
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
     * Gets as settlementPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SettlementPeriod
     */
    public function getSettlementPeriod()
    {
        return $this->settlementPeriod;
    }

    /**
     * Sets a new settlementPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SettlementPeriod $settlementPeriod
     * @return self
     */
    public function setSettlementPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SettlementPeriod $settlementPeriod = null)
    {
        $this->settlementPeriod = $settlementPeriod;
        return $this;
    }
}

