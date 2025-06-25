<?php

namespace FurkanMeclis\GIB\UBL\SignatureAggregateComponents;

/**
 * Class representing SignatureInformationType
 *
 *
 * XSD Type: SignatureInformationType
 */
class SignatureInformationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\SignatureBasicComponents\ReferencedSignatureID $referencedSignatureID
     */
    private $referencedSignatureID = null;

    /**
     * This is a single digital signature as defined by the W3C specification.
     *
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as iD
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     * @return self
     */
    public function setID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as referencedSignatureID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\SignatureBasicComponents\ReferencedSignatureID
     */
    public function getReferencedSignatureID()
    {
        return $this->referencedSignatureID;
    }

    /**
     * Sets a new referencedSignatureID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\SignatureBasicComponents\ReferencedSignatureID $referencedSignatureID
     * @return self
     */
    public function setReferencedSignatureID(?\FurkanMeclis\GIB\UBL\Common\SignatureBasicComponents\ReferencedSignatureID $referencedSignatureID = null)
    {
        $this->referencedSignatureID = $referencedSignatureID;
        return $this;
    }

    /**
     * Gets as signature
     *
     * This is a single digital signature as defined by the W3C specification.
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * This is a single digital signature as defined by the W3C specification.
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\Signature $signature
     * @return self
     */
    public function setSignature(?\FurkanMeclis\GIB\UBL\DigitalSignature\Signature $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}

