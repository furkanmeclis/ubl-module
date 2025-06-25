<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ItemPropertyType
 *
 *
 * XSD Type: ItemPropertyType
 */
class ItemPropertyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NameCode $nameCode
     */
    private $nameCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TestMethod $testMethod
     */
    private $testMethod = null;

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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ImportanceCode $importanceCode
     */
    private $importanceCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ListValue[] $listValue
     */
    private $listValue = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UsabilityPeriod $usabilityPeriod
     */
    private $usabilityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPropertyGroup[] $itemPropertyGroup
     */
    private $itemPropertyGroup = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RangeDimension $rangeDimension
     */
    private $rangeDimension = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPropertyRange $itemPropertyRange
     */
    private $itemPropertyRange = null;

    /**
     * Gets as iD
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     * @return self
     */
    public function setID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

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
    public function setName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name)
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
     * Gets as testMethod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TestMethod
     */
    public function getTestMethod()
    {
        return $this->testMethod;
    }

    /**
     * Sets a new testMethod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TestMethod $testMethod
     * @return self
     */
    public function setTestMethod(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TestMethod $testMethod = null)
    {
        $this->testMethod = $testMethod;
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

    /**
     * Gets as importanceCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ImportanceCode
     */
    public function getImportanceCode()
    {
        return $this->importanceCode;
    }

    /**
     * Sets a new importanceCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ImportanceCode $importanceCode
     * @return self
     */
    public function setImportanceCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ImportanceCode $importanceCode = null)
    {
        $this->importanceCode = $importanceCode;
        return $this;
    }

    /**
     * Adds as listValue
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ListValue $listValue
     */
    public function addToListValue(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ListValue $listValue)
    {
        $this->listValue[] = $listValue;
        return $this;
    }

    /**
     * isset listValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListValue($index)
    {
        return isset($this->listValue[$index]);
    }

    /**
     * unset listValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListValue($index)
    {
        unset($this->listValue[$index]);
    }

    /**
     * Gets as listValue
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ListValue[]
     */
    public function getListValue()
    {
        return $this->listValue;
    }

    /**
     * Sets a new listValue
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ListValue[] $listValue
     * @return self
     */
    public function setListValue(?array $listValue = null)
    {
        $this->listValue = $listValue;
        return $this;
    }

    /**
     * Gets as usabilityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UsabilityPeriod
     */
    public function getUsabilityPeriod()
    {
        return $this->usabilityPeriod;
    }

    /**
     * Sets a new usabilityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UsabilityPeriod $usabilityPeriod
     * @return self
     */
    public function setUsabilityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\UsabilityPeriod $usabilityPeriod = null)
    {
        $this->usabilityPeriod = $usabilityPeriod;
        return $this;
    }

    /**
     * Adds as itemPropertyGroup
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPropertyGroup $itemPropertyGroup
     */
    public function addToItemPropertyGroup(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPropertyGroup $itemPropertyGroup)
    {
        $this->itemPropertyGroup[] = $itemPropertyGroup;
        return $this;
    }

    /**
     * isset itemPropertyGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemPropertyGroup($index)
    {
        return isset($this->itemPropertyGroup[$index]);
    }

    /**
     * unset itemPropertyGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemPropertyGroup($index)
    {
        unset($this->itemPropertyGroup[$index]);
    }

    /**
     * Gets as itemPropertyGroup
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPropertyGroup[]
     */
    public function getItemPropertyGroup()
    {
        return $this->itemPropertyGroup;
    }

    /**
     * Sets a new itemPropertyGroup
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPropertyGroup[] $itemPropertyGroup
     * @return self
     */
    public function setItemPropertyGroup(?array $itemPropertyGroup = null)
    {
        $this->itemPropertyGroup = $itemPropertyGroup;
        return $this;
    }

    /**
     * Gets as rangeDimension
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RangeDimension
     */
    public function getRangeDimension()
    {
        return $this->rangeDimension;
    }

    /**
     * Sets a new rangeDimension
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RangeDimension $rangeDimension
     * @return self
     */
    public function setRangeDimension(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RangeDimension $rangeDimension = null)
    {
        $this->rangeDimension = $rangeDimension;
        return $this;
    }

    /**
     * Gets as itemPropertyRange
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPropertyRange
     */
    public function getItemPropertyRange()
    {
        return $this->itemPropertyRange;
    }

    /**
     * Sets a new itemPropertyRange
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPropertyRange $itemPropertyRange
     * @return self
     */
    public function setItemPropertyRange(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemPropertyRange $itemPropertyRange = null)
    {
        $this->itemPropertyRange = $itemPropertyRange;
        return $this;
    }
}

