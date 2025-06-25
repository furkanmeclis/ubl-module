<?php

namespace FurkanMeclis\GIB\UBL\ApplicationResponse;

/**
 * Class representing ApplicationResponseType
 *
 *
 * XSD Type: ApplicationResponseType
 */
class ApplicationResponseType
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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SenderParty $senderParty
     */
    private $senderParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReceiverParty $receiverParty
     */
    private $receiverParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentResponse[] $documentResponse
     */
    private $documentResponse = [
        
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
    public function setUBLExtensions(?array $uBLExtensions = null)
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
    public function setSignature(?array $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as senderParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SenderParty
     */
    public function getSenderParty()
    {
        return $this->senderParty;
    }

    /**
     * Sets a new senderParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SenderParty $senderParty
     * @return self
     */
    public function setSenderParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SenderParty $senderParty)
    {
        $this->senderParty = $senderParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReceiverParty
     */
    public function getReceiverParty()
    {
        return $this->receiverParty;
    }

    /**
     * Sets a new receiverParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReceiverParty $receiverParty
     * @return self
     */
    public function setReceiverParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReceiverParty $receiverParty)
    {
        $this->receiverParty = $receiverParty;
        return $this;
    }

    /**
     * Adds as documentResponse
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentResponse $documentResponse
     */
    public function addToDocumentResponse(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentResponse $documentResponse)
    {
        $this->documentResponse[] = $documentResponse;
        return $this;
    }

    /**
     * isset documentResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentResponse($index)
    {
        return isset($this->documentResponse[$index]);
    }

    /**
     * unset documentResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentResponse($index)
    {
        unset($this->documentResponse[$index]);
    }

    /**
     * Gets as documentResponse
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentResponse[]
     */
    public function getDocumentResponse()
    {
        return $this->documentResponse;
    }

    /**
     * Sets a new documentResponse
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentResponse[] $documentResponse
     * @return self
     */
    public function setDocumentResponse(array $documentResponse)
    {
        $this->documentResponse = $documentResponse;
        return $this;
    }
}

