<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing OtherTimeStampType
 *
 *
 * XSD Type: OtherTimeStampType
 */
class OtherTimeStampType extends GenericTimeStampType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\ReferenceInfo[] $referenceInfo
     */
    private $referenceInfo = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType $encapsulatedTimeStamp
     */
    private $encapsulatedTimeStamp = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $xMLTimeStamp
     */
    private $xMLTimeStamp = null;

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
     * Adds as referenceInfo
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\ReferenceInfo $referenceInfo
     */
    public function addToReferenceInfo(\FurkanMeclis\GIB\UBL\XAdES\V132\ReferenceInfo $referenceInfo)
    {
        $this->referenceInfo[] = $referenceInfo;
        return $this;
    }

    /**
     * isset referenceInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceInfo($index)
    {
        return isset($this->referenceInfo[$index]);
    }

    /**
     * unset referenceInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceInfo($index)
    {
        unset($this->referenceInfo[$index]);
    }

    /**
     * Gets as referenceInfo
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\ReferenceInfo[]
     */
    public function getReferenceInfo()
    {
        return $this->referenceInfo;
    }

    /**
     * Sets a new referenceInfo
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\ReferenceInfo[] $referenceInfo
     * @return self
     */
    public function setReferenceInfo(array $referenceInfo)
    {
        $this->referenceInfo = $referenceInfo;
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
    public function setCanonicalizationMethod(?\FurkanMeclis\GIB\UBL\DigitalSignature\CanonicalizationMethod $canonicalizationMethod = null)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as encapsulatedTimeStamp
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType
     */
    public function getEncapsulatedTimeStamp()
    {
        return $this->encapsulatedTimeStamp;
    }

    /**
     * Sets a new encapsulatedTimeStamp
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType $encapsulatedTimeStamp
     * @return self
     */
    public function setEncapsulatedTimeStamp(?\FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType $encapsulatedTimeStamp = null)
    {
        $this->encapsulatedTimeStamp = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * Gets as xMLTimeStamp
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType
     */
    public function getXMLTimeStamp()
    {
        return $this->xMLTimeStamp;
    }

    /**
     * Sets a new xMLTimeStamp
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $xMLTimeStamp
     * @return self
     */
    public function setXMLTimeStamp(?\FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $xMLTimeStamp = null)
    {
        $this->xMLTimeStamp = $xMLTimeStamp;
        return $this;
    }
}

