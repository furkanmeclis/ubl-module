<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TransportScheduleType
 *
 *
 * XSD Type: TransportScheduleType
 */
class TransportScheduleType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * @var \DateTime $referenceDate
     */
    private $referenceDate = null;

    /**
     * @var \DateTime $referenceTime
     */
    private $referenceTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReliabilityPercent $reliabilityPercent
     */
    private $reliabilityPercent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\StatusLocation $statusLocation
     */
    private $statusLocation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualArrivalTransportEvent $actualArrivalTransportEvent
     */
    private $actualArrivalTransportEvent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualDepartureTransportEvent $actualDepartureTransportEvent
     */
    private $actualDepartureTransportEvent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     */
    private $estimatedDepartureTransportEvent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     */
    private $estimatedArrivalTransportEvent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     */
    private $plannedDepartureTransportEvent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     */
    private $plannedArrivalTransportEvent = null;

    /**
     * Gets as sequenceNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(\FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as referenceDate
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * Sets a new referenceDate
     *
     * @param \DateTime $referenceDate
     * @return self
     */
    public function setReferenceDate(?\DateTime $referenceDate = null)
    {
        $this->referenceDate = $referenceDate;
        return $this;
    }

    /**
     * Gets as referenceTime
     *
     * @return \DateTime
     */
    public function getReferenceTime()
    {
        return $this->referenceTime;
    }

    /**
     * Sets a new referenceTime
     *
     * @param \DateTime $referenceTime
     * @return self
     */
    public function setReferenceTime(?\DateTime $referenceTime = null)
    {
        $this->referenceTime = $referenceTime;
        return $this;
    }

    /**
     * Gets as reliabilityPercent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReliabilityPercent
     */
    public function getReliabilityPercent()
    {
        return $this->reliabilityPercent;
    }

    /**
     * Sets a new reliabilityPercent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReliabilityPercent $reliabilityPercent
     * @return self
     */
    public function setReliabilityPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReliabilityPercent $reliabilityPercent = null)
    {
        $this->reliabilityPercent = $reliabilityPercent;
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
     * Gets as statusLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\StatusLocation
     */
    public function getStatusLocation()
    {
        return $this->statusLocation;
    }

    /**
     * Sets a new statusLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\StatusLocation $statusLocation
     * @return self
     */
    public function setStatusLocation(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\StatusLocation $statusLocation)
    {
        $this->statusLocation = $statusLocation;
        return $this;
    }

    /**
     * Gets as actualArrivalTransportEvent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualArrivalTransportEvent
     */
    public function getActualArrivalTransportEvent()
    {
        return $this->actualArrivalTransportEvent;
    }

    /**
     * Sets a new actualArrivalTransportEvent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualArrivalTransportEvent $actualArrivalTransportEvent
     * @return self
     */
    public function setActualArrivalTransportEvent(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualArrivalTransportEvent $actualArrivalTransportEvent = null)
    {
        $this->actualArrivalTransportEvent = $actualArrivalTransportEvent;
        return $this;
    }

    /**
     * Gets as actualDepartureTransportEvent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualDepartureTransportEvent
     */
    public function getActualDepartureTransportEvent()
    {
        return $this->actualDepartureTransportEvent;
    }

    /**
     * Sets a new actualDepartureTransportEvent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualDepartureTransportEvent $actualDepartureTransportEvent
     * @return self
     */
    public function setActualDepartureTransportEvent(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualDepartureTransportEvent $actualDepartureTransportEvent = null)
    {
        $this->actualDepartureTransportEvent = $actualDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as estimatedDepartureTransportEvent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDepartureTransportEvent
     */
    public function getEstimatedDepartureTransportEvent()
    {
        return $this->estimatedDepartureTransportEvent;
    }

    /**
     * Sets a new estimatedDepartureTransportEvent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     * @return self
     */
    public function setEstimatedDepartureTransportEvent(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent = null)
    {
        $this->estimatedDepartureTransportEvent = $estimatedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as estimatedArrivalTransportEvent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedArrivalTransportEvent
     */
    public function getEstimatedArrivalTransportEvent()
    {
        return $this->estimatedArrivalTransportEvent;
    }

    /**
     * Sets a new estimatedArrivalTransportEvent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     * @return self
     */
    public function setEstimatedArrivalTransportEvent(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent = null)
    {
        $this->estimatedArrivalTransportEvent = $estimatedArrivalTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedDepartureTransportEvent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedDepartureTransportEvent
     */
    public function getPlannedDepartureTransportEvent()
    {
        return $this->plannedDepartureTransportEvent;
    }

    /**
     * Sets a new plannedDepartureTransportEvent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     * @return self
     */
    public function setPlannedDepartureTransportEvent(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedDepartureTransportEvent $plannedDepartureTransportEvent = null)
    {
        $this->plannedDepartureTransportEvent = $plannedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedArrivalTransportEvent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedArrivalTransportEvent
     */
    public function getPlannedArrivalTransportEvent()
    {
        return $this->plannedArrivalTransportEvent;
    }

    /**
     * Sets a new plannedArrivalTransportEvent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     * @return self
     */
    public function setPlannedArrivalTransportEvent(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedArrivalTransportEvent $plannedArrivalTransportEvent = null)
    {
        $this->plannedArrivalTransportEvent = $plannedArrivalTransportEvent;
        return $this;
    }
}

