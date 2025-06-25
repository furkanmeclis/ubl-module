<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CertificateType
 *
 *
 * XSD Type: CertificateType
 */
class CertificateType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CertificateTypeCode $certificateTypeCode
     */
    private $certificateTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CertificateType $certificateType
     */
    private $certificateType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
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
     * Gets as certificateTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CertificateTypeCode
     */
    public function getCertificateTypeCode()
    {
        return $this->certificateTypeCode;
    }

    /**
     * Sets a new certificateTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CertificateTypeCode $certificateTypeCode
     * @return self
     */
    public function setCertificateTypeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\CertificateTypeCode $certificateTypeCode)
    {
        $this->certificateTypeCode = $certificateTypeCode;
        return $this;
    }

    /**
     * Gets as certificateType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CertificateType
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * Sets a new certificateType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CertificateType $certificateType
     * @return self
     */
    public function setCertificateType(\FurkanMeclis\GIB\UBL\Common\BasicComponents\CertificateType $certificateType)
    {
        $this->certificateType = $certificateType;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Remarks $remarks
     */
    public function addToRemarks(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(?array $remarks = null)
    {
        $this->remarks = $remarks;
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
    public function setIssuerParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty $issuerParty)
    {
        $this->issuerParty = $issuerParty;
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
}

