<?php

namespace FurkanMeclis\GIB\UBL\ReceiptAdvice;

/**
 * Class representing ReceiptAdviceType
 *
 *
 * XSD Type: ReceiptAdviceType
 */
class ReceiptAdviceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceiptAdviceTypeCode $receiptAdviceTypeCode
     */
    private $receiptAdviceTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderReference[] $orderReference
     */
    private $orderReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchDocumentReference $despatchDocumentReference
     */
    private $despatchDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     */
    private $additionalDocumentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryCustomerParty $deliveryCustomerParty
     */
    private $deliveryCustomerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchSupplierParty $despatchSupplierParty
     */
    private $despatchSupplierParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReceiptLine[] $receiptLine
     */
    private $receiptLine = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\ExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\FurkanMeclis\GIB\UBL\Common\ExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtensions($index)
    {
        return isset($this->uBLExtensions[$index]);
    }

    /**
     * unset uBLExtensions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtensions($index)
    {
        unset($this->uBLExtensions[$index]);
    }

    /**
     * Gets as uBLExtensions
     *
     * @return \FurkanMeclis\GIB\UBL\Common\ExtensionComponents\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * @param \FurkanMeclis\GIB\UBL\Common\ExtensionComponents\UBLExtension[] $uBLExtensions
     * @return self
     */
    public function setUBLExtensions(array $uBLExtensions)
    {
        $this->uBLExtensions = $uBLExtensions;
        return $this;
    }

    /**
     * Gets as uBLVersionID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\UBLVersionID
     */
    public function getUBLVersionID()
    {
        return $this->uBLVersionID;
    }

    /**
     * Sets a new uBLVersionID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\UBLVersionID $uBLVersionID
     * @return self
     */
    public function setUBLVersionID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\UBLVersionID $uBLVersionID)
    {
        $this->uBLVersionID = $uBLVersionID;
        return $this;
    }

    /**
     * Gets as customizationID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomizationID
     */
    public function getCustomizationID()
    {
        return $this->customizationID;
    }

    /**
     * Sets a new customizationID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomizationID $customizationID
     * @return self
     */
    public function setCustomizationID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomizationID $customizationID)
    {
        $this->customizationID = $customizationID;
        return $this;
    }

    /**
     * Gets as profileID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProfileID
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProfileID $profileID
     * @return self
     */
    public function setProfileID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ProfileID $profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

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
     * Gets as copyIndicator
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
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
    public function setUUID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID)
    {
        $this->uUID = $uUID;
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
     * Gets as issueTime
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(?\DateTime $issueTime = null)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as receiptAdviceTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceiptAdviceTypeCode
     */
    public function getReceiptAdviceTypeCode()
    {
        return $this->receiptAdviceTypeCode;
    }

    /**
     * Sets a new receiptAdviceTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceiptAdviceTypeCode $receiptAdviceTypeCode
     * @return self
     */
    public function setReceiptAdviceTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceiptAdviceTypeCode $receiptAdviceTypeCode = null)
    {
        $this->receiptAdviceTypeCode = $receiptAdviceTypeCode;
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
     * Gets as lineCountNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineCountNumeric
     */
    public function getLineCountNumeric()
    {
        return $this->lineCountNumeric;
    }

    /**
     * Sets a new lineCountNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineCountNumeric $lineCountNumeric
     * @return self
     */
    public function setLineCountNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LineCountNumeric $lineCountNumeric = null)
    {
        $this->lineCountNumeric = $lineCountNumeric;
        return $this;
    }

    /**
     * Adds as orderReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderReference $orderReference
     */
    public function addToOrderReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderReference $orderReference)
    {
        $this->orderReference[] = $orderReference;
        return $this;
    }

    /**
     * isset orderReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderReference($index)
    {
        return isset($this->orderReference[$index]);
    }

    /**
     * unset orderReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderReference($index)
    {
        unset($this->orderReference[$index]);
    }

    /**
     * Gets as orderReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderReference[]
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderReference[] $orderReference
     * @return self
     */
    public function setOrderReference(?array $orderReference = null)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * Gets as despatchDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchDocumentReference
     */
    public function getDespatchDocumentReference()
    {
        return $this->despatchDocumentReference;
    }

    /**
     * Sets a new despatchDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchDocumentReference $despatchDocumentReference
     * @return self
     */
    public function setDespatchDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchDocumentReference $despatchDocumentReference)
    {
        $this->despatchDocumentReference = $despatchDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    public function addToAdditionalDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * isset additionalDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDocumentReference($index)
    {
        return isset($this->additionalDocumentReference[$index]);
    }

    /**
     * unset additionalDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDocumentReference($index)
    {
        unset($this->additionalDocumentReference[$index]);
    }

    /**
     * Gets as additionalDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference[]
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(?array $additionalDocumentReference = null)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature $signature
     */
    public function addToSignature(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as deliveryCustomerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryCustomerParty
     */
    public function getDeliveryCustomerParty()
    {
        return $this->deliveryCustomerParty;
    }

    /**
     * Sets a new deliveryCustomerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryCustomerParty $deliveryCustomerParty
     * @return self
     */
    public function setDeliveryCustomerParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryCustomerParty $deliveryCustomerParty)
    {
        $this->deliveryCustomerParty = $deliveryCustomerParty;
        return $this;
    }

    /**
     * Gets as despatchSupplierParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchSupplierParty
     */
    public function getDespatchSupplierParty()
    {
        return $this->despatchSupplierParty;
    }

    /**
     * Sets a new despatchSupplierParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchSupplierParty $despatchSupplierParty
     * @return self
     */
    public function setDespatchSupplierParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchSupplierParty $despatchSupplierParty)
    {
        $this->despatchSupplierParty = $despatchSupplierParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerCustomerParty $buyerCustomerParty = null)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
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
     * Gets as shipment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as receiptLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReceiptLine $receiptLine
     */
    public function addToReceiptLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReceiptLine $receiptLine)
    {
        $this->receiptLine[] = $receiptLine;
        return $this;
    }

    /**
     * isset receiptLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptLine($index)
    {
        return isset($this->receiptLine[$index]);
    }

    /**
     * unset receiptLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptLine($index)
    {
        unset($this->receiptLine[$index]);
    }

    /**
     * Gets as receiptLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReceiptLine[]
     */
    public function getReceiptLine()
    {
        return $this->receiptLine;
    }

    /**
     * Sets a new receiptLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReceiptLine[] $receiptLine
     * @return self
     */
    public function setReceiptLine(array $receiptLine)
    {
        $this->receiptLine = $receiptLine;
        return $this;
    }
}

