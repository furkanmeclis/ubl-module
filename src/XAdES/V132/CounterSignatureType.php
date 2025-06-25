<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing CounterSignatureType
 *
 *
 * XSD Type: CounterSignatureType
 */
class CounterSignatureType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as signature
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\Signature $signature
     * @return self
     */
    public function setSignature(\FurkanMeclis\GIB\UBL\DigitalSignature\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }
}

