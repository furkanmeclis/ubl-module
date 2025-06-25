<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DocumentReferenceType
 *
 *
 * XSD Type: DocumentReferenceType
 */
class DocumentReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentTypeCode $documentTypeCode
     */
    private $documentTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentType $documentType
     */
    private $documentType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentDescription[] $documentDescription
     */
    private $documentDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Attachment $attachment
     */
    private $attachment = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

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
     * Gets as documentTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentTypeCode
     */
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Sets a new documentTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentTypeCode $documentTypeCode
     * @return self
     */
    public function setDocumentTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentTypeCode $documentTypeCode = null)
    {
        $this->documentTypeCode = $documentTypeCode;
        return $this;
    }

    /**
     * Gets as documentType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Sets a new documentType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentType $documentType
     * @return self
     */
    public function setDocumentType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentType $documentType = null)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Adds as documentDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentDescription $documentDescription
     */
    public function addToDocumentDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentDescription $documentDescription)
    {
        $this->documentDescription[] = $documentDescription;
        return $this;
    }

    /**
     * isset documentDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentDescription($index)
    {
        return isset($this->documentDescription[$index]);
    }

    /**
     * unset documentDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentDescription($index)
    {
        unset($this->documentDescription[$index]);
    }

    /**
     * Gets as documentDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentDescription[]
     */
    public function getDocumentDescription()
    {
        return $this->documentDescription;
    }

    /**
     * Sets a new documentDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentDescription[] $documentDescription
     * @return self
     */
    public function setDocumentDescription(?array $documentDescription = null)
    {
        $this->documentDescription = $documentDescription;
        return $this;
    }

    /**
     * Gets as attachment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Attachment $attachment
     * @return self
     */
    public function setAttachment(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Attachment $attachment = null)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }
}

