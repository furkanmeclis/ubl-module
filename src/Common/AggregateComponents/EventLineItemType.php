<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EventLineItemType
 *
 *
 * XSD Type: EventLineItemType
 */
class EventLineItemType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineNumberNumeric $lineNumberNumeric
     */
    private $lineNumberNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ParticipatingLocationsLocation $participatingLocationsLocation
     */
    private $participatingLocationsLocation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RetailPlannedImpact[] $retailPlannedImpact
     */
    private $retailPlannedImpact = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem $supplyItem
     */
    private $supplyItem = null;

    /**
     * Gets as lineNumberNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineNumberNumeric
     */
    public function getLineNumberNumeric()
    {
        return $this->lineNumberNumeric;
    }

    /**
     * Sets a new lineNumberNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineNumberNumeric $lineNumberNumeric
     * @return self
     */
    public function setLineNumberNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LineNumberNumeric $lineNumberNumeric = null)
    {
        $this->lineNumberNumeric = $lineNumberNumeric;
        return $this;
    }

    /**
     * Gets as participatingLocationsLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ParticipatingLocationsLocation
     */
    public function getParticipatingLocationsLocation()
    {
        return $this->participatingLocationsLocation;
    }

    /**
     * Sets a new participatingLocationsLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ParticipatingLocationsLocation $participatingLocationsLocation
     * @return self
     */
    public function setParticipatingLocationsLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ParticipatingLocationsLocation $participatingLocationsLocation = null)
    {
        $this->participatingLocationsLocation = $participatingLocationsLocation;
        return $this;
    }

    /**
     * Adds as retailPlannedImpact
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RetailPlannedImpact $retailPlannedImpact
     */
    public function addToRetailPlannedImpact(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RetailPlannedImpact $retailPlannedImpact)
    {
        $this->retailPlannedImpact[] = $retailPlannedImpact;
        return $this;
    }

    /**
     * isset retailPlannedImpact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetailPlannedImpact($index)
    {
        return isset($this->retailPlannedImpact[$index]);
    }

    /**
     * unset retailPlannedImpact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetailPlannedImpact($index)
    {
        unset($this->retailPlannedImpact[$index]);
    }

    /**
     * Gets as retailPlannedImpact
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RetailPlannedImpact[]
     */
    public function getRetailPlannedImpact()
    {
        return $this->retailPlannedImpact;
    }

    /**
     * Sets a new retailPlannedImpact
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RetailPlannedImpact[] $retailPlannedImpact
     * @return self
     */
    public function setRetailPlannedImpact(?array $retailPlannedImpact = null)
    {
        $this->retailPlannedImpact = $retailPlannedImpact;
        return $this;
    }

    /**
     * Gets as supplyItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem
     */
    public function getSupplyItem()
    {
        return $this->supplyItem;
    }

    /**
     * Sets a new supplyItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem $supplyItem
     * @return self
     */
    public function setSupplyItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem $supplyItem)
    {
        $this->supplyItem = $supplyItem;
        return $this;
    }
}

