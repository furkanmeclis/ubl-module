<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing SignaturePolicyIdentifierType
 *
 *
 * XSD Type: SignaturePolicyIdentifierType
 */
class SignaturePolicyIdentifierType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\SignaturePolicyIdType $signaturePolicyId
     */
    private $signaturePolicyId = null;

    /**
     * @var mixed $signaturePolicyImplied
     */
    private $signaturePolicyImplied = null;

    /**
     * Gets as signaturePolicyId
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\SignaturePolicyIdType
     */
    public function getSignaturePolicyId()
    {
        return $this->signaturePolicyId;
    }

    /**
     * Sets a new signaturePolicyId
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\SignaturePolicyIdType $signaturePolicyId
     * @return self
     */
    public function setSignaturePolicyId(?\FurkanMeclis\GIB\UBL\XAdES\V132\SignaturePolicyIdType $signaturePolicyId = null)
    {
        $this->signaturePolicyId = $signaturePolicyId;
        return $this;
    }

    /**
     * Gets as signaturePolicyImplied
     *
     * @return mixed
     */
    public function getSignaturePolicyImplied()
    {
        return $this->signaturePolicyImplied;
    }

    /**
     * Sets a new signaturePolicyImplied
     *
     * @param mixed $signaturePolicyImplied
     * @return self
     */
    public function setSignaturePolicyImplied($signaturePolicyImplied)
    {
        $this->signaturePolicyImplied = $signaturePolicyImplied;
        return $this;
    }
}

