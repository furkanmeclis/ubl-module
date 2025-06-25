<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EvidenceType
 *
 *
 * XSD Type: EvidenceType
 */
class EvidenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EvidenceTypeCode $evidenceTypeCode
     */
    private $evidenceTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CandidateStatement[] $candidateStatement
     */
    private $candidateStatement = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceIssuingParty $evidenceIssuingParty
     */
    private $evidenceIssuingParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Language $language
     */
    private $language = null;

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
     * Gets as evidenceTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EvidenceTypeCode
     */
    public function getEvidenceTypeCode()
    {
        return $this->evidenceTypeCode;
    }

    /**
     * Sets a new evidenceTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EvidenceTypeCode $evidenceTypeCode
     * @return self
     */
    public function setEvidenceTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EvidenceTypeCode $evidenceTypeCode = null)
    {
        $this->evidenceTypeCode = $evidenceTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as candidateStatement
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CandidateStatement $candidateStatement
     */
    public function addToCandidateStatement(\FurkanMeclis\GIB\UBL\Common\BasicComponents\CandidateStatement $candidateStatement)
    {
        $this->candidateStatement[] = $candidateStatement;
        return $this;
    }

    /**
     * isset candidateStatement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCandidateStatement($index)
    {
        return isset($this->candidateStatement[$index]);
    }

    /**
     * unset candidateStatement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCandidateStatement($index)
    {
        unset($this->candidateStatement[$index]);
    }

    /**
     * Gets as candidateStatement
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CandidateStatement[]
     */
    public function getCandidateStatement()
    {
        return $this->candidateStatement;
    }

    /**
     * Sets a new candidateStatement
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CandidateStatement[] $candidateStatement
     * @return self
     */
    public function setCandidateStatement(?array $candidateStatement = null)
    {
        $this->candidateStatement = $candidateStatement;
        return $this;
    }

    /**
     * Gets as evidenceIssuingParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceIssuingParty
     */
    public function getEvidenceIssuingParty()
    {
        return $this->evidenceIssuingParty;
    }

    /**
     * Sets a new evidenceIssuingParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceIssuingParty $evidenceIssuingParty
     * @return self
     */
    public function setEvidenceIssuingParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceIssuingParty $evidenceIssuingParty = null)
    {
        $this->evidenceIssuingParty = $evidenceIssuingParty;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Language $language
     * @return self
     */
    public function setLanguage(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Language $language = null)
    {
        $this->language = $language;
        return $this;
    }
}

