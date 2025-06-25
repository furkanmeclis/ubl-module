<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing WorkPhaseReferenceType
 *
 *
 * XSD Type: WorkPhaseReferenceType
 */
class WorkPhaseReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\WorkPhaseCode $workPhaseCode
     */
    private $workPhaseCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\WorkPhase[] $workPhase
     */
    private $workPhase = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProgressPercent $progressPercent
     */
    private $progressPercent = null;

    /**
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WorkOrderDocumentReference[] $workOrderDocumentReference
     */
    private $workOrderDocumentReference = [
        
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
    public function setID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as workPhaseCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\WorkPhaseCode
     */
    public function getWorkPhaseCode()
    {
        return $this->workPhaseCode;
    }

    /**
     * Sets a new workPhaseCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\WorkPhaseCode $workPhaseCode
     * @return self
     */
    public function setWorkPhaseCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\WorkPhaseCode $workPhaseCode = null)
    {
        $this->workPhaseCode = $workPhaseCode;
        return $this;
    }

    /**
     * Adds as workPhase
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\WorkPhase $workPhase
     */
    public function addToWorkPhase(\FurkanMeclis\GIB\UBL\Common\BasicComponents\WorkPhase $workPhase)
    {
        $this->workPhase[] = $workPhase;
        return $this;
    }

    /**
     * isset workPhase
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkPhase($index)
    {
        return isset($this->workPhase[$index]);
    }

    /**
     * unset workPhase
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkPhase($index)
    {
        unset($this->workPhase[$index]);
    }

    /**
     * Gets as workPhase
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\WorkPhase[]
     */
    public function getWorkPhase()
    {
        return $this->workPhase;
    }

    /**
     * Sets a new workPhase
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\WorkPhase[] $workPhase
     * @return self
     */
    public function setWorkPhase(?array $workPhase = null)
    {
        $this->workPhase = $workPhase;
        return $this;
    }

    /**
     * Gets as progressPercent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProgressPercent
     */
    public function getProgressPercent()
    {
        return $this->progressPercent;
    }

    /**
     * Sets a new progressPercent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProgressPercent $progressPercent
     * @return self
     */
    public function setProgressPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ProgressPercent $progressPercent = null)
    {
        $this->progressPercent = $progressPercent;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(?\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(?\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Adds as workOrderDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WorkOrderDocumentReference $workOrderDocumentReference
     */
    public function addToWorkOrderDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\WorkOrderDocumentReference $workOrderDocumentReference)
    {
        $this->workOrderDocumentReference[] = $workOrderDocumentReference;
        return $this;
    }

    /**
     * isset workOrderDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkOrderDocumentReference($index)
    {
        return isset($this->workOrderDocumentReference[$index]);
    }

    /**
     * unset workOrderDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkOrderDocumentReference($index)
    {
        unset($this->workOrderDocumentReference[$index]);
    }

    /**
     * Gets as workOrderDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WorkOrderDocumentReference[]
     */
    public function getWorkOrderDocumentReference()
    {
        return $this->workOrderDocumentReference;
    }

    /**
     * Sets a new workOrderDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WorkOrderDocumentReference[] $workOrderDocumentReference
     * @return self
     */
    public function setWorkOrderDocumentReference(?array $workOrderDocumentReference = null)
    {
        $this->workOrderDocumentReference = $workOrderDocumentReference;
        return $this;
    }
}

