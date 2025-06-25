<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing OCSPRefType
 *
 *
 * XSD Type: OCSPRefType
 */
class OCSPRefType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\OCSPIdentifierType $oCSPIdentifier
     */
    private $oCSPIdentifier = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * Gets as oCSPIdentifier
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\OCSPIdentifierType
     */
    public function getOCSPIdentifier()
    {
        return $this->oCSPIdentifier;
    }

    /**
     * Sets a new oCSPIdentifier
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\OCSPIdentifierType $oCSPIdentifier
     * @return self
     */
    public function setOCSPIdentifier(\FurkanMeclis\GIB\UBL\XAdES\V132\OCSPIdentifierType $oCSPIdentifier)
    {
        $this->oCSPIdentifier = $oCSPIdentifier;
        return $this;
    }

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
    public function setDigestAlgAndValue(?\FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType $digestAlgAndValue = null)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }
}

