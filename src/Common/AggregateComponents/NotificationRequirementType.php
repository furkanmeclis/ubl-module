<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing NotificationRequirementType
 *
 *
 * XSD Type: NotificationRequirementType
 */
class NotificationRequirementType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NotificationTypeCode $notificationTypeCode
     */
    private $notificationTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PostEventNotificationDurationMeasure $postEventNotificationDurationMeasure
     */
    private $postEventNotificationDurationMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreEventNotificationDurationMeasure $preEventNotificationDurationMeasure
     */
    private $preEventNotificationDurationMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotifyParty[] $notifyParty
     */
    private $notifyParty = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationPeriod[] $notificationPeriod
     */
    private $notificationPeriod = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationLocation[] $notificationLocation
     */
    private $notificationLocation = [
        
    ];

    /**
     * Gets as notificationTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NotificationTypeCode
     */
    public function getNotificationTypeCode()
    {
        return $this->notificationTypeCode;
    }

    /**
     * Sets a new notificationTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NotificationTypeCode $notificationTypeCode
     * @return self
     */
    public function setNotificationTypeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\NotificationTypeCode $notificationTypeCode)
    {
        $this->notificationTypeCode = $notificationTypeCode;
        return $this;
    }

    /**
     * Gets as postEventNotificationDurationMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PostEventNotificationDurationMeasure
     */
    public function getPostEventNotificationDurationMeasure()
    {
        return $this->postEventNotificationDurationMeasure;
    }

    /**
     * Sets a new postEventNotificationDurationMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PostEventNotificationDurationMeasure $postEventNotificationDurationMeasure
     * @return self
     */
    public function setPostEventNotificationDurationMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PostEventNotificationDurationMeasure $postEventNotificationDurationMeasure = null)
    {
        $this->postEventNotificationDurationMeasure = $postEventNotificationDurationMeasure;
        return $this;
    }

    /**
     * Gets as preEventNotificationDurationMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreEventNotificationDurationMeasure
     */
    public function getPreEventNotificationDurationMeasure()
    {
        return $this->preEventNotificationDurationMeasure;
    }

    /**
     * Sets a new preEventNotificationDurationMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreEventNotificationDurationMeasure $preEventNotificationDurationMeasure
     * @return self
     */
    public function setPreEventNotificationDurationMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PreEventNotificationDurationMeasure $preEventNotificationDurationMeasure = null)
    {
        $this->preEventNotificationDurationMeasure = $preEventNotificationDurationMeasure;
        return $this;
    }

    /**
     * Adds as notifyParty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotifyParty $notifyParty
     */
    public function addToNotifyParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotifyParty $notifyParty)
    {
        $this->notifyParty[] = $notifyParty;
        return $this;
    }

    /**
     * isset notifyParty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotifyParty($index)
    {
        return isset($this->notifyParty[$index]);
    }

    /**
     * unset notifyParty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotifyParty($index)
    {
        unset($this->notifyParty[$index]);
    }

    /**
     * Gets as notifyParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotifyParty[]
     */
    public function getNotifyParty()
    {
        return $this->notifyParty;
    }

    /**
     * Sets a new notifyParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotifyParty[] $notifyParty
     * @return self
     */
    public function setNotifyParty(?array $notifyParty = null)
    {
        $this->notifyParty = $notifyParty;
        return $this;
    }

    /**
     * Adds as notificationPeriod
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationPeriod $notificationPeriod
     */
    public function addToNotificationPeriod(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationPeriod $notificationPeriod)
    {
        $this->notificationPeriod[] = $notificationPeriod;
        return $this;
    }

    /**
     * isset notificationPeriod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationPeriod($index)
    {
        return isset($this->notificationPeriod[$index]);
    }

    /**
     * unset notificationPeriod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationPeriod($index)
    {
        unset($this->notificationPeriod[$index]);
    }

    /**
     * Gets as notificationPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationPeriod[]
     */
    public function getNotificationPeriod()
    {
        return $this->notificationPeriod;
    }

    /**
     * Sets a new notificationPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationPeriod[] $notificationPeriod
     * @return self
     */
    public function setNotificationPeriod(?array $notificationPeriod = null)
    {
        $this->notificationPeriod = $notificationPeriod;
        return $this;
    }

    /**
     * Adds as notificationLocation
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationLocation $notificationLocation
     */
    public function addToNotificationLocation(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationLocation $notificationLocation)
    {
        $this->notificationLocation[] = $notificationLocation;
        return $this;
    }

    /**
     * isset notificationLocation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationLocation($index)
    {
        return isset($this->notificationLocation[$index]);
    }

    /**
     * unset notificationLocation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationLocation($index)
    {
        unset($this->notificationLocation[$index]);
    }

    /**
     * Gets as notificationLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationLocation[]
     */
    public function getNotificationLocation()
    {
        return $this->notificationLocation;
    }

    /**
     * Sets a new notificationLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotificationLocation[] $notificationLocation
     * @return self
     */
    public function setNotificationLocation(?array $notificationLocation = null)
    {
        $this->notificationLocation = $notificationLocation;
        return $this;
    }
}

