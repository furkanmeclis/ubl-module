<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing UnsignedPropertiesType
 *
 *
 * XSD Type: UnsignedPropertiesType
 */
class UnsignedPropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     */
    private $unsignedSignatureProperties = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     */
    private $unsignedDataObjectProperties = null;

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
     * Gets as unsignedSignatureProperties
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\UnsignedSignaturePropertiesType
     */
    public function getUnsignedSignatureProperties()
    {
        return $this->unsignedSignatureProperties;
    }

    /**
     * Sets a new unsignedSignatureProperties
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     * @return self
     */
    public function setUnsignedSignatureProperties(?\FurkanMeclis\GIB\UBL\XAdES\V132\UnsignedSignaturePropertiesType $unsignedSignatureProperties = null)
    {
        $this->unsignedSignatureProperties = $unsignedSignatureProperties;
        return $this;
    }

    /**
     * Gets as unsignedDataObjectProperties
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\UnsignedDataObjectPropertiesType
     */
    public function getUnsignedDataObjectProperties()
    {
        return $this->unsignedDataObjectProperties;
    }

    /**
     * Sets a new unsignedDataObjectProperties
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     * @return self
     */
    public function setUnsignedDataObjectProperties(?\FurkanMeclis\GIB\UBL\XAdES\V132\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties = null)
    {
        $this->unsignedDataObjectProperties = $unsignedDataObjectProperties;
        return $this;
    }
}

