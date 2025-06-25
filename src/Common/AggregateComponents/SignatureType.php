<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryParty $signatoryParty
     */
    private $signatoryParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment
     */
    private $digitalSignatureAttachment = null;

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
    public function setID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as signatoryParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryParty
     */
    public function getSignatoryParty()
    {
        return $this->signatoryParty;
    }

    /**
     * Sets a new signatoryParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryParty $signatoryParty
     * @return self
     */
    public function setSignatoryParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryParty $signatoryParty)
    {
        $this->signatoryParty = $signatoryParty;
        return $this;
    }

    /**
     * Gets as digitalSignatureAttachment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DigitalSignatureAttachment
     */
    public function getDigitalSignatureAttachment()
    {
        return $this->digitalSignatureAttachment;
    }

    /**
     * Sets a new digitalSignatureAttachment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment
     * @return self
     */
    public function setDigitalSignatureAttachment(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment)
    {
        $this->digitalSignatureAttachment = $digitalSignatureAttachment;
        return $this;
    }
}

