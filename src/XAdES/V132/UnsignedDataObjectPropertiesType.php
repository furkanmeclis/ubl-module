<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing UnsignedDataObjectPropertiesType
 *
 *
 * XSD Type: UnsignedDataObjectPropertiesType
 */
class UnsignedDataObjectPropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $unsignedDataObjectProperty
     */
    private $unsignedDataObjectProperty = [
        
    ];

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as unsignedDataObjectProperty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $unsignedDataObjectProperty
     */
    public function addToUnsignedDataObjectProperty(\FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $unsignedDataObjectProperty)
    {
        $this->unsignedDataObjectProperty[] = $unsignedDataObjectProperty;
        return $this;
    }

    /**
     * isset unsignedDataObjectProperty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnsignedDataObjectProperty($index)
    {
        return isset($this->unsignedDataObjectProperty[$index]);
    }

    /**
     * unset unsignedDataObjectProperty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnsignedDataObjectProperty($index)
    {
        unset($this->unsignedDataObjectProperty[$index]);
    }

    /**
     * Gets as unsignedDataObjectProperty
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[]
     */
    public function getUnsignedDataObjectProperty()
    {
        return $this->unsignedDataObjectProperty;
    }

    /**
     * Sets a new unsignedDataObjectProperty
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $unsignedDataObjectProperty
     * @return self
     */
    public function setUnsignedDataObjectProperty(array $unsignedDataObjectProperty)
    {
        $this->unsignedDataObjectProperty = $unsignedDataObjectProperty;
        return $this;
    }
}

