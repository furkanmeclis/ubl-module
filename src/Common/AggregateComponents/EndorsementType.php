<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EndorsementType
 *
 *
 * XSD Type: EndorsementType
 */
class EndorsementType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentID $documentID
     */
    private $documentID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ApprovalStatus $approvalStatus
     */
    private $approvalStatus = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EndorserParty $endorserParty
     */
    private $endorserParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Gets as documentID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentID
     */
    public function getDocumentID()
    {
        return $this->documentID;
    }

    /**
     * Sets a new documentID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentID $documentID
     * @return self
     */
    public function setDocumentID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentID $documentID)
    {
        $this->documentID = $documentID;
        return $this;
    }

    /**
     * Gets as approvalStatus
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ApprovalStatus
     */
    public function getApprovalStatus()
    {
        return $this->approvalStatus;
    }

    /**
     * Sets a new approvalStatus
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ApprovalStatus $approvalStatus
     * @return self
     */
    public function setApprovalStatus(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ApprovalStatus $approvalStatus)
    {
        $this->approvalStatus = $approvalStatus;
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
     * Gets as endorserParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EndorserParty
     */
    public function getEndorserParty()
    {
        return $this->endorserParty;
    }

    /**
     * Sets a new endorserParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EndorserParty $endorserParty
     * @return self
     */
    public function setEndorserParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EndorserParty $endorserParty)
    {
        $this->endorserParty = $endorserParty;
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

