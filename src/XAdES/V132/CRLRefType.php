<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing CRLRefType
 *
 *
 * XSD Type: CRLRefType
 */
class CRLRefType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\CRLIdentifierType $cRLIdentifier
     */
    private $cRLIdentifier = null;

    /**
     * Gets as digestAlgAndValue
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType
     */
    public function getDigestAlgAndValue()
    {
        return $this->digestAlgAndValue;
    }

    /**
     * Sets a new digestAlgAndValue
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType $digestAlgAndValue
     * @return self
     */
    public function setDigestAlgAndValue(\FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType $digestAlgAndValue)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }

    /**
     * Gets as cRLIdentifier
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\CRLIdentifierType
     */
    public function getCRLIdentifier()
    {
        return $this->cRLIdentifier;
    }

    /**
     * Sets a new cRLIdentifier
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\CRLIdentifierType $cRLIdentifier
     * @return self
     */
    public function setCRLIdentifier(?\FurkanMeclis\GIB\UBL\XAdES\V132\CRLIdentifierType $cRLIdentifier = null)
    {
        $this->cRLIdentifier = $cRLIdentifier;
        return $this;
    }
}

