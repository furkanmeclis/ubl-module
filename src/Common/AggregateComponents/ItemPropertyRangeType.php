<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ItemPropertyRangeType
 *
 *
 * XSD Type: ItemPropertyRangeType
 */
class ItemPropertyRangeType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumValue $minimumValue
     */
    private $minimumValue = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumValue $maximumValue
     */
    private $maximumValue = null;

    /**
     * Gets as minimumValue
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumValue
     */
    public function getMinimumValue()
    {
        return $this->minimumValue;
    }

    /**
     * Sets a new minimumValue
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumValue $minimumValue
     * @return self
     */
    public function setMinimumValue(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumValue $minimumValue = null)
    {
        $this->minimumValue = $minimumValue;
        return $this;
    }

    /**
     * Gets as maximumValue
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumValue
     */
    public function getMaximumValue()
    {
        return $this->maximumValue;
    }

    /**
     * Sets a new maximumValue
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumValue $maximumValue
     * @return self
     */
    public function setMaximumValue(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumValue $maximumValue = null)
    {
        $this->maximumValue = $maximumValue;
        return $this;
    }
}

