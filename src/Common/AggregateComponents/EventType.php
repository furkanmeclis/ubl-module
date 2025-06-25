<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EventType
 *
 *
 * XSD Type: EventType
 */
class EventType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\IdentificationID $identificationID
     */
    private $identificationID = null;

    /**
     * @var \DateTime $occurrenceDate
     */
    private $occurrenceDate = null;

    /**
     * @var \DateTime $occurrenceTime
     */
    private $occurrenceTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TypeCode $typeCode
     */
    private $typeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var bool $completionIndicator
     */
    private $completionIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CurrentStatus[] $currentStatus
     */
    private $currentStatus = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact[] $contact
     */
    private $contact = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OccurenceLocation $occurenceLocation
     */
    private $occurenceLocation = null;

    /**
     * Gets as identificationID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\IdentificationID
     */
    public function getIdentificationID()
    {
        return $this->identificationID;
    }

    /**
     * Sets a new identificationID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\IdentificationID $identificationID
     * @return self
     */
    public function setIdentificationID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\IdentificationID $identificationID = null)
    {
        $this->identificationID = $identificationID;
        return $this;
    }

    /**
     * Gets as occurrenceDate
     *
     * @return \DateTime
     */
    public function getOccurrenceDate()
    {
        return $this->occurrenceDate;
    }

    /**
     * Sets a new occurrenceDate
     *
     * @param \DateTime $occurrenceDate
     * @return self
     */
    public function setOccurrenceDate(?\DateTime $occurrenceDate = null)
    {
        $this->occurrenceDate = $occurrenceDate;
        return $this;
    }

    /**
     * Gets as occurrenceTime
     *
     * @return \DateTime
     */
    public function getOccurrenceTime()
    {
        return $this->occurrenceTime;
    }

    /**
     * Sets a new occurrenceTime
     *
     * @param \DateTime $occurrenceTime
     * @return self
     */
    public function setOccurrenceTime(?\DateTime $occurrenceTime = null)
    {
        $this->occurrenceTime = $occurrenceTime;
        return $this;
    }

    /**
     * Gets as typeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TypeCode
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Sets a new typeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TypeCode $typeCode
     * @return self
     */
    public function setTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TypeCode $typeCode = null)
    {
        $this->typeCode = $typeCode;
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
     * Gets as completionIndicator
     *
     * @return bool
     */
    public function getCompletionIndicator()
    {
        return $this->completionIndicator;
    }

    /**
     * Sets a new completionIndicator
     *
     * @param bool $completionIndicator
     * @return self
     */
    public function setCompletionIndicator($completionIndicator)
    {
        $this->completionIndicator = $completionIndicator;
        return $this;
    }

    /**
     * Adds as currentStatus
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CurrentStatus $currentStatus
     */
    public function addToCurrentStatus(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CurrentStatus $currentStatus)
    {
        $this->currentStatus[] = $currentStatus;
        return $this;
    }

    /**
     * isset currentStatus
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrentStatus($index)
    {
        return isset($this->currentStatus[$index]);
    }

    /**
     * unset currentStatus
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrentStatus($index)
    {
        unset($this->currentStatus[$index]);
    }

    /**
     * Gets as currentStatus
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CurrentStatus[]
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * Sets a new currentStatus
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CurrentStatus[] $currentStatus
     * @return self
     */
    public function setCurrentStatus(?array $currentStatus = null)
    {
        $this->currentStatus = $currentStatus;
        return $this;
    }

    /**
     * Adds as contact
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact $contact
     */
    public function addToContact(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact[] $contact
     * @return self
     */
    public function setContact(?array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as occurenceLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OccurenceLocation
     */
    public function getOccurenceLocation()
    {
        return $this->occurenceLocation;
    }

    /**
     * Sets a new occurenceLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OccurenceLocation $occurenceLocation
     * @return self
     */
    public function setOccurenceLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OccurenceLocation $occurenceLocation = null)
    {
        $this->occurenceLocation = $occurenceLocation;
        return $this;
    }
}

