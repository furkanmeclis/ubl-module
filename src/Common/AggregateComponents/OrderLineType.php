<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing OrderLineType
 *
 *
 * XSD Type: OrderLineType
 */
class OrderLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubstitutionStatusCode $substitutionStatusCode
     */
    private $substitutionStatusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineItem $lineItem
     */
    private $lineItem = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     */
    private $sellerProposedSubstituteLineItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSubstitutedLineItem[] $sellerSubstitutedLineItem
     */
    private $sellerSubstitutedLineItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerProposedSubstituteLineItem[] $buyerProposedSubstituteLineItem
     */
    private $buyerProposedSubstituteLineItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CatalogueLineReference $catalogueLineReference
     */
    private $catalogueLineReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\QuotationLineReference $quotationLineReference
     */
    private $quotationLineReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference[] $orderLineReference
     */
    private $orderLineReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * Gets as substitutionStatusCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubstitutionStatusCode
     */
    public function getSubstitutionStatusCode()
    {
        return $this->substitutionStatusCode;
    }

    /**
     * Sets a new substitutionStatusCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubstitutionStatusCode $substitutionStatusCode
     * @return self
     */
    public function setSubstitutionStatusCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SubstitutionStatusCode $substitutionStatusCode = null)
    {
        $this->substitutionStatusCode = $substitutionStatusCode;
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
     * Gets as lineItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * Sets a new lineItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineItem $lineItem
     * @return self
     */
    public function setLineItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineItem $lineItem)
    {
        $this->lineItem = $lineItem;
        return $this;
    }

    /**
     * Adds as sellerProposedSubstituteLineItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem
     */
    public function addToSellerProposedSubstituteLineItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem)
    {
        $this->sellerProposedSubstituteLineItem[] = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * isset sellerProposedSubstituteLineItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerProposedSubstituteLineItem($index)
    {
        return isset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * unset sellerProposedSubstituteLineItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerProposedSubstituteLineItem($index)
    {
        unset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * Gets as sellerProposedSubstituteLineItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem[]
     */
    public function getSellerProposedSubstituteLineItem()
    {
        return $this->sellerProposedSubstituteLineItem;
    }

    /**
     * Sets a new sellerProposedSubstituteLineItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     * @return self
     */
    public function setSellerProposedSubstituteLineItem(?array $sellerProposedSubstituteLineItem = null)
    {
        $this->sellerProposedSubstituteLineItem = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * Adds as sellerSubstitutedLineItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSubstitutedLineItem $sellerSubstitutedLineItem
     */
    public function addToSellerSubstitutedLineItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSubstitutedLineItem $sellerSubstitutedLineItem)
    {
        $this->sellerSubstitutedLineItem[] = $sellerSubstitutedLineItem;
        return $this;
    }

    /**
     * isset sellerSubstitutedLineItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerSubstitutedLineItem($index)
    {
        return isset($this->sellerSubstitutedLineItem[$index]);
    }

    /**
     * unset sellerSubstitutedLineItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerSubstitutedLineItem($index)
    {
        unset($this->sellerSubstitutedLineItem[$index]);
    }

    /**
     * Gets as sellerSubstitutedLineItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSubstitutedLineItem[]
     */
    public function getSellerSubstitutedLineItem()
    {
        return $this->sellerSubstitutedLineItem;
    }

    /**
     * Sets a new sellerSubstitutedLineItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerSubstitutedLineItem[] $sellerSubstitutedLineItem
     * @return self
     */
    public function setSellerSubstitutedLineItem(?array $sellerSubstitutedLineItem = null)
    {
        $this->sellerSubstitutedLineItem = $sellerSubstitutedLineItem;
        return $this;
    }

    /**
     * Adds as buyerProposedSubstituteLineItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerProposedSubstituteLineItem $buyerProposedSubstituteLineItem
     */
    public function addToBuyerProposedSubstituteLineItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerProposedSubstituteLineItem $buyerProposedSubstituteLineItem)
    {
        $this->buyerProposedSubstituteLineItem[] = $buyerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * isset buyerProposedSubstituteLineItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyerProposedSubstituteLineItem($index)
    {
        return isset($this->buyerProposedSubstituteLineItem[$index]);
    }

    /**
     * unset buyerProposedSubstituteLineItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyerProposedSubstituteLineItem($index)
    {
        unset($this->buyerProposedSubstituteLineItem[$index]);
    }

    /**
     * Gets as buyerProposedSubstituteLineItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerProposedSubstituteLineItem[]
     */
    public function getBuyerProposedSubstituteLineItem()
    {
        return $this->buyerProposedSubstituteLineItem;
    }

    /**
     * Sets a new buyerProposedSubstituteLineItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyerProposedSubstituteLineItem[] $buyerProposedSubstituteLineItem
     * @return self
     */
    public function setBuyerProposedSubstituteLineItem(?array $buyerProposedSubstituteLineItem = null)
    {
        $this->buyerProposedSubstituteLineItem = $buyerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * Gets as catalogueLineReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CatalogueLineReference
     */
    public function getCatalogueLineReference()
    {
        return $this->catalogueLineReference;
    }

    /**
     * Sets a new catalogueLineReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CatalogueLineReference $catalogueLineReference
     * @return self
     */
    public function setCatalogueLineReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CatalogueLineReference $catalogueLineReference = null)
    {
        $this->catalogueLineReference = $catalogueLineReference;
        return $this;
    }

    /**
     * Gets as quotationLineReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\QuotationLineReference
     */
    public function getQuotationLineReference()
    {
        return $this->quotationLineReference;
    }

    /**
     * Sets a new quotationLineReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\QuotationLineReference $quotationLineReference
     * @return self
     */
    public function setQuotationLineReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\QuotationLineReference $quotationLineReference = null)
    {
        $this->quotationLineReference = $quotationLineReference;
        return $this;
    }

    /**
     * Adds as orderLineReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference
     */
    public function addToOrderLineReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference[] = $orderLineReference;
        return $this;
    }

    /**
     * isset orderLineReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderLineReference($index)
    {
        return isset($this->orderLineReference[$index]);
    }

    /**
     * unset orderLineReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderLineReference($index)
    {
        unset($this->orderLineReference[$index]);
    }

    /**
     * Gets as orderLineReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference[]
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OrderLineReference[] $orderLineReference
     * @return self
     */
    public function setOrderLineReference(?array $orderLineReference = null)
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
}

