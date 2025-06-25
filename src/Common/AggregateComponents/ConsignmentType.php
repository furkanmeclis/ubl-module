<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ConsignmentType
 *
 *
 * XSD Type: ConsignmentType
 */
class ConsignmentType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalInvoiceAmount $totalInvoiceAmount
     */
    private $totalInvoiceAmount = null;

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
     * Gets as totalInvoiceAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalInvoiceAmount
     */
    public function getTotalInvoiceAmount()
    {
        return $this->totalInvoiceAmount;
    }

    /**
     * Sets a new totalInvoiceAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalInvoiceAmount $totalInvoiceAmount
     * @return self
     */
    public function setTotalInvoiceAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalInvoiceAmount $totalInvoiceAmount)
    {
        $this->totalInvoiceAmount = $totalInvoiceAmount;
        return $this;
    }
}

