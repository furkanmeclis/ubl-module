<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CatalogueLineType
 *
 *
 * XSD Type: CatalogueLineType
 */
class CatalogueLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActionCode $actionCode
     */
    private $actionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LifeCycleStatusCode $lifeCycleStatusCode
     */
    private $lifeCycleStatusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractSubdivision $contractSubdivision
     */
    private $contractSubdivision = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var bool $orderableIndicator
     */
    private $orderableIndicator = null;

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
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyParty $warrantyParty
     */
    private $warrantyParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineValidityPeriod $lineValidityPeriod
     */
    private $lineValidityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemComparison[] $itemComparison
     */
    private $itemComparison = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComponentRelatedItem[] $componentRelatedItem
     */
    private $componentRelatedItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccessoryRelatedItem[] $accessoryRelatedItem
     */
    private $accessoryRelatedItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredRelatedItem[] $requiredRelatedItem
     */
    private $requiredRelatedItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacementRelatedItem[] $replacementRelatedItem
     */
    private $replacementRelatedItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComplementaryRelatedItem[] $complementaryRelatedItem
     */
    private $complementaryRelatedItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacedRelatedItem[] $replacedRelatedItem
     */
    private $replacedRelatedItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

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
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\KeywordItemProperty[] $keywordItemProperty
     */
    private $keywordItemProperty = [
        
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
    public function setID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as actionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActionCode
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * Sets a new actionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActionCode $actionCode
     * @return self
     */
    public function setActionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ActionCode $actionCode = null)
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    /**
     * Gets as lifeCycleStatusCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LifeCycleStatusCode
     */
    public function getLifeCycleStatusCode()
    {
        return $this->lifeCycleStatusCode;
    }

    /**
     * Sets a new lifeCycleStatusCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LifeCycleStatusCode $lifeCycleStatusCode
     * @return self
     */
    public function setLifeCycleStatusCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LifeCycleStatusCode $lifeCycleStatusCode = null)
    {
        $this->lifeCycleStatusCode = $lifeCycleStatusCode;
        return $this;
    }

    /**
     * Gets as contractSubdivision
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractSubdivision
     */
    public function getContractSubdivision()
    {
        return $this->contractSubdivision;
    }

    /**
     * Sets a new contractSubdivision
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractSubdivision $contractSubdivision
     * @return self
     */
    public function setContractSubdivision(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractSubdivision $contractSubdivision = null)
    {
        $this->contractSubdivision = $contractSubdivision;
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
     * Gets as orderableIndicator
     *
     * @return bool
     */
    public function getOrderableIndicator()
    {
        return $this->orderableIndicator;
    }

    /**
     * Sets a new orderableIndicator
     *
     * @param bool $orderableIndicator
     * @return self
     */
    public function setOrderableIndicator($orderableIndicator)
    {
        $this->orderableIndicator = $orderableIndicator;
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
     * Gets as contractorCustomerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractorCustomerParty
     */
    public function getContractorCustomerParty()
    {
        return $this->contractorCustomerParty;
    }

    /**
     * Sets a new contractorCustomerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty
     * @return self
     */
    public function setContractorCustomerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractorCustomerParty $contractorCustomerParty = null)
    {
        $this->contractorCustomerParty = $contractorCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
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
     * Gets as lineValidityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineValidityPeriod
     */
    public function getLineValidityPeriod()
    {
        return $this->lineValidityPeriod;
    }

    /**
     * Sets a new lineValidityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineValidityPeriod $lineValidityPeriod
     * @return self
     */
    public function setLineValidityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineValidityPeriod $lineValidityPeriod = null)
    {
        $this->lineValidityPeriod = $lineValidityPeriod;
        return $this;
    }

    /**
     * Adds as itemComparison
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemComparison $itemComparison
     */
    public function addToItemComparison(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemComparison $itemComparison)
    {
        $this->itemComparison[] = $itemComparison;
        return $this;
    }

    /**
     * isset itemComparison
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemComparison($index)
    {
        return isset($this->itemComparison[$index]);
    }

    /**
     * unset itemComparison
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemComparison($index)
    {
        unset($this->itemComparison[$index]);
    }

    /**
     * Gets as itemComparison
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemComparison[]
     */
    public function getItemComparison()
    {
        return $this->itemComparison;
    }

    /**
     * Sets a new itemComparison
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemComparison[] $itemComparison
     * @return self
     */
    public function setItemComparison(?array $itemComparison = null)
    {
        $this->itemComparison = $itemComparison;
        return $this;
    }

    /**
     * Adds as componentRelatedItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComponentRelatedItem $componentRelatedItem
     */
    public function addToComponentRelatedItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComponentRelatedItem $componentRelatedItem)
    {
        $this->componentRelatedItem[] = $componentRelatedItem;
        return $this;
    }

    /**
     * isset componentRelatedItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponentRelatedItem($index)
    {
        return isset($this->componentRelatedItem[$index]);
    }

    /**
     * unset componentRelatedItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponentRelatedItem($index)
    {
        unset($this->componentRelatedItem[$index]);
    }

    /**
     * Gets as componentRelatedItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComponentRelatedItem[]
     */
    public function getComponentRelatedItem()
    {
        return $this->componentRelatedItem;
    }

    /**
     * Sets a new componentRelatedItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComponentRelatedItem[] $componentRelatedItem
     * @return self
     */
    public function setComponentRelatedItem(?array $componentRelatedItem = null)
    {
        $this->componentRelatedItem = $componentRelatedItem;
        return $this;
    }

    /**
     * Adds as accessoryRelatedItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccessoryRelatedItem $accessoryRelatedItem
     */
    public function addToAccessoryRelatedItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccessoryRelatedItem $accessoryRelatedItem)
    {
        $this->accessoryRelatedItem[] = $accessoryRelatedItem;
        return $this;
    }

    /**
     * isset accessoryRelatedItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccessoryRelatedItem($index)
    {
        return isset($this->accessoryRelatedItem[$index]);
    }

    /**
     * unset accessoryRelatedItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccessoryRelatedItem($index)
    {
        unset($this->accessoryRelatedItem[$index]);
    }

    /**
     * Gets as accessoryRelatedItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccessoryRelatedItem[]
     */
    public function getAccessoryRelatedItem()
    {
        return $this->accessoryRelatedItem;
    }

    /**
     * Sets a new accessoryRelatedItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AccessoryRelatedItem[] $accessoryRelatedItem
     * @return self
     */
    public function setAccessoryRelatedItem(?array $accessoryRelatedItem = null)
    {
        $this->accessoryRelatedItem = $accessoryRelatedItem;
        return $this;
    }

    /**
     * Adds as requiredRelatedItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredRelatedItem $requiredRelatedItem
     */
    public function addToRequiredRelatedItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredRelatedItem $requiredRelatedItem)
    {
        $this->requiredRelatedItem[] = $requiredRelatedItem;
        return $this;
    }

    /**
     * isset requiredRelatedItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredRelatedItem($index)
    {
        return isset($this->requiredRelatedItem[$index]);
    }

    /**
     * unset requiredRelatedItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredRelatedItem($index)
    {
        unset($this->requiredRelatedItem[$index]);
    }

    /**
     * Gets as requiredRelatedItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredRelatedItem[]
     */
    public function getRequiredRelatedItem()
    {
        return $this->requiredRelatedItem;
    }

    /**
     * Sets a new requiredRelatedItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredRelatedItem[] $requiredRelatedItem
     * @return self
     */
    public function setRequiredRelatedItem(?array $requiredRelatedItem = null)
    {
        $this->requiredRelatedItem = $requiredRelatedItem;
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
     * Adds as complementaryRelatedItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComplementaryRelatedItem $complementaryRelatedItem
     */
    public function addToComplementaryRelatedItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComplementaryRelatedItem $complementaryRelatedItem)
    {
        $this->complementaryRelatedItem[] = $complementaryRelatedItem;
        return $this;
    }

    /**
     * isset complementaryRelatedItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComplementaryRelatedItem($index)
    {
        return isset($this->complementaryRelatedItem[$index]);
    }

    /**
     * unset complementaryRelatedItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComplementaryRelatedItem($index)
    {
        unset($this->complementaryRelatedItem[$index]);
    }

    /**
     * Gets as complementaryRelatedItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComplementaryRelatedItem[]
     */
    public function getComplementaryRelatedItem()
    {
        return $this->complementaryRelatedItem;
    }

    /**
     * Sets a new complementaryRelatedItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ComplementaryRelatedItem[] $complementaryRelatedItem
     * @return self
     */
    public function setComplementaryRelatedItem(?array $complementaryRelatedItem = null)
    {
        $this->complementaryRelatedItem = $complementaryRelatedItem;
        return $this;
    }

    /**
     * Adds as replacedRelatedItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacedRelatedItem $replacedRelatedItem
     */
    public function addToReplacedRelatedItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacedRelatedItem $replacedRelatedItem)
    {
        $this->replacedRelatedItem[] = $replacedRelatedItem;
        return $this;
    }

    /**
     * isset replacedRelatedItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacedRelatedItem($index)
    {
        return isset($this->replacedRelatedItem[$index]);
    }

    /**
     * unset replacedRelatedItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacedRelatedItem($index)
    {
        unset($this->replacedRelatedItem[$index]);
    }

    /**
     * Gets as replacedRelatedItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacedRelatedItem[]
     */
    public function getReplacedRelatedItem()
    {
        return $this->replacedRelatedItem;
    }

    /**
     * Sets a new replacedRelatedItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacedRelatedItem[] $replacedRelatedItem
     * @return self
     */
    public function setReplacedRelatedItem(?array $replacedRelatedItem = null)
    {
        $this->replacedRelatedItem = $replacedRelatedItem;
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
     * Adds as keywordItemProperty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\KeywordItemProperty $keywordItemProperty
     */
    public function addToKeywordItemProperty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\KeywordItemProperty $keywordItemProperty)
    {
        $this->keywordItemProperty[] = $keywordItemProperty;
        return $this;
    }

    /**
     * isset keywordItemProperty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeywordItemProperty($index)
    {
        return isset($this->keywordItemProperty[$index]);
    }

    /**
     * unset keywordItemProperty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeywordItemProperty($index)
    {
        unset($this->keywordItemProperty[$index]);
    }

    /**
     * Gets as keywordItemProperty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\KeywordItemProperty[]
     */
    public function getKeywordItemProperty()
    {
        return $this->keywordItemProperty;
    }

    /**
     * Sets a new keywordItemProperty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\KeywordItemProperty[] $keywordItemProperty
     * @return self
     */
    public function setKeywordItemProperty(?array $keywordItemProperty = null)
    {
        $this->keywordItemProperty = $keywordItemProperty;
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

