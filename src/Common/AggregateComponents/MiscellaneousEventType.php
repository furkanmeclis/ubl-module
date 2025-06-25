<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing MiscellaneousEventType
 *
 *
 * XSD Type: MiscellaneousEventType
 */
class MiscellaneousEventType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MiscellaneousEventTypeCode $miscellaneousEventTypeCode
     */
    private $miscellaneousEventTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventLineItem[] $eventLineItem
     */
    private $eventLineItem = [
        
    ];

    /**
     * Gets as miscellaneousEventTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MiscellaneousEventTypeCode
     */
    public function getMiscellaneousEventTypeCode()
    {
        return $this->miscellaneousEventTypeCode;
    }

    /**
     * Sets a new miscellaneousEventTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MiscellaneousEventTypeCode $miscellaneousEventTypeCode
     * @return self
     */
    public function setMiscellaneousEventTypeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\MiscellaneousEventTypeCode $miscellaneousEventTypeCode)
    {
        $this->miscellaneousEventTypeCode = $miscellaneousEventTypeCode;
        return $this;
    }

    /**
     * Adds as eventLineItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventLineItem $eventLineItem
     */
    public function addToEventLineItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventLineItem $eventLineItem)
    {
        $this->eventLineItem[] = $eventLineItem;
        return $this;
    }

    /**
     * isset eventLineItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventLineItem($index)
    {
        return isset($this->eventLineItem[$index]);
    }

    /**
     * unset eventLineItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventLineItem($index)
    {
        unset($this->eventLineItem[$index]);
    }

    /**
     * Gets as eventLineItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventLineItem[]
     */
    public function getEventLineItem()
    {
        return $this->eventLineItem;
    }

    /**
     * Sets a new eventLineItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventLineItem[] $eventLineItem
     * @return self
     */
    public function setEventLineItem(array $eventLineItem)
    {
        $this->eventLineItem = $eventLineItem;
        return $this;
    }
}

