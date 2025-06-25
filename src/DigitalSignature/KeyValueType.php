<?php

namespace FurkanMeclis\GIB\UBL\DigitalSignature;

/**
 * Class representing KeyValueType
 *
 *
 * XSD Type: KeyValueType
 */
class KeyValueType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(?\FurkanMeclis\GIB\UBL\DigitalSignature\DSAKeyValue $dSAKeyValue = null)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(?\FurkanMeclis\GIB\UBL\DigitalSignature\RSAKeyValue $rSAKeyValue = null)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }
}

