<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing ReferenceInfoType
 *
 *
 * XSD Type: ReferenceInfoType
 */
class ReferenceInfoType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\DigestMethod $digestMethod
     */
    private $digestMethod = null;

    /**
     * @var string $digestValue
     */
    private $digestValue = null;

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
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

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

