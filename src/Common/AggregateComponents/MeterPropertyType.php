<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing MeterPropertyType
 *
 *
 * XSD Type: MeterPropertyType
 */
class MeterPropertyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NameCode $nameCode
     */
    private $nameCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Value $value
     */
    private $value = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQuantity $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQualifier[] $valueQualifier
     */
    private $valueQualifier = [
        
    ];

    /**
     * Gets as name
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as nameCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NameCode
     */
    public function getNameCode()
    {
        return $this->nameCode;
    }

    /**
     * Sets a new nameCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NameCode $nameCode
     * @return self
     */
    public function setNameCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\NameCode $nameCode = null)
    {
        $this->nameCode = $nameCode;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Value $value
     * @return self
     */
    public function setValue(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as valueQualifier
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQualifier $valueQualifier
     */
    public function addToValueQualifier(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQualifier $valueQualifier)
    {
        $this->valueQualifier[] = $valueQualifier;
        return $this;
    }

    /**
     * isset valueQualifier
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueQualifier($index)
    {
        return isset($this->valueQualifier[$index]);
    }

    /**
     * unset valueQualifier
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueQualifier($index)
    {
        unset($this->valueQualifier[$index]);
    }

    /**
     * Gets as valueQualifier
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQualifier[]
     */
    public function getValueQualifier()
    {
        return $this->valueQualifier;
    }

    /**
     * Sets a new valueQualifier
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQualifier[] $valueQualifier
     * @return self
     */
    public function setValueQualifier(?array $valueQualifier = null)
    {
        $this->valueQualifier = $valueQualifier;
        return $this;
    }
}

