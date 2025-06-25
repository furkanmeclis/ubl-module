<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing OrderLineReferenceType
 *
 *
 * XSD Type: OrderLineReferenceType
 */
class OrderLineReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineID $lineID
     */
    private $lineID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SalesOrderLineID $salesOrderLineID
     */
    private $salesOrderLineID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderReference $orderReference
     */
    private $orderReference = null;

    /**
     * Gets as lineID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineID
     */
    public function getLineID()
    {
        return $this->lineID;
    }

    /**
     * Sets a new lineID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineID $lineID
     * @return self
     */
    public function setLineID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\LineID $lineID)
    {
        $this->lineID = $lineID;
        return $this;
    }

    /**
     * Gets as salesOrderLineID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SalesOrderLineID
     */
    public function getSalesOrderLineID()
    {
        return $this->salesOrderLineID;
    }

    /**
     * Sets a new salesOrderLineID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SalesOrderLineID $salesOrderLineID
     * @return self
     */
    public function setSalesOrderLineID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SalesOrderLineID $salesOrderLineID = null)
    {
        $this->salesOrderLineID = $salesOrderLineID;
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
     * Gets as lineStatusCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode = null)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderReference
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderReference $orderReference
     * @return self
     */
    public function setOrderReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderReference $orderReference = null)
    {
        $this->orderReference = $orderReference;
        return $this;
    }
}

