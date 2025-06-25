<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing RequestForQuotationLineType
 *
 *
 * XSD Type: RequestForQuotationLineType
 */
class RequestForQuotationLineType
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
     * @var bool $optionalLineItemIndicator
     */
    private $optionalLineItemIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrivacyCode $privacyCode
     */
    private $privacyCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SecurityClassificationCode $securityClassificationCode
     */
    private $securityClassificationCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineItem $lineItem
     */
    private $lineItem = null;

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
     * Gets as optionalLineItemIndicator
     *
     * @return bool
     */
    public function getOptionalLineItemIndicator()
    {
        return $this->optionalLineItemIndicator;
    }

    /**
     * Sets a new optionalLineItemIndicator
     *
     * @param bool $optionalLineItemIndicator
     * @return self
     */
    public function setOptionalLineItemIndicator($optionalLineItemIndicator)
    {
        $this->optionalLineItemIndicator = $optionalLineItemIndicator;
        return $this;
    }

    /**
     * Gets as privacyCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrivacyCode
     */
    public function getPrivacyCode()
    {
        return $this->privacyCode;
    }

    /**
     * Sets a new privacyCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrivacyCode $privacyCode
     * @return self
     */
    public function setPrivacyCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PrivacyCode $privacyCode = null)
    {
        $this->privacyCode = $privacyCode;
        return $this;
    }

    /**
     * Gets as securityClassificationCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SecurityClassificationCode
     */
    public function getSecurityClassificationCode()
    {
        return $this->securityClassificationCode;
    }

    /**
     * Sets a new securityClassificationCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SecurityClassificationCode $securityClassificationCode
     * @return self
     */
    public function setSecurityClassificationCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SecurityClassificationCode $securityClassificationCode = null)
    {
        $this->securityClassificationCode = $securityClassificationCode;
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
}

