<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing LineItemType
 *
 *
 * XSD Type: LineItemType
 */
class LineItemType
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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumBackorderQuantity $minimumBackorderQuantity
     */
    private $minimumBackorderQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumBackorderQuantity $maximumBackorderQuantity
     */
    private $maximumBackorderQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\InspectionMethodCode $inspectionMethodCode
     */
    private $inspectionMethodCode = null;

    /**
     * @var bool $partialDeliveryIndicator
     */
    private $partialDeliveryIndicator = null;

    /**
     * @var bool $backOrderAllowedIndicator
     */
    private $backOrderAllowedIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\WarrantyInformation[] $warrantyInformation
     */
    private $warrantyInformation = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginatorParty $originatorParty
     */
    private $originatorParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderedShipment[] $orderedShipment
     */
    private $orderedShipment = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Price $price
     */
    private $price = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubLineItem[] $subLineItem
     */
    private $subLineItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyParty $warrantyParty
     */
    private $warrantyParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPriceExtension $itemPriceExtension
     */
    private $itemPriceExtension = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineReference[] $lineReference
     */
    private $lineReference = [
        
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
     * Gets as minimumBackorderQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumBackorderQuantity
     */
    public function getMinimumBackorderQuantity()
    {
        return $this->minimumBackorderQuantity;
    }

    /**
     * Sets a new minimumBackorderQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumBackorderQuantity $minimumBackorderQuantity
     * @return self
     */
    public function setMinimumBackorderQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumBackorderQuantity $minimumBackorderQuantity = null)
    {
        $this->minimumBackorderQuantity = $minimumBackorderQuantity;
        return $this;
    }

    /**
     * Gets as maximumBackorderQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumBackorderQuantity
     */
    public function getMaximumBackorderQuantity()
    {
        return $this->maximumBackorderQuantity;
    }

    /**
     * Sets a new maximumBackorderQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumBackorderQuantity $maximumBackorderQuantity
     * @return self
     */
    public function setMaximumBackorderQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumBackorderQuantity $maximumBackorderQuantity = null)
    {
        $this->maximumBackorderQuantity = $maximumBackorderQuantity;
        return $this;
    }

    /**
     * Gets as inspectionMethodCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\InspectionMethodCode
     */
    public function getInspectionMethodCode()
    {
        return $this->inspectionMethodCode;
    }

    /**
     * Sets a new inspectionMethodCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\InspectionMethodCode $inspectionMethodCode
     * @return self
     */
    public function setInspectionMethodCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\InspectionMethodCode $inspectionMethodCode = null)
    {
        $this->inspectionMethodCode = $inspectionMethodCode;
        return $this;
    }

    /**
     * Gets as partialDeliveryIndicator
     *
     * @return bool
     */
    public function getPartialDeliveryIndicator()
    {
        return $this->partialDeliveryIndicator;
    }

    /**
     * Sets a new partialDeliveryIndicator
     *
     * @param bool $partialDeliveryIndicator
     * @return self
     */
    public function setPartialDeliveryIndicator($partialDeliveryIndicator)
    {
        $this->partialDeliveryIndicator = $partialDeliveryIndicator;
        return $this;
    }

    /**
     * Gets as backOrderAllowedIndicator
     *
     * @return bool
     */
    public function getBackOrderAllowedIndicator()
    {
        return $this->backOrderAllowedIndicator;
    }

    /**
     * Sets a new backOrderAllowedIndicator
     *
     * @param bool $backOrderAllowedIndicator
     * @return self
     */
    public function setBackOrderAllowedIndicator($backOrderAllowedIndicator)
    {
        $this->backOrderAllowedIndicator = $backOrderAllowedIndicator;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountingCostCode $accountingCostCode = null)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountingCost $accountingCost = null)
    {
        $this->accountingCost = $accountingCost;
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
     * Adds as delivery
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Delivery $delivery
     */
    public function addToDelivery(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelivery($index)
    {
        return isset($this->delivery[$index]);
    }

    /**
     * unset delivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelivery($index)
    {
        unset($this->delivery[$index]);
    }

    /**
     * Gets as delivery
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(?array $delivery = null)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as deliveryTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryTerms $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as originatorParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginatorParty
     */
    public function getOriginatorParty()
    {
        return $this->originatorParty;
    }

    /**
     * Sets a new originatorParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginatorParty $originatorParty
     * @return self
     */
    public function setOriginatorParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginatorParty $originatorParty = null)
    {
        $this->originatorParty = $originatorParty;
        return $this;
    }

    /**
     * Adds as orderedShipment
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderedShipment $orderedShipment
     */
    public function addToOrderedShipment(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderedShipment $orderedShipment)
    {
        $this->orderedShipment[] = $orderedShipment;
        return $this;
    }

    /**
     * isset orderedShipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderedShipment($index)
    {
        return isset($this->orderedShipment[$index]);
    }

    /**
     * unset orderedShipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderedShipment($index)
    {
        unset($this->orderedShipment[$index]);
    }

    /**
     * Gets as orderedShipment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderedShipment[]
     */
    public function getOrderedShipment()
    {
        return $this->orderedShipment;
    }

    /**
     * Sets a new orderedShipment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderedShipment[] $orderedShipment
     * @return self
     */
    public function setOrderedShipment(?array $orderedShipment = null)
    {
        $this->orderedShipment = $orderedShipment;
        return $this;
    }

    /**
     * Gets as pricingReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PricingReference
     */
    public function getPricingReference()
    {
        return $this->pricingReference;
    }

    /**
     * Sets a new pricingReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PricingReference $pricingReference
     * @return self
     */
    public function setPricingReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PricingReference $pricingReference = null)
    {
        $this->pricingReference = $pricingReference;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Price $price
     * @return self
     */
    public function setPrice(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Price $price = null)
    {
        $this->price = $price;
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
     * Adds as subLineItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubLineItem $subLineItem
     */
    public function addToSubLineItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubLineItem $subLineItem)
    {
        $this->subLineItem[] = $subLineItem;
        return $this;
    }

    /**
     * isset subLineItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubLineItem($index)
    {
        return isset($this->subLineItem[$index]);
    }

    /**
     * unset subLineItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubLineItem($index)
    {
        unset($this->subLineItem[$index]);
    }

    /**
     * Gets as subLineItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubLineItem[]
     */
    public function getSubLineItem()
    {
        return $this->subLineItem;
    }

    /**
     * Sets a new subLineItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubLineItem[] $subLineItem
     * @return self
     */
    public function setSubLineItem(?array $subLineItem = null)
    {
        $this->subLineItem = $subLineItem;
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
     * Adds as taxTotal
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as itemPriceExtension
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPriceExtension
     */
    public function getItemPriceExtension()
    {
        return $this->itemPriceExtension;
    }

    /**
     * Sets a new itemPriceExtension
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPriceExtension $itemPriceExtension
     * @return self
     */
    public function setItemPriceExtension(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPriceExtension $itemPriceExtension = null)
    {
        $this->itemPriceExtension = $itemPriceExtension;
        return $this;
    }

    /**
     * Adds as lineReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineReference $lineReference
     */
    public function addToLineReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineReference $lineReference)
    {
        $this->lineReference[] = $lineReference;
        return $this;
    }

    /**
     * isset lineReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineReference($index)
    {
        return isset($this->lineReference[$index]);
    }

    /**
     * unset lineReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineReference($index)
    {
        unset($this->lineReference[$index]);
    }

    /**
     * Gets as lineReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineReference[]
     */
    public function getLineReference()
    {
        return $this->lineReference;
    }

    /**
     * Sets a new lineReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineReference[] $lineReference
     * @return self
     */
    public function setLineReference(?array $lineReference = null)
    {
        $this->lineReference = $lineReference;
        return $this;
    }
}

