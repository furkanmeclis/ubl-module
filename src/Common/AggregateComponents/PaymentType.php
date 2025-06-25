<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PaymentType
 *
 *
 * XSD Type: PaymentType
 */
class PaymentType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaidAmount $paidAmount
     */
    private $paidAmount = null;

    /**
     * @var \DateTime $receivedDate
     */
    private $receivedDate = null;

    /**
     * @var \DateTime $paidDate
     */
    private $paidDate = null;

    /**
     * @var \DateTime $paidTime
     */
    private $paidTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\InstructionID $instructionID
     */
    private $instructionID = null;

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
     * Gets as paidAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaidAmount
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * Sets a new paidAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaidAmount $paidAmount
     * @return self
     */
    public function setPaidAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PaidAmount $paidAmount = null)
    {
        $this->paidAmount = $paidAmount;
        return $this;
    }

    /**
     * Gets as receivedDate
     *
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->receivedDate;
    }

    /**
     * Sets a new receivedDate
     *
     * @param \DateTime $receivedDate
     * @return self
     */
    public function setReceivedDate(?\DateTime $receivedDate = null)
    {
        $this->receivedDate = $receivedDate;
        return $this;
    }

    /**
     * Gets as paidDate
     *
     * @return \DateTime
     */
    public function getPaidDate()
    {
        return $this->paidDate;
    }

    /**
     * Sets a new paidDate
     *
     * @param \DateTime $paidDate
     * @return self
     */
    public function setPaidDate(?\DateTime $paidDate = null)
    {
        $this->paidDate = $paidDate;
        return $this;
    }

    /**
     * Gets as paidTime
     *
     * @return \DateTime
     */
    public function getPaidTime()
    {
        return $this->paidTime;
    }

    /**
     * Sets a new paidTime
     *
     * @param \DateTime $paidTime
     * @return self
     */
    public function setPaidTime(?\DateTime $paidTime = null)
    {
        $this->paidTime = $paidTime;
        return $this;
    }

    /**
     * Gets as instructionID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\InstructionID
     */
    public function getInstructionID()
    {
        return $this->instructionID;
    }

    /**
     * Sets a new instructionID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\InstructionID $instructionID
     * @return self
     */
    public function setInstructionID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\InstructionID $instructionID = null)
    {
        $this->instructionID = $instructionID;
        return $this;
    }
}

