<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing GenericTimeStampType
 *
 *
 * XSD Type: GenericTimeStampType
 */
class GenericTimeStampType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\IncludeXsd[] $include
     */
    private $include = [
        
    ];

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
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType[] $encapsulatedTimeStamp
     */
    private $encapsulatedTimeStamp = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $xMLTimeStamp
     */
    private $xMLTimeStamp = [
        
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
     * Adds as include
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\IncludeXsd $include
     */
    public function addToInclude(\FurkanMeclis\GIB\UBL\XAdES\V132\IncludeXsd $include)
    {
        $this->include[] = $include;
        return $this;
    }

    /**
     * isset include
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInclude($index)
    {
        return isset($this->include[$index]);
    }

    /**
     * unset include
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInclude($index)
    {
        unset($this->include[$index]);
    }

    /**
     * Gets as include
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\IncludeXsd[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\IncludeXsd[] $include
     * @return self
     */
    public function setInclude(?array $include = null)
    {
        $this->include = $include;
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
    public function setReferenceInfo(?array $referenceInfo = null)
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
     * Adds as encapsulatedTimeStamp
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType $encapsulatedTimeStamp
     */
    public function addToEncapsulatedTimeStamp(\FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType $encapsulatedTimeStamp)
    {
        $this->encapsulatedTimeStamp[] = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * isset encapsulatedTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedTimeStamp($index)
    {
        return isset($this->encapsulatedTimeStamp[$index]);
    }

    /**
     * unset encapsulatedTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedTimeStamp($index)
    {
        unset($this->encapsulatedTimeStamp[$index]);
    }

    /**
     * Gets as encapsulatedTimeStamp
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedTimeStamp()
    {
        return $this->encapsulatedTimeStamp;
    }

    /**
     * Sets a new encapsulatedTimeStamp
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType[] $encapsulatedTimeStamp
     * @return self
     */
    public function setEncapsulatedTimeStamp(?array $encapsulatedTimeStamp = null)
    {
        $this->encapsulatedTimeStamp = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * Adds as xMLTimeStamp
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $xMLTimeStamp
     */
    public function addToXMLTimeStamp(\FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $xMLTimeStamp)
    {
        $this->xMLTimeStamp[] = $xMLTimeStamp;
        return $this;
    }

    /**
     * isset xMLTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetXMLTimeStamp($index)
    {
        return isset($this->xMLTimeStamp[$index]);
    }

    /**
     * unset xMLTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetXMLTimeStamp($index)
    {
        unset($this->xMLTimeStamp[$index]);
    }

    /**
     * Gets as xMLTimeStamp
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[]
     */
    public function getXMLTimeStamp()
    {
        return $this->xMLTimeStamp;
    }

    /**
     * Sets a new xMLTimeStamp
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $xMLTimeStamp
     * @return self
     */
    public function setXMLTimeStamp(?array $xMLTimeStamp = null)
    {
        $this->xMLTimeStamp = $xMLTimeStamp;
        return $this;
    }
}

