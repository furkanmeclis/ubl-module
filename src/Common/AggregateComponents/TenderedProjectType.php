<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TenderedProjectType
 *
 *
 * XSD Type: TenderedProjectType
 */
class TenderedProjectType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\VariantID $variantID
     */
    private $variantID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeAmount $feeAmount
     */
    private $feeAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription[] $feeDescription
     */
    private $feeDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeID $tenderEnvelopeID
     */
    private $tenderEnvelopeID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     */
    private $tenderEnvelopeTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot $procurementProjectLot
     */
    private $procurementProjectLot = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceDocumentReference[] $evidenceDocumentReference
     */
    private $evidenceDocumentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderLine[] $tenderLine
     */
    private $tenderLine = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterionResponse[] $awardingCriterionResponse
     */
    private $awardingCriterionResponse = [
        
    ];

    /**
     * Gets as variantID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\VariantID
     */
    public function getVariantID()
    {
        return $this->variantID;
    }

    /**
     * Sets a new variantID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\VariantID $variantID
     * @return self
     */
    public function setVariantID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\VariantID $variantID = null)
    {
        $this->variantID = $variantID;
        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeAmount
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeAmount $feeAmount
     * @return self
     */
    public function setFeeAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeAmount $feeAmount = null)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * Adds as feeDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription $feeDescription
     */
    public function addToFeeDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription $feeDescription)
    {
        $this->feeDescription[] = $feeDescription;
        return $this;
    }

    /**
     * isset feeDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeeDescription($index)
    {
        return isset($this->feeDescription[$index]);
    }

    /**
     * unset feeDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeeDescription($index)
    {
        unset($this->feeDescription[$index]);
    }

    /**
     * Gets as feeDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription[]
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription[] $feeDescription
     * @return self
     */
    public function setFeeDescription(?array $feeDescription = null)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }

    /**
     * Gets as tenderEnvelopeID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeID
     */
    public function getTenderEnvelopeID()
    {
        return $this->tenderEnvelopeID;
    }

    /**
     * Sets a new tenderEnvelopeID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeID $tenderEnvelopeID
     * @return self
     */
    public function setTenderEnvelopeID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeID $tenderEnvelopeID = null)
    {
        $this->tenderEnvelopeID = $tenderEnvelopeID;
        return $this;
    }

    /**
     * Gets as tenderEnvelopeTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeTypeCode
     */
    public function getTenderEnvelopeTypeCode()
    {
        return $this->tenderEnvelopeTypeCode;
    }

    /**
     * Sets a new tenderEnvelopeTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     * @return self
     */
    public function setTenderEnvelopeTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode = null)
    {
        $this->tenderEnvelopeTypeCode = $tenderEnvelopeTypeCode;
        return $this;
    }

    /**
     * Gets as procurementProjectLot
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot $procurementProjectLot = null)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }

    /**
     * Adds as evidenceDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceDocumentReference $evidenceDocumentReference
     */
    public function addToEvidenceDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceDocumentReference $evidenceDocumentReference)
    {
        $this->evidenceDocumentReference[] = $evidenceDocumentReference;
        return $this;
    }

    /**
     * isset evidenceDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceDocumentReference($index)
    {
        return isset($this->evidenceDocumentReference[$index]);
    }

    /**
     * unset evidenceDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceDocumentReference($index)
    {
        unset($this->evidenceDocumentReference[$index]);
    }

    /**
     * Gets as evidenceDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceDocumentReference[]
     */
    public function getEvidenceDocumentReference()
    {
        return $this->evidenceDocumentReference;
    }

    /**
     * Sets a new evidenceDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceDocumentReference[] $evidenceDocumentReference
     * @return self
     */
    public function setEvidenceDocumentReference(?array $evidenceDocumentReference = null)
    {
        $this->evidenceDocumentReference = $evidenceDocumentReference;
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
     * Gets as legalMonetaryTotal
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal = null)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * Adds as tenderLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderLine $tenderLine
     */
    public function addToTenderLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderLine $tenderLine)
    {
        $this->tenderLine[] = $tenderLine;
        return $this;
    }

    /**
     * isset tenderLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderLine($index)
    {
        return isset($this->tenderLine[$index]);
    }

    /**
     * unset tenderLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderLine($index)
    {
        unset($this->tenderLine[$index]);
    }

    /**
     * Gets as tenderLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderLine[]
     */
    public function getTenderLine()
    {
        return $this->tenderLine;
    }

    /**
     * Sets a new tenderLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderLine[] $tenderLine
     * @return self
     */
    public function setTenderLine(?array $tenderLine = null)
    {
        $this->tenderLine = $tenderLine;
        return $this;
    }

    /**
     * Adds as awardingCriterionResponse
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterionResponse $awardingCriterionResponse
     */
    public function addToAwardingCriterionResponse(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterionResponse $awardingCriterionResponse)
    {
        $this->awardingCriterionResponse[] = $awardingCriterionResponse;
        return $this;
    }

    /**
     * isset awardingCriterionResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAwardingCriterionResponse($index)
    {
        return isset($this->awardingCriterionResponse[$index]);
    }

    /**
     * unset awardingCriterionResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAwardingCriterionResponse($index)
    {
        unset($this->awardingCriterionResponse[$index]);
    }

    /**
     * Gets as awardingCriterionResponse
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterionResponse[]
     */
    public function getAwardingCriterionResponse()
    {
        return $this->awardingCriterionResponse;
    }

    /**
     * Sets a new awardingCriterionResponse
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterionResponse[] $awardingCriterionResponse
     * @return self
     */
    public function setAwardingCriterionResponse(?array $awardingCriterionResponse = null)
    {
        $this->awardingCriterionResponse = $awardingCriterionResponse;
        return $this;
    }
}

