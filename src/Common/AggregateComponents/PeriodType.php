<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PeriodType
 *
 *
 * XSD Type: PeriodType
 */
class PeriodType
{
    /**
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DurationMeasure $durationMeasure
     */
    private $durationMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    private $description = null;

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
     * Gets as startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(?\DateTime $startTime = null)
    {
        $this->startTime = $startTime;
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
     * Gets as endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(?\DateTime $endTime = null)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as durationMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DurationMeasure
     */
    public function getDurationMeasure()
    {
        return $this->durationMeasure;
    }

    /**
     * Sets a new durationMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DurationMeasure $durationMeasure
     * @return self
     */
    public function setDurationMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DurationMeasure $durationMeasure = null)
    {
        $this->durationMeasure = $durationMeasure;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     * @return self
     */
    public function setDescription(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

