<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TenderPreparationType
 *
 *
 * XSD Type: TenderPreparationType
 */
class TenderPreparationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeID $tenderEnvelopeID
     */
    private $tenderEnvelopeID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     */
    private $tenderEnvelopeTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OpenTenderID $openTenderID
     */
    private $openTenderID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     */
    private $procurementProjectLot = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentTenderRequirement[] $documentTenderRequirement
     */
    private $documentTenderRequirement = [
        
    ];

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
    public function setTenderEnvelopeID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderEnvelopeID $tenderEnvelopeID)
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
     * Gets as openTenderID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OpenTenderID
     */
    public function getOpenTenderID()
    {
        return $this->openTenderID;
    }

    /**
     * Sets a new openTenderID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OpenTenderID $openTenderID
     * @return self
     */
    public function setOpenTenderID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OpenTenderID $openTenderID = null)
    {
        $this->openTenderID = $openTenderID;
        return $this;
    }

    /**
     * Adds as procurementProjectLot
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot $procurementProjectLot
     */
    public function addToProcurementProjectLot(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot $procurementProjectLot)
    {
        $this->procurementProjectLot[] = $procurementProjectLot;
        return $this;
    }

    /**
     * isset procurementProjectLot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementProjectLot($index)
    {
        return isset($this->procurementProjectLot[$index]);
    }

    /**
     * unset procurementProjectLot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementProjectLot($index)
    {
        unset($this->procurementProjectLot[$index]);
    }

    /**
     * Gets as procurementProjectLot
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot[]
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(?array $procurementProjectLot = null)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }

    /**
     * Adds as documentTenderRequirement
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentTenderRequirement $documentTenderRequirement
     */
    public function addToDocumentTenderRequirement(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentTenderRequirement $documentTenderRequirement)
    {
        $this->documentTenderRequirement[] = $documentTenderRequirement;
        return $this;
    }

    /**
     * isset documentTenderRequirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentTenderRequirement($index)
    {
        return isset($this->documentTenderRequirement[$index]);
    }

    /**
     * unset documentTenderRequirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentTenderRequirement($index)
    {
        unset($this->documentTenderRequirement[$index]);
    }

    /**
     * Gets as documentTenderRequirement
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentTenderRequirement[]
     */
    public function getDocumentTenderRequirement()
    {
        return $this->documentTenderRequirement;
    }

    /**
     * Sets a new documentTenderRequirement
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentTenderRequirement[] $documentTenderRequirement
     * @return self
     */
    public function setDocumentTenderRequirement(?array $documentTenderRequirement = null)
    {
        $this->documentTenderRequirement = $documentTenderRequirement;
        return $this;
    }
}

