<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing SignedPropertiesType
 *
 *
 * XSD Type: SignedPropertiesType
 */
class SignedPropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\SignedSignaturePropertiesType $signedSignatureProperties
     */
    private $signedSignatureProperties = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\SignedDataObjectPropertiesType $signedDataObjectProperties
     */
    private $signedDataObjectProperties = null;

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
     * Gets as signedSignatureProperties
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\SignedSignaturePropertiesType
     */
    public function getSignedSignatureProperties()
    {
        return $this->signedSignatureProperties;
    }

    /**
     * Sets a new signedSignatureProperties
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\SignedSignaturePropertiesType $signedSignatureProperties
     * @return self
     */
    public function setSignedSignatureProperties(?\FurkanMeclis\GIB\UBL\XAdES\V132\SignedSignaturePropertiesType $signedSignatureProperties = null)
    {
        $this->signedSignatureProperties = $signedSignatureProperties;
        return $this;
    }

    /**
     * Gets as signedDataObjectProperties
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\SignedDataObjectPropertiesType
     */
    public function getSignedDataObjectProperties()
    {
        return $this->signedDataObjectProperties;
    }

    /**
     * Sets a new signedDataObjectProperties
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\SignedDataObjectPropertiesType $signedDataObjectProperties
     * @return self
     */
    public function setSignedDataObjectProperties(?\FurkanMeclis\GIB\UBL\XAdES\V132\SignedDataObjectPropertiesType $signedDataObjectProperties = null)
    {
        $this->signedDataObjectProperties = $signedDataObjectProperties;
        return $this;
    }
}

