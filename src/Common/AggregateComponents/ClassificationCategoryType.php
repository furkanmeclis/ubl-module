<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ClassificationCategoryType
 *
 *
 * XSD Type: ClassificationCategoryType
 */
class ClassificationCategoryType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CodeValue $codeValue
     */
    private $codeValue = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CategorizesClassificationCategory[] $categorizesClassificationCategory
     */
    private $categorizesClassificationCategory = [
        
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
     * Gets as codeValue
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CodeValue
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * Sets a new codeValue
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CodeValue $codeValue
     * @return self
     */
    public function setCodeValue(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CodeValue $codeValue = null)
    {
        $this->codeValue = $codeValue;
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

    /**
     * Adds as categorizesClassificationCategory
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CategorizesClassificationCategory $categorizesClassificationCategory
     */
    public function addToCategorizesClassificationCategory(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CategorizesClassificationCategory $categorizesClassificationCategory)
    {
        $this->categorizesClassificationCategory[] = $categorizesClassificationCategory;
        return $this;
    }

    /**
     * isset categorizesClassificationCategory
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategorizesClassificationCategory($index)
    {
        return isset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * unset categorizesClassificationCategory
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategorizesClassificationCategory($index)
    {
        unset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * Gets as categorizesClassificationCategory
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CategorizesClassificationCategory[]
     */
    public function getCategorizesClassificationCategory()
    {
        return $this->categorizesClassificationCategory;
    }

    /**
     * Sets a new categorizesClassificationCategory
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CategorizesClassificationCategory[] $categorizesClassificationCategory
     * @return self
     */
    public function setCategorizesClassificationCategory(?array $categorizesClassificationCategory = null)
    {
        $this->categorizesClassificationCategory = $categorizesClassificationCategory;
        return $this;
    }
}

