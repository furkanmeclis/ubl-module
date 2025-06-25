<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PromotionalEventType
 *
 *
 * XSD Type: PromotionalEventType
 */
class PromotionalEventType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PromotionalEventTypeCode $promotionalEventTypeCode
     */
    private $promotionalEventTypeCode = null;

    /**
     * @var \DateTime $submissionDate
     */
    private $submissionDate = null;

    /**
     * @var \DateTime $firstShipmentAvailibilityDate
     */
    private $firstShipmentAvailibilityDate = null;

    /**
     * @var \DateTime $latestProposalAcceptanceDate
     */
    private $latestProposalAcceptanceDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalSpecification[] $promotionalSpecification
     */
    private $promotionalSpecification = [
        
    ];

    /**
     * Gets as promotionalEventTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PromotionalEventTypeCode
     */
    public function getPromotionalEventTypeCode()
    {
        return $this->promotionalEventTypeCode;
    }

    /**
     * Sets a new promotionalEventTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PromotionalEventTypeCode $promotionalEventTypeCode
     * @return self
     */
    public function setPromotionalEventTypeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PromotionalEventTypeCode $promotionalEventTypeCode)
    {
        $this->promotionalEventTypeCode = $promotionalEventTypeCode;
        return $this;
    }

    /**
     * Gets as submissionDate
     *
     * @return \DateTime
     */
    public function getSubmissionDate()
    {
        return $this->submissionDate;
    }

    /**
     * Sets a new submissionDate
     *
     * @param \DateTime $submissionDate
     * @return self
     */
    public function setSubmissionDate(?\DateTime $submissionDate = null)
    {
        $this->submissionDate = $submissionDate;
        return $this;
    }

    /**
     * Gets as firstShipmentAvailibilityDate
     *
     * @return \DateTime
     */
    public function getFirstShipmentAvailibilityDate()
    {
        return $this->firstShipmentAvailibilityDate;
    }

    /**
     * Sets a new firstShipmentAvailibilityDate
     *
     * @param \DateTime $firstShipmentAvailibilityDate
     * @return self
     */
    public function setFirstShipmentAvailibilityDate(?\DateTime $firstShipmentAvailibilityDate = null)
    {
        $this->firstShipmentAvailibilityDate = $firstShipmentAvailibilityDate;
        return $this;
    }

    /**
     * Gets as latestProposalAcceptanceDate
     *
     * @return \DateTime
     */
    public function getLatestProposalAcceptanceDate()
    {
        return $this->latestProposalAcceptanceDate;
    }

    /**
     * Sets a new latestProposalAcceptanceDate
     *
     * @param \DateTime $latestProposalAcceptanceDate
     * @return self
     */
    public function setLatestProposalAcceptanceDate(?\DateTime $latestProposalAcceptanceDate = null)
    {
        $this->latestProposalAcceptanceDate = $latestProposalAcceptanceDate;
        return $this;
    }

    /**
     * Adds as promotionalSpecification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalSpecification $promotionalSpecification
     */
    public function addToPromotionalSpecification(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalSpecification $promotionalSpecification)
    {
        $this->promotionalSpecification[] = $promotionalSpecification;
        return $this;
    }

    /**
     * isset promotionalSpecification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalSpecification($index)
    {
        return isset($this->promotionalSpecification[$index]);
    }

    /**
     * unset promotionalSpecification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalSpecification($index)
    {
        unset($this->promotionalSpecification[$index]);
    }

    /**
     * Gets as promotionalSpecification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalSpecification[]
     */
    public function getPromotionalSpecification()
    {
        return $this->promotionalSpecification;
    }

    /**
     * Sets a new promotionalSpecification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalSpecification[] $promotionalSpecification
     * @return self
     */
    public function setPromotionalSpecification(array $promotionalSpecification)
    {
        $this->promotionalSpecification = $promotionalSpecification;
        return $this;
    }
}

