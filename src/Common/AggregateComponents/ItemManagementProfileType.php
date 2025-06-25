<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ItemManagementProfileType
 *
 *
 * XSD Type: ItemManagementProfileType
 */
class ItemManagementProfileType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric
     */
    private $frozenPeriodDaysNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumInventoryQuantity $minimumInventoryQuantity
     */
    private $minimumInventoryQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MultipleOrderQuantity $multipleOrderQuantity
     */
    private $multipleOrderQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderIntervalDaysNumeric $orderIntervalDaysNumeric
     */
    private $orderIntervalDaysNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReplenishmentOwnerDescription[] $replenishmentOwnerDescription
     */
    private $replenishmentOwnerDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetServicePercent $targetServicePercent
     */
    private $targetServicePercent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetInventoryQuantity $targetInventoryQuantity
     */
    private $targetInventoryQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EffectivePeriod $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item
     */
    private $item = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemLocationQuantity $itemLocationQuantity
     */
    private $itemLocationQuantity = null;

    /**
     * Gets as frozenPeriodDaysNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FrozenPeriodDaysNumeric
     */
    public function getFrozenPeriodDaysNumeric()
    {
        return $this->frozenPeriodDaysNumeric;
    }

    /**
     * Sets a new frozenPeriodDaysNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric
     * @return self
     */
    public function setFrozenPeriodDaysNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric = null)
    {
        $this->frozenPeriodDaysNumeric = $frozenPeriodDaysNumeric;
        return $this;
    }

    /**
     * Gets as minimumInventoryQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumInventoryQuantity
     */
    public function getMinimumInventoryQuantity()
    {
        return $this->minimumInventoryQuantity;
    }

    /**
     * Sets a new minimumInventoryQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumInventoryQuantity $minimumInventoryQuantity
     * @return self
     */
    public function setMinimumInventoryQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumInventoryQuantity $minimumInventoryQuantity = null)
    {
        $this->minimumInventoryQuantity = $minimumInventoryQuantity;
        return $this;
    }

    /**
     * Gets as multipleOrderQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MultipleOrderQuantity
     */
    public function getMultipleOrderQuantity()
    {
        return $this->multipleOrderQuantity;
    }

    /**
     * Sets a new multipleOrderQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MultipleOrderQuantity $multipleOrderQuantity
     * @return self
     */
    public function setMultipleOrderQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MultipleOrderQuantity $multipleOrderQuantity = null)
    {
        $this->multipleOrderQuantity = $multipleOrderQuantity;
        return $this;
    }

    /**
     * Gets as orderIntervalDaysNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderIntervalDaysNumeric
     */
    public function getOrderIntervalDaysNumeric()
    {
        return $this->orderIntervalDaysNumeric;
    }

    /**
     * Sets a new orderIntervalDaysNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderIntervalDaysNumeric $orderIntervalDaysNumeric
     * @return self
     */
    public function setOrderIntervalDaysNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OrderIntervalDaysNumeric $orderIntervalDaysNumeric = null)
    {
        $this->orderIntervalDaysNumeric = $orderIntervalDaysNumeric;
        return $this;
    }

    /**
     * Adds as replenishmentOwnerDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReplenishmentOwnerDescription $replenishmentOwnerDescription
     */
    public function addToReplenishmentOwnerDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReplenishmentOwnerDescription $replenishmentOwnerDescription)
    {
        $this->replenishmentOwnerDescription[] = $replenishmentOwnerDescription;
        return $this;
    }

    /**
     * isset replenishmentOwnerDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplenishmentOwnerDescription($index)
    {
        return isset($this->replenishmentOwnerDescription[$index]);
    }

    /**
     * unset replenishmentOwnerDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplenishmentOwnerDescription($index)
    {
        unset($this->replenishmentOwnerDescription[$index]);
    }

    /**
     * Gets as replenishmentOwnerDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReplenishmentOwnerDescription[]
     */
    public function getReplenishmentOwnerDescription()
    {
        return $this->replenishmentOwnerDescription;
    }

    /**
     * Sets a new replenishmentOwnerDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReplenishmentOwnerDescription[] $replenishmentOwnerDescription
     * @return self
     */
    public function setReplenishmentOwnerDescription(?array $replenishmentOwnerDescription = null)
    {
        $this->replenishmentOwnerDescription = $replenishmentOwnerDescription;
        return $this;
    }

    /**
     * Gets as targetServicePercent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetServicePercent
     */
    public function getTargetServicePercent()
    {
        return $this->targetServicePercent;
    }

    /**
     * Sets a new targetServicePercent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetServicePercent $targetServicePercent
     * @return self
     */
    public function setTargetServicePercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetServicePercent $targetServicePercent = null)
    {
        $this->targetServicePercent = $targetServicePercent;
        return $this;
    }

    /**
     * Gets as targetInventoryQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetInventoryQuantity
     */
    public function getTargetInventoryQuantity()
    {
        return $this->targetInventoryQuantity;
    }

    /**
     * Sets a new targetInventoryQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetInventoryQuantity $targetInventoryQuantity
     * @return self
     */
    public function setTargetInventoryQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TargetInventoryQuantity $targetInventoryQuantity = null)
    {
        $this->targetInventoryQuantity = $targetInventoryQuantity;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EffectivePeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EffectivePeriod $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EffectivePeriod $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as item
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item
     * @return self
     */
    public function setItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as itemLocationQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemLocationQuantity
     */
    public function getItemLocationQuantity()
    {
        return $this->itemLocationQuantity;
    }

    /**
     * Sets a new itemLocationQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemLocationQuantity $itemLocationQuantity
     * @return self
     */
    public function setItemLocationQuantity(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemLocationQuantity $itemLocationQuantity = null)
    {
        $this->itemLocationQuantity = $itemLocationQuantity;
        return $this;
    }
}

