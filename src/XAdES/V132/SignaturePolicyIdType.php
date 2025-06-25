<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing SignaturePolicyIdType
 *
 *
 * XSD Type: SignaturePolicyIdType
 */
class SignaturePolicyIdType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\ObjectIdentifierType $sigPolicyId
     */
    private $sigPolicyId = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\Transform[] $transforms
     */
    private $transforms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType $sigPolicyHash
     */
    private $sigPolicyHash = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $sigPolicyQualifiers
     */
    private $sigPolicyQualifiers = null;

    /**
     * Gets as sigPolicyId
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\ObjectIdentifierType
     */
    public function getSigPolicyId()
    {
        return $this->sigPolicyId;
    }

    /**
     * Sets a new sigPolicyId
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\ObjectIdentifierType $sigPolicyId
     * @return self
     */
    public function setSigPolicyId(\FurkanMeclis\GIB\UBL\XAdES\V132\ObjectIdentifierType $sigPolicyId)
    {
        $this->sigPolicyId = $sigPolicyId;
        return $this;
    }

    /**
     * Adds as transform
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\Transform $transform
     */
    public function addToTransforms(\FurkanMeclis\GIB\UBL\DigitalSignature\Transform $transform)
    {
        $this->transforms[] = $transform;
        return $this;
    }

    /**
     * isset transforms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransforms($index)
    {
        return isset($this->transforms[$index]);
    }

    /**
     * unset transforms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransforms($index)
    {
        unset($this->transforms[$index]);
    }

    /**
     * Gets as transforms
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\Transform[]
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * Sets a new transforms
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\Transform[] $transforms
     * @return self
     */
    public function setTransforms(?array $transforms = null)
    {
        $this->transforms = $transforms;
        return $this;
    }

    /**
     * Gets as sigPolicyHash
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType
     */
    public function getSigPolicyHash()
    {
        return $this->sigPolicyHash;
    }

    /**
     * Sets a new sigPolicyHash
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType $sigPolicyHash
     * @return self
     */
    public function setSigPolicyHash(\FurkanMeclis\GIB\UBL\XAdES\V132\DigestAlgAndValueType $sigPolicyHash)
    {
        $this->sigPolicyHash = $sigPolicyHash;
        return $this;
    }

    /**
     * Adds as sigPolicyQualifier
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $sigPolicyQualifier
     */
    public function addToSigPolicyQualifiers(\FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $sigPolicyQualifier)
    {
        $this->sigPolicyQualifiers[] = $sigPolicyQualifier;
        return $this;
    }

    /**
     * isset sigPolicyQualifiers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSigPolicyQualifiers($index)
    {
        return isset($this->sigPolicyQualifiers[$index]);
    }

    /**
     * unset sigPolicyQualifiers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSigPolicyQualifiers($index)
    {
        unset($this->sigPolicyQualifiers[$index]);
    }

    /**
     * Gets as sigPolicyQualifiers
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[]
     */
    public function getSigPolicyQualifiers()
    {
        return $this->sigPolicyQualifiers;
    }

    /**
     * Sets a new sigPolicyQualifiers
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $sigPolicyQualifiers
     * @return self
     */
    public function setSigPolicyQualifiers(?array $sigPolicyQualifiers = null)
    {
        $this->sigPolicyQualifiers = $sigPolicyQualifiers;
        return $this;
    }
}

