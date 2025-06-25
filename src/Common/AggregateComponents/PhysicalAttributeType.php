<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PhysicalAttributeType
 *
 *
 * XSD Type: PhysicalAttributeType
 */
class PhysicalAttributeType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PositionCode $positionCode
     */
    private $positionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DescriptionCode $descriptionCode
     */
    private $descriptionCode = null;

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
     * Gets as positionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PositionCode
     */
    public function getPositionCode()
    {
        return $this->positionCode;
    }

    /**
     * Sets a new positionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PositionCode $positionCode
     * @return self
     */
    public function setPositionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PositionCode $positionCode = null)
    {
        $this->positionCode = $positionCode;
        return $this;
    }

    /**
     * Gets as descriptionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DescriptionCode
     */
    public function getDescriptionCode()
    {
        return $this->descriptionCode;
    }

    /**
     * Sets a new descriptionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DescriptionCode $descriptionCode
     * @return self
     */
    public function setDescriptionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DescriptionCode $descriptionCode = null)
    {
        $this->descriptionCode = $descriptionCode;
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

