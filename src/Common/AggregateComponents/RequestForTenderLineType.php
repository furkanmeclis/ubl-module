<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing RequestForTenderLineType
 *
 *
 * XSD Type: RequestForTenderLineType
 */
class RequestForTenderLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * @var bool $taxIncludedIndicator
     */
    private $taxIncludedIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumAmount $minimumAmount
     */
    private $minimumAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAmount $maximumAmount
     */
    private $maximumAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedAmount $estimatedAmount
     */
    private $estimatedAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryPeriod[] $deliveryPeriod
     */
    private $deliveryPeriod = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubRequestForTenderLine[] $subRequestForTenderLine
     */
    private $subRequestForTenderLine = [
        
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
    public function setID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
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
     * Gets as quantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity = null)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity = null)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as taxIncludedIndicator
     *
     * @return bool
     */
    public function getTaxIncludedIndicator()
    {
        return $this->taxIncludedIndicator;
    }

    /**
     * Sets a new taxIncludedIndicator
     *
     * @param bool $taxIncludedIndicator
     * @return self
     */
    public function setTaxIncludedIndicator($taxIncludedIndicator)
    {
        $this->taxIncludedIndicator = $taxIncludedIndicator;
        return $this;
    }

    /**
     * Gets as minimumAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumAmount
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * Sets a new minimumAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumAmount $minimumAmount = null)
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * Gets as maximumAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAmount
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }

    /**
     * Sets a new maximumAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAmount $maximumAmount = null)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }

    /**
     * Gets as estimatedAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedAmount
     */
    public function getEstimatedAmount()
    {
        return $this->estimatedAmount;
    }

    /**
     * Sets a new estimatedAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedAmount $estimatedAmount
     * @return self
     */
    public function setEstimatedAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedAmount $estimatedAmount = null)
    {
        $this->estimatedAmount = $estimatedAmount;
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
     * Adds as deliveryPeriod
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryPeriod $deliveryPeriod
     */
    public function addToDeliveryPeriod(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryPeriod $deliveryPeriod)
    {
        $this->deliveryPeriod[] = $deliveryPeriod;
        return $this;
    }

    /**
     * isset deliveryPeriod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryPeriod($index)
    {
        return isset($this->deliveryPeriod[$index]);
    }

    /**
     * unset deliveryPeriod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryPeriod($index)
    {
        unset($this->deliveryPeriod[$index]);
    }

    /**
     * Gets as deliveryPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryPeriod[]
     */
    public function getDeliveryPeriod()
    {
        return $this->deliveryPeriod;
    }

    /**
     * Sets a new deliveryPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryPeriod[] $deliveryPeriod
     * @return self
     */
    public function setDeliveryPeriod(?array $deliveryPeriod = null)
    {
        $this->deliveryPeriod = $deliveryPeriod;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantity(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * isset requiredItemLocationQuantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredItemLocationQuantity($index)
    {
        return isset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * unset requiredItemLocationQuantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredItemLocationQuantity($index)
    {
        unset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * Gets as requiredItemLocationQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[]
     */
    public function getRequiredItemLocationQuantity()
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * Sets a new requiredItemLocationQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     * @return self
     */
    public function setRequiredItemLocationQuantity(?array $requiredItemLocationQuantity = null)
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod = null)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
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
     * Adds as subRequestForTenderLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubRequestForTenderLine $subRequestForTenderLine
     */
    public function addToSubRequestForTenderLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubRequestForTenderLine $subRequestForTenderLine)
    {
        $this->subRequestForTenderLine[] = $subRequestForTenderLine;
        return $this;
    }

    /**
     * isset subRequestForTenderLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubRequestForTenderLine($index)
    {
        return isset($this->subRequestForTenderLine[$index]);
    }

    /**
     * unset subRequestForTenderLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubRequestForTenderLine($index)
    {
        unset($this->subRequestForTenderLine[$index]);
    }

    /**
     * Gets as subRequestForTenderLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubRequestForTenderLine[]
     */
    public function getSubRequestForTenderLine()
    {
        return $this->subRequestForTenderLine;
    }

    /**
     * Sets a new subRequestForTenderLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubRequestForTenderLine[] $subRequestForTenderLine
     * @return self
     */
    public function setSubRequestForTenderLine(?array $subRequestForTenderLine = null)
    {
        $this->subRequestForTenderLine = $subRequestForTenderLine;
        return $this;
    }
}

