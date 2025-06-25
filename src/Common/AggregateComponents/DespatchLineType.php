<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DespatchLineType
 *
 *
 * XSD Type: DespatchLineType
 */
class DespatchLineType
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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeliveredQuantity $deliveredQuantity
     */
    private $deliveredQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OutstandingQuantity $outstandingQuantity
     */
    private $outstandingQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OutstandingReason[] $outstandingReason
     */
    private $outstandingReason = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OversupplyQuantity $oversupplyQuantity
     */
    private $oversupplyQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference
     */
    private $orderLineReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment[] $shipment
     */
    private $shipment = [
        
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
     * Gets as deliveredQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeliveredQuantity
     */
    public function getDeliveredQuantity()
    {
        return $this->deliveredQuantity;
    }

    /**
     * Sets a new deliveredQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeliveredQuantity $deliveredQuantity
     * @return self
     */
    public function setDeliveredQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DeliveredQuantity $deliveredQuantity = null)
    {
        $this->deliveredQuantity = $deliveredQuantity;
        return $this;
    }

    /**
     * Gets as outstandingQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OutstandingQuantity
     */
    public function getOutstandingQuantity()
    {
        return $this->outstandingQuantity;
    }

    /**
     * Sets a new outstandingQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OutstandingQuantity $outstandingQuantity
     * @return self
     */
    public function setOutstandingQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OutstandingQuantity $outstandingQuantity = null)
    {
        $this->outstandingQuantity = $outstandingQuantity;
        return $this;
    }

    /**
     * Adds as outstandingReason
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OutstandingReason $outstandingReason
     */
    public function addToOutstandingReason(\FurkanMeclis\GIB\UBL\Common\BasicComponents\OutstandingReason $outstandingReason)
    {
        $this->outstandingReason[] = $outstandingReason;
        return $this;
    }

    /**
     * isset outstandingReason
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutstandingReason($index)
    {
        return isset($this->outstandingReason[$index]);
    }

    /**
     * unset outstandingReason
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutstandingReason($index)
    {
        unset($this->outstandingReason[$index]);
    }

    /**
     * Gets as outstandingReason
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OutstandingReason[]
     */
    public function getOutstandingReason()
    {
        return $this->outstandingReason;
    }

    /**
     * Sets a new outstandingReason
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OutstandingReason[] $outstandingReason
     * @return self
     */
    public function setOutstandingReason(?array $outstandingReason = null)
    {
        $this->outstandingReason = $outstandingReason;
        return $this;
    }

    /**
     * Gets as oversupplyQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OversupplyQuantity
     */
    public function getOversupplyQuantity()
    {
        return $this->oversupplyQuantity;
    }

    /**
     * Sets a new oversupplyQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OversupplyQuantity $oversupplyQuantity
     * @return self
     */
    public function setOversupplyQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OversupplyQuantity $oversupplyQuantity = null)
    {
        $this->oversupplyQuantity = $oversupplyQuantity;
        return $this;
    }

    /**
     * Gets as orderLineReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference
     * @return self
     */
    public function setOrderLineReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference = $orderLineReference;
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
     * Gets as item
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item
     * @return self
     */
    public function setItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as shipment
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment
     */
    public function addToShipment(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment)
    {
        $this->shipment[] = $shipment;
        return $this;
    }

    /**
     * isset shipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipment($index)
    {
        return isset($this->shipment[$index]);
    }

    /**
     * unset shipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipment($index)
    {
        unset($this->shipment[$index]);
    }

    /**
     * Gets as shipment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment[]
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment[] $shipment
     * @return self
     */
    public function setShipment(?array $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }
}

