<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing OtherCertStatusValuesType
 *
 *
 * XSD Type: OtherCertStatusValuesType
 */
class OtherCertStatusValuesType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $otherValue
     */
    private $otherValue = [
        
    ];

    /**
     * Adds as otherValue
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $otherValue
     */
    public function addToOtherValue(\FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $otherValue)
    {
        $this->otherValue[] = $otherValue;
        return $this;
    }

    /**
     * isset otherValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherValue($index)
    {
        return isset($this->otherValue[$index]);
    }

    /**
     * unset otherValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherValue($index)
    {
        unset($this->otherValue[$index]);
    }

    /**
     * Gets as otherValue
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[]
     */
    public function getOtherValue()
    {
        return $this->otherValue;
    }

    /**
     * Sets a new otherValue
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $otherValue
     * @return self
     */
    public function setOtherValue(array $otherValue)
    {
        $this->otherValue = $otherValue;
        return $this;
    }
}

