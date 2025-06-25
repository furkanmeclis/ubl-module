<?php

namespace FurkanMeclis\GIB\UBL\DigitalSignature;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\ObjectXsd[] $object
     */
    private $object = [
        
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
     * Gets as signedInfo
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\FurkanMeclis\GIB\UBL\DigitalSignature\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\FurkanMeclis\GIB\UBL\DigitalSignature\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(?\FurkanMeclis\GIB\UBL\DigitalSignature\KeyInfo $keyInfo = null)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\ObjectXsd $object
     */
    public function addToObject(\FurkanMeclis\GIB\UBL\DigitalSignature\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\ObjectXsd[] $object
     * @return self
     */
    public function setObject(?array $object = null)
    {
        $this->object = $object;
        return $this;
    }
}

