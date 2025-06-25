<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ReceiptLineType
 *
 *
 * XSD Type: ReceiptLineType
 */
class ReceiptLineType
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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedQuantity $receivedQuantity
     */
    private $receivedQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ShortQuantity $shortQuantity
     */
    private $shortQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectedQuantity $rejectedQuantity
     */
    private $rejectedQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectReasonCode $rejectReasonCode
     */
    private $rejectReasonCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectReason[] $rejectReason
     */
    private $rejectReason = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OversupplyQuantity $oversupplyQuantity
     */
    private $oversupplyQuantity = null;

    /**
     * @var \DateTime $receivedDate
     */
    private $receivedDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimingComplaintCode $timingComplaintCode
     */
    private $timingComplaintCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimingComplaint $timingComplaint
     */
    private $timingComplaint = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference
     */
    private $orderLineReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchLineReference $despatchLineReference
     */
    private $despatchLineReference = null;

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
     * Gets as receivedQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedQuantity
     */
    public function getReceivedQuantity()
    {
        return $this->receivedQuantity;
    }

    /**
     * Sets a new receivedQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedQuantity $receivedQuantity
     * @return self
     */
    public function setReceivedQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedQuantity $receivedQuantity = null)
    {
        $this->receivedQuantity = $receivedQuantity;
        return $this;
    }

    /**
     * Gets as shortQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ShortQuantity
     */
    public function getShortQuantity()
    {
        return $this->shortQuantity;
    }

    /**
     * Sets a new shortQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ShortQuantity $shortQuantity
     * @return self
     */
    public function setShortQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ShortQuantity $shortQuantity = null)
    {
        $this->shortQuantity = $shortQuantity;
        return $this;
    }

    /**
     * Gets as rejectedQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectedQuantity
     */
    public function getRejectedQuantity()
    {
        return $this->rejectedQuantity;
    }

    /**
     * Sets a new rejectedQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectedQuantity $rejectedQuantity
     * @return self
     */
    public function setRejectedQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectedQuantity $rejectedQuantity = null)
    {
        $this->rejectedQuantity = $rejectedQuantity;
        return $this;
    }

    /**
     * Gets as rejectReasonCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectReasonCode
     */
    public function getRejectReasonCode()
    {
        return $this->rejectReasonCode;
    }

    /**
     * Sets a new rejectReasonCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectReasonCode $rejectReasonCode
     * @return self
     */
    public function setRejectReasonCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectReasonCode $rejectReasonCode = null)
    {
        $this->rejectReasonCode = $rejectReasonCode;
        return $this;
    }

    /**
     * Adds as rejectReason
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectReason $rejectReason
     */
    public function addToRejectReason(\FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectReason $rejectReason)
    {
        $this->rejectReason[] = $rejectReason;
        return $this;
    }

    /**
     * isset rejectReason
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectReason($index)
    {
        return isset($this->rejectReason[$index]);
    }

    /**
     * unset rejectReason
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectReason($index)
    {
        unset($this->rejectReason[$index]);
    }

    /**
     * Gets as rejectReason
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectReason[]
     */
    public function getRejectReason()
    {
        return $this->rejectReason;
    }

    /**
     * Sets a new rejectReason
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RejectReason[] $rejectReason
     * @return self
     */
    public function setRejectReason(?array $rejectReason = null)
    {
        $this->rejectReason = $rejectReason;
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
     * Gets as timingComplaintCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimingComplaintCode
     */
    public function getTimingComplaintCode()
    {
        return $this->timingComplaintCode;
    }

    /**
     * Sets a new timingComplaintCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimingComplaintCode $timingComplaintCode
     * @return self
     */
    public function setTimingComplaintCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TimingComplaintCode $timingComplaintCode = null)
    {
        $this->timingComplaintCode = $timingComplaintCode;
        return $this;
    }

    /**
     * Gets as timingComplaint
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimingComplaint
     */
    public function getTimingComplaint()
    {
        return $this->timingComplaint;
    }

    /**
     * Sets a new timingComplaint
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimingComplaint $timingComplaint
     * @return self
     */
    public function setTimingComplaint(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TimingComplaint $timingComplaint = null)
    {
        $this->timingComplaint = $timingComplaint;
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
    public function setOrderLineReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference = null)
    {
        $this->orderLineReference = $orderLineReference;
        return $this;
    }

    /**
     * Gets as despatchLineReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchLineReference
     */
    public function getDespatchLineReference()
    {
        return $this->despatchLineReference;
    }

    /**
     * Sets a new despatchLineReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchLineReference $despatchLineReference
     * @return self
     */
    public function setDespatchLineReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchLineReference $despatchLineReference = null)
    {
        $this->despatchLineReference = $despatchLineReference;
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

