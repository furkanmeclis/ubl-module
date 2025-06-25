<?php

namespace FurkanMeclis\GIB\UBL\DigitalSignature;

/**
 * Class representing SignedInfoType
 *
 *
 * XSD Type: SignedInfoType
 */
class SignedInfoType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\Reference[] $reference
     */
    private $reference = [
        
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
     * Gets as canonicalizationMethod
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\FurkanMeclis\GIB\UBL\DigitalSignature\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\FurkanMeclis\GIB\UBL\DigitalSignature\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Adds as reference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\Reference $reference
     */
    public function addToReference(\FurkanMeclis\GIB\UBL\DigitalSignature\Reference $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\Reference[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\Reference[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }
}

