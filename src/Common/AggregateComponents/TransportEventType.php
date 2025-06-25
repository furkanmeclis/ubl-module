<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TransportEventType
 *
 *
 * XSD Type: TransportEventType
 */
class TransportEventType
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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEventTypeCode $transportEventTypeCode
     */
    private $transportEventTypeCode = null;

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
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReportedShipment $reportedShipment
     */
    private $reportedShipment = null;

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
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Location $location
     */
    private $location = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature $signature
     */
    private $signature = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period[] $period
     */
    private $period = [
        
    ];

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
     * Gets as transportEventTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEventTypeCode
     */
    public function getTransportEventTypeCode()
    {
        return $this->transportEventTypeCode;
    }

    /**
     * Sets a new transportEventTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEventTypeCode $transportEventTypeCode
     * @return self
     */
    public function setTransportEventTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEventTypeCode $transportEventTypeCode = null)
    {
        $this->transportEventTypeCode = $transportEventTypeCode;
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
     * Gets as reportedShipment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReportedShipment
     */
    public function getReportedShipment()
    {
        return $this->reportedShipment;
    }

    /**
     * Sets a new reportedShipment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReportedShipment $reportedShipment
     * @return self
     */
    public function setReportedShipment(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReportedShipment $reportedShipment = null)
    {
        $this->reportedShipment = $reportedShipment;
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
     * Gets as location
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Location $location
     * @return self
     */
    public function setLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Location $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature $signature
     * @return self
     */
    public function setSignature(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Signature $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Adds as period
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     */
    public function addToPeriod(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period[] $period
     * @return self
     */
    public function setPeriod(?array $period = null)
    {
        $this->period = $period;
        return $this;
    }
}

