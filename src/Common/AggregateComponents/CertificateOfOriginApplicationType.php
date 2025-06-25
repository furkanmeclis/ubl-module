<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CertificateOfOriginApplicationType
 *
 *
 * XSD Type: CertificateOfOriginApplicationType
 */
class CertificateOfOriginApplicationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReferenceID $referenceID
     */
    private $referenceID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CertificateType $certificateType
     */
    private $certificateType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ApplicationStatusCode $applicationStatusCode
     */
    private $applicationStatusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OriginalJobID $originalJobID
     */
    private $originalJobID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousJobID $previousJobID
     */
    private $previousJobID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EndorserParty[] $endorserParty
     */
    private $endorserParty = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreparationParty $preparationParty
     */
    private $preparationParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExporterParty $exporterParty
     */
    private $exporterParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ImporterParty $importerParty
     */
    private $importerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuingCountry $issuingCountry
     */
    private $issuingCountry = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentDistribution[] $documentDistribution
     */
    private $documentDistribution = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportingDocumentReference[] $supportingDocumentReference
     */
    private $supportingDocumentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Gets as referenceID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReferenceID
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReferenceID $referenceID
     * @return self
     */
    public function setReferenceID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReferenceID $referenceID)
    {
        $this->referenceID = $referenceID;
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
     * Gets as applicationStatusCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ApplicationStatusCode
     */
    public function getApplicationStatusCode()
    {
        return $this->applicationStatusCode;
    }

    /**
     * Sets a new applicationStatusCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ApplicationStatusCode $applicationStatusCode
     * @return self
     */
    public function setApplicationStatusCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ApplicationStatusCode $applicationStatusCode = null)
    {
        $this->applicationStatusCode = $applicationStatusCode;
        return $this;
    }

    /**
     * Gets as originalJobID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OriginalJobID
     */
    public function getOriginalJobID()
    {
        return $this->originalJobID;
    }

    /**
     * Sets a new originalJobID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OriginalJobID $originalJobID
     * @return self
     */
    public function setOriginalJobID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\OriginalJobID $originalJobID)
    {
        $this->originalJobID = $originalJobID;
        return $this;
    }

    /**
     * Gets as previousJobID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousJobID
     */
    public function getPreviousJobID()
    {
        return $this->previousJobID;
    }

    /**
     * Sets a new previousJobID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousJobID $previousJobID
     * @return self
     */
    public function setPreviousJobID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousJobID $previousJobID = null)
    {
        $this->previousJobID = $previousJobID;
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
    public function setShipment(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as endorserParty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EndorserParty $endorserParty
     */
    public function addToEndorserParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EndorserParty $endorserParty)
    {
        $this->endorserParty[] = $endorserParty;
        return $this;
    }

    /**
     * isset endorserParty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndorserParty($index)
    {
        return isset($this->endorserParty[$index]);
    }

    /**
     * unset endorserParty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndorserParty($index)
    {
        unset($this->endorserParty[$index]);
    }

    /**
     * Gets as endorserParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EndorserParty[]
     */
    public function getEndorserParty()
    {
        return $this->endorserParty;
    }

    /**
     * Sets a new endorserParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EndorserParty[] $endorserParty
     * @return self
     */
    public function setEndorserParty(array $endorserParty)
    {
        $this->endorserParty = $endorserParty;
        return $this;
    }

    /**
     * Gets as preparationParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreparationParty
     */
    public function getPreparationParty()
    {
        return $this->preparationParty;
    }

    /**
     * Sets a new preparationParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreparationParty $preparationParty
     * @return self
     */
    public function setPreparationParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreparationParty $preparationParty)
    {
        $this->preparationParty = $preparationParty;
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
     * Gets as exporterParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExporterParty
     */
    public function getExporterParty()
    {
        return $this->exporterParty;
    }

    /**
     * Sets a new exporterParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExporterParty $exporterParty
     * @return self
     */
    public function setExporterParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExporterParty $exporterParty = null)
    {
        $this->exporterParty = $exporterParty;
        return $this;
    }

    /**
     * Gets as importerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ImporterParty
     */
    public function getImporterParty()
    {
        return $this->importerParty;
    }

    /**
     * Sets a new importerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ImporterParty $importerParty
     * @return self
     */
    public function setImporterParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ImporterParty $importerParty = null)
    {
        $this->importerParty = $importerParty;
        return $this;
    }

    /**
     * Gets as issuingCountry
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuingCountry
     */
    public function getIssuingCountry()
    {
        return $this->issuingCountry;
    }

    /**
     * Sets a new issuingCountry
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuingCountry $issuingCountry
     * @return self
     */
    public function setIssuingCountry(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuingCountry $issuingCountry)
    {
        $this->issuingCountry = $issuingCountry;
        return $this;
    }

    /**
     * Adds as documentDistribution
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentDistribution $documentDistribution
     */
    public function addToDocumentDistribution(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentDistribution $documentDistribution)
    {
        $this->documentDistribution[] = $documentDistribution;
        return $this;
    }

    /**
     * isset documentDistribution
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentDistribution($index)
    {
        return isset($this->documentDistribution[$index]);
    }

    /**
     * unset documentDistribution
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentDistribution($index)
    {
        unset($this->documentDistribution[$index]);
    }

    /**
     * Gets as documentDistribution
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentDistribution[]
     */
    public function getDocumentDistribution()
    {
        return $this->documentDistribution;
    }

    /**
     * Sets a new documentDistribution
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentDistribution[] $documentDistribution
     * @return self
     */
    public function setDocumentDistribution(?array $documentDistribution = null)
    {
        $this->documentDistribution = $documentDistribution;
        return $this;
    }

    /**
     * Adds as supportingDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportingDocumentReference $supportingDocumentReference
     */
    public function addToSupportingDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportingDocumentReference $supportingDocumentReference)
    {
        $this->supportingDocumentReference[] = $supportingDocumentReference;
        return $this;
    }

    /**
     * isset supportingDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingDocumentReference($index)
    {
        return isset($this->supportingDocumentReference[$index]);
    }

    /**
     * unset supportingDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingDocumentReference($index)
    {
        unset($this->supportingDocumentReference[$index]);
    }

    /**
     * Gets as supportingDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportingDocumentReference[]
     */
    public function getSupportingDocumentReference()
    {
        return $this->supportingDocumentReference;
    }

    /**
     * Sets a new supportingDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportingDocumentReference[] $supportingDocumentReference
     * @return self
     */
    public function setSupportingDocumentReference(?array $supportingDocumentReference = null)
    {
        $this->supportingDocumentReference = $supportingDocumentReference;
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

