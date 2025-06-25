<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TemperatureType
 *
 *
 * XSD Type: TemperatureType
 */
class TemperatureType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Measure $measure
     */
    private $measure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as attributeID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as measure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Measure $measure
     * @return self
     */
    public function setMeasure(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Measure $measure)
    {
        $this->measure = $measure;
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
}

