<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PromotionalSpecificationType
 *
 *
 * XSD Type: PromotionalSpecificationType
 */
class PromotionalSpecificationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecificationID $specificationID
     */
    private $specificationID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalEventLineItem[] $promotionalEventLineItem
     */
    private $promotionalEventLineItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventTactic[] $eventTactic
     */
    private $eventTactic = [
        
    ];

    /**
     * Gets as specificationID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecificationID
     */
    public function getSpecificationID()
    {
        return $this->specificationID;
    }

    /**
     * Sets a new specificationID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecificationID $specificationID
     * @return self
     */
    public function setSpecificationID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecificationID $specificationID = null)
    {
        $this->specificationID = $specificationID;
        return $this;
    }

    /**
     * Adds as promotionalEventLineItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalEventLineItem $promotionalEventLineItem
     */
    public function addToPromotionalEventLineItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalEventLineItem $promotionalEventLineItem)
    {
        $this->promotionalEventLineItem[] = $promotionalEventLineItem;
        return $this;
    }

    /**
     * isset promotionalEventLineItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalEventLineItem($index)
    {
        return isset($this->promotionalEventLineItem[$index]);
    }

    /**
     * unset promotionalEventLineItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalEventLineItem($index)
    {
        unset($this->promotionalEventLineItem[$index]);
    }

    /**
     * Gets as promotionalEventLineItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalEventLineItem[]
     */
    public function getPromotionalEventLineItem()
    {
        return $this->promotionalEventLineItem;
    }

    /**
     * Sets a new promotionalEventLineItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PromotionalEventLineItem[] $promotionalEventLineItem
     * @return self
     */
    public function setPromotionalEventLineItem(array $promotionalEventLineItem)
    {
        $this->promotionalEventLineItem = $promotionalEventLineItem;
        return $this;
    }

    /**
     * Adds as eventTactic
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventTactic $eventTactic
     */
    public function addToEventTactic(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventTactic $eventTactic)
    {
        $this->eventTactic[] = $eventTactic;
        return $this;
    }

    /**
     * isset eventTactic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventTactic($index)
    {
        return isset($this->eventTactic[$index]);
    }

    /**
     * unset eventTactic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventTactic($index)
    {
        unset($this->eventTactic[$index]);
    }

    /**
     * Gets as eventTactic
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventTactic[]
     */
    public function getEventTactic()
    {
        return $this->eventTactic;
    }

    /**
     * Sets a new eventTactic
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventTactic[] $eventTactic
     * @return self
     */
    public function setEventTactic(?array $eventTactic = null)
    {
        $this->eventTactic = $eventTactic;
        return $this;
    }
}

