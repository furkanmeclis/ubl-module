<?php

namespace FurkanMeclis\GIB\UBL\DigitalSignature;

/**
 * Class representing TransformsType
 *
 *
 * XSD Type: TransformsType
 */
class TransformsType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\Transform[] $transform
     */
    private $transform = [
        
    ];

    /**
     * Adds as transform
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\Transform $transform
     */
    public function addToTransform(\FurkanMeclis\GIB\UBL\DigitalSignature\Transform $transform)
    {
        $this->transform[] = $transform;
        return $this;
    }

    /**
     * isset transform
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransform($index)
    {
        return isset($this->transform[$index]);
    }

    /**
     * unset transform
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransform($index)
    {
        unset($this->transform[$index]);
    }

    /**
     * Gets as transform
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\Transform[]
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\Transform[] $transform
     * @return self
     */
    public function setTransform(array $transform)
    {
        $this->transform = $transform;
        return $this;
    }
}

