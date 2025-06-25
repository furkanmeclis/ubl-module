<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing OrderReferenceType
 *
 *
 * XSD Type: OrderReferenceType
 */
class OrderReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderTypeCode $orderTypeCode
     */
    private $orderTypeCode = null; 

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

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
     * Gets as salesOrderID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SalesOrderID
     */
    public function getSalesOrderID()
    {
        return $this->salesOrderID;
    }

    /**
     * Sets a new salesOrderID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SalesOrderID $salesOrderID
     * @return self
     */
    public function setSalesOrderID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SalesOrderID $salesOrderID = null)
    {
        $this->salesOrderID = $salesOrderID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as orderTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderTypeCode
     */
    public function getOrderTypeCode()
    {
        return $this->orderTypeCode;
    }

    /**
     * Sets a new orderTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderTypeCode $orderTypeCode
     * @return self
     */
    public function setOrderTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderTypeCode $orderTypeCode = null)
    {
        $this->orderTypeCode = $orderTypeCode;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }
}

