<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing CompleteRevocationRefsType
 *
 *
 * XSD Type: CompleteRevocationRefsType
 */
class CompleteRevocationRefsType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\CRLRefType[] $cRLRefs
     */
    private $cRLRefs = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\OCSPRefType[] $oCSPRefs
     */
    private $oCSPRefs = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $otherRefs
     */
    private $otherRefs = null;

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
     * Adds as cRLRef
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\CRLRefType $cRLRef
     */
    public function addToCRLRefs(\FurkanMeclis\GIB\UBL\XAdES\V132\CRLRefType $cRLRef)
    {
        $this->cRLRefs[] = $cRLRef;
        return $this;
    }

    /**
     * isset cRLRefs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCRLRefs($index)
    {
        return isset($this->cRLRefs[$index]);
    }

    /**
     * unset cRLRefs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCRLRefs($index)
    {
        unset($this->cRLRefs[$index]);
    }

    /**
     * Gets as cRLRefs
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\CRLRefType[]
     */
    public function getCRLRefs()
    {
        return $this->cRLRefs;
    }

    /**
     * Sets a new cRLRefs
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\CRLRefType[] $cRLRefs
     * @return self
     */
    public function setCRLRefs(?array $cRLRefs = null)
    {
        $this->cRLRefs = $cRLRefs;
        return $this;
    }

    /**
     * Adds as oCSPRef
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\OCSPRefType $oCSPRef
     */
    public function addToOCSPRefs(\FurkanMeclis\GIB\UBL\XAdES\V132\OCSPRefType $oCSPRef)
    {
        $this->oCSPRefs[] = $oCSPRef;
        return $this;
    }

    /**
     * isset oCSPRefs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOCSPRefs($index)
    {
        return isset($this->oCSPRefs[$index]);
    }

    /**
     * unset oCSPRefs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOCSPRefs($index)
    {
        unset($this->oCSPRefs[$index]);
    }

    /**
     * Gets as oCSPRefs
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\OCSPRefType[]
     */
    public function getOCSPRefs()
    {
        return $this->oCSPRefs;
    }

    /**
     * Sets a new oCSPRefs
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\OCSPRefType[] $oCSPRefs
     * @return self
     */
    public function setOCSPRefs(?array $oCSPRefs = null)
    {
        $this->oCSPRefs = $oCSPRefs;
        return $this;
    }

    /**
     * Adds as otherRef
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $otherRef
     */
    public function addToOtherRefs(\FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $otherRef)
    {
        $this->otherRefs[] = $otherRef;
        return $this;
    }

    /**
     * isset otherRefs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherRefs($index)
    {
        return isset($this->otherRefs[$index]);
    }

    /**
     * unset otherRefs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherRefs($index)
    {
        unset($this->otherRefs[$index]);
    }

    /**
     * Gets as otherRefs
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[]
     */
    public function getOtherRefs()
    {
        return $this->otherRefs;
    }

    /**
     * Sets a new otherRefs
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $otherRefs
     * @return self
     */
    public function setOtherRefs(?array $otherRefs = null)
    {
        $this->otherRefs = $otherRefs;
        return $this;
    }
}

