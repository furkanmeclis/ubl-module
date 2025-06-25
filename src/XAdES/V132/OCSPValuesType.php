<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing OCSPValuesType
 *
 *
 * XSD Type: OCSPValuesType
 */
class OCSPValuesType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType[] $encapsulatedOCSPValue
     */
    private $encapsulatedOCSPValue = [
        
    ];

    /**
     * Adds as encapsulatedOCSPValue
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType $encapsulatedOCSPValue
     */
    public function addToEncapsulatedOCSPValue(\FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType $encapsulatedOCSPValue)
    {
        $this->encapsulatedOCSPValue[] = $encapsulatedOCSPValue;
        return $this;
    }

    /**
     * isset encapsulatedOCSPValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedOCSPValue($index)
    {
        return isset($this->encapsulatedOCSPValue[$index]);
    }

    /**
     * unset encapsulatedOCSPValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedOCSPValue($index)
    {
        unset($this->encapsulatedOCSPValue[$index]);
    }

    /**
     * Gets as encapsulatedOCSPValue
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedOCSPValue()
    {
        return $this->encapsulatedOCSPValue;
    }

    /**
     * Sets a new encapsulatedOCSPValue
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType[] $encapsulatedOCSPValue
     * @return self
     */
    public function setEncapsulatedOCSPValue(array $encapsulatedOCSPValue)
    {
        $this->encapsulatedOCSPValue = $encapsulatedOCSPValue;
        return $this;
    }
}

