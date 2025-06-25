<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing DigestAlgAndValueType
 *
 *
 * XSD Type: DigestAlgAndValueType
 */
class DigestAlgAndValueType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\DigestMethod $digestMethod
     */
    private $digestMethod = null;

    /**
     * @var string $digestValue
     */
    private $digestValue = null;

    /**
     * Gets as digestMethod
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\DigestMethod
     */
    public function getDigestMethod()
    {
        return $this->digestMethod;
    }

    /**
     * Sets a new digestMethod
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\DigestMethod $digestMethod
     * @return self
     */
    public function setDigestMethod(\FurkanMeclis\GIB\UBL\DigitalSignature\DigestMethod $digestMethod)
    {
        $this->digestMethod = $digestMethod;
        return $this;
    }

    /**
     * Gets as digestValue
     *
     * @return string
     */
    public function getDigestValue()
    {
        return $this->digestValue;
    }

    /**
     * Sets a new digestValue
     *
     * @param string $digestValue
     * @return self
     */
    public function setDigestValue($digestValue)
    {
        $this->digestValue = $digestValue;
        return $this;
    }
}

