<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ContractingActivityType
 *
 *
 * XSD Type: ContractingActivityType
 */
class ContractingActivityType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActivityTypeCode $activityTypeCode
     */
    private $activityTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActivityType $activityType
     */
    private $activityType = null;

    /**
     * Gets as activityTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActivityTypeCode
     */
    public function getActivityTypeCode()
    {
        return $this->activityTypeCode;
    }

    /**
     * Sets a new activityTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActivityTypeCode $activityTypeCode
     * @return self
     */
    public function setActivityTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ActivityTypeCode $activityTypeCode = null)
    {
        $this->activityTypeCode = $activityTypeCode;
        return $this;
    }

    /**
     * Gets as activityType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActivityType
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * Sets a new activityType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ActivityType $activityType
     * @return self
     */
    public function setActivityType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ActivityType $activityType = null)
    {
        $this->activityType = $activityType;
        return $this;
    }
}

