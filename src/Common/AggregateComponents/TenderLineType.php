<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TenderLineType
 *
 *
 * XSD Type: TenderLineType
 */
class TenderLineType
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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTaxAmount $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderableUnit $orderableUnit
     */
    private $orderableUnit = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContentUnitQuantity $contentUnitQuantity
     */
    private $contentUnitQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     */
    private $orderQuantityIncrementNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumOrderQuantity $minimumOrderQuantity
     */
    private $minimumOrderQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumOrderQuantity $maximumOrderQuantity
     */
    private $maximumOrderQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\WarrantyInformation[] $warrantyInformation
     */
    private $warrantyInformation = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackLevelCode $packLevelCode
     */
    private $packLevelCode = null;

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
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OfferedItemLocationQuantity[] $offeredItemLocationQuantity
     */
    private $offeredItemLocationQuantity = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacementRelatedItem[] $replacementRelatedItem
     */
    private $replacementRelatedItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyParty $warrantyParty
     */
    private $warrantyParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubTenderLine[] $subTenderLine
     */
    private $subTenderLine = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersLineReference $callForTendersLineReference
     */
    private $callForTendersLineReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     */
    private $callForTendersDocumentReference = null;

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
     * Gets as lineExtensionAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LineExtensionAmount $lineExtensionAmount = null)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTaxAmount
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTaxAmount $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTaxAmount $totalTaxAmount = null)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Gets as orderableUnit
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderableUnit
     */
    public function getOrderableUnit()
    {
        return $this->orderableUnit;
    }

    /**
     * Sets a new orderableUnit
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderableUnit $orderableUnit
     * @return self
     */
    public function setOrderableUnit(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderableUnit $orderableUnit = null)
    {
        $this->orderableUnit = $orderableUnit;
        return $this;
    }

    /**
     * Gets as contentUnitQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContentUnitQuantity
     */
    public function getContentUnitQuantity()
    {
        return $this->contentUnitQuantity;
    }

    /**
     * Sets a new contentUnitQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContentUnitQuantity $contentUnitQuantity
     * @return self
     */
    public function setContentUnitQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ContentUnitQuantity $contentUnitQuantity = null)
    {
        $this->contentUnitQuantity = $contentUnitQuantity;
        return $this;
    }

    /**
     * Gets as orderQuantityIncrementNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderQuantityIncrementNumeric
     */
    public function getOrderQuantityIncrementNumeric()
    {
        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * Sets a new orderQuantityIncrementNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     * @return self
     */
    public function setOrderQuantityIncrementNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric = null)
    {
        $this->orderQuantityIncrementNumeric = $orderQuantityIncrementNumeric;
        return $this;
    }

    /**
     * Gets as minimumOrderQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumOrderQuantity
     */
    public function getMinimumOrderQuantity()
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * Sets a new minimumOrderQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumOrderQuantity $minimumOrderQuantity
     * @return self
     */
    public function setMinimumOrderQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumOrderQuantity $minimumOrderQuantity = null)
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;
        return $this;
    }

    /**
     * Gets as maximumOrderQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumOrderQuantity
     */
    public function getMaximumOrderQuantity()
    {
        return $this->maximumOrderQuantity;
    }

    /**
     * Sets a new maximumOrderQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumOrderQuantity $maximumOrderQuantity
     * @return self
     */
    public function setMaximumOrderQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumOrderQuantity $maximumOrderQuantity = null)
    {
        $this->maximumOrderQuantity = $maximumOrderQuantity;
        return $this;
    }

    /**
     * Adds as warrantyInformation
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\WarrantyInformation $warrantyInformation
     */
    public function addToWarrantyInformation(\FurkanMeclis\GIB\UBL\Common\BasicComponents\WarrantyInformation $warrantyInformation)
    {
        $this->warrantyInformation[] = $warrantyInformation;
        return $this;
    }

    /**
     * isset warrantyInformation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarrantyInformation($index)
    {
        return isset($this->warrantyInformation[$index]);
    }

    /**
     * unset warrantyInformation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarrantyInformation($index)
    {
        unset($this->warrantyInformation[$index]);
    }

    /**
     * Gets as warrantyInformation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\WarrantyInformation[]
     */
    public function getWarrantyInformation()
    {
        return $this->warrantyInformation;
    }

    /**
     * Sets a new warrantyInformation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\WarrantyInformation[] $warrantyInformation
     * @return self
     */
    public function setWarrantyInformation(?array $warrantyInformation = null)
    {
        $this->warrantyInformation = $warrantyInformation;
        return $this;
    }

    /**
     * Gets as packLevelCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackLevelCode
     */
    public function getPackLevelCode()
    {
        return $this->packLevelCode;
    }

    /**
     * Sets a new packLevelCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackLevelCode $packLevelCode
     * @return self
     */
    public function setPackLevelCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PackLevelCode $packLevelCode = null)
    {
        $this->packLevelCode = $packLevelCode;
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
    public function setItem(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as offeredItemLocationQuantity
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OfferedItemLocationQuantity $offeredItemLocationQuantity
     */
    public function addToOfferedItemLocationQuantity(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OfferedItemLocationQuantity $offeredItemLocationQuantity)
    {
        $this->offeredItemLocationQuantity[] = $offeredItemLocationQuantity;
        return $this;
    }

    /**
     * isset offeredItemLocationQuantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfferedItemLocationQuantity($index)
    {
        return isset($this->offeredItemLocationQuantity[$index]);
    }

    /**
     * unset offeredItemLocationQuantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfferedItemLocationQuantity($index)
    {
        unset($this->offeredItemLocationQuantity[$index]);
    }

    /**
     * Gets as offeredItemLocationQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OfferedItemLocationQuantity[]
     */
    public function getOfferedItemLocationQuantity()
    {
        return $this->offeredItemLocationQuantity;
    }

    /**
     * Sets a new offeredItemLocationQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OfferedItemLocationQuantity[] $offeredItemLocationQuantity
     * @return self
     */
    public function setOfferedItemLocationQuantity(?array $offeredItemLocationQuantity = null)
    {
        $this->offeredItemLocationQuantity = $offeredItemLocationQuantity;
        return $this;
    }

    /**
     * Adds as replacementRelatedItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacementRelatedItem $replacementRelatedItem
     */
    public function addToReplacementRelatedItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacementRelatedItem $replacementRelatedItem)
    {
        $this->replacementRelatedItem[] = $replacementRelatedItem;
        return $this;
    }

    /**
     * isset replacementRelatedItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacementRelatedItem($index)
    {
        return isset($this->replacementRelatedItem[$index]);
    }

    /**
     * unset replacementRelatedItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacementRelatedItem($index)
    {
        unset($this->replacementRelatedItem[$index]);
    }

    /**
     * Gets as replacementRelatedItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacementRelatedItem[]
     */
    public function getReplacementRelatedItem()
    {
        return $this->replacementRelatedItem;
    }

    /**
     * Sets a new replacementRelatedItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacementRelatedItem[] $replacementRelatedItem
     * @return self
     */
    public function setReplacementRelatedItem(?array $replacementRelatedItem = null)
    {
        $this->replacementRelatedItem = $replacementRelatedItem;
        return $this;
    }

    /**
     * Gets as warrantyParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyParty
     */
    public function getWarrantyParty()
    {
        return $this->warrantyParty;
    }

    /**
     * Sets a new warrantyParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyParty $warrantyParty
     * @return self
     */
    public function setWarrantyParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyParty $warrantyParty = null)
    {
        $this->warrantyParty = $warrantyParty;
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
     * Adds as subTenderLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubTenderLine $subTenderLine
     */
    public function addToSubTenderLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubTenderLine $subTenderLine)
    {
        $this->subTenderLine[] = $subTenderLine;
        return $this;
    }

    /**
     * isset subTenderLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTenderLine($index)
    {
        return isset($this->subTenderLine[$index]);
    }

    /**
     * unset subTenderLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTenderLine($index)
    {
        unset($this->subTenderLine[$index]);
    }

    /**
     * Gets as subTenderLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubTenderLine[]
     */
    public function getSubTenderLine()
    {
        return $this->subTenderLine;
    }

    /**
     * Sets a new subTenderLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubTenderLine[] $subTenderLine
     * @return self
     */
    public function setSubTenderLine(?array $subTenderLine = null)
    {
        $this->subTenderLine = $subTenderLine;
        return $this;
    }

    /**
     * Gets as callForTendersLineReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersLineReference
     */
    public function getCallForTendersLineReference()
    {
        return $this->callForTendersLineReference;
    }

    /**
     * Sets a new callForTendersLineReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersLineReference $callForTendersLineReference
     * @return self
     */
    public function setCallForTendersLineReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersLineReference $callForTendersLineReference = null)
    {
        $this->callForTendersLineReference = $callForTendersLineReference;
        return $this;
    }

    /**
     * Gets as callForTendersDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReference()
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * Sets a new callForTendersDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference = null)
    {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;
        return $this;
    }
}

