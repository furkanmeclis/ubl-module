<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing OCSPIdentifierType
 *
 *
 * XSD Type: OCSPIdentifierType
 */
class OCSPIdentifierType
{
    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\ResponderIDType $responderID
     */
    private $responderID = null;

    /**
     * @var \DateTime $producedAt
     */
    private $producedAt = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as responderID
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\ResponderIDType
     */
    public function getResponderID()
    {
        return $this->responderID;
    }

    /**
     * Sets a new responderID
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\ResponderIDType $responderID
     * @return self
     */
    public function setResponderID(\FurkanMeclis\GIB\UBL\XAdES\V132\ResponderIDType $responderID)
    {
        $this->responderID = $responderID;
        return $this;
    }

    /**
     * Gets as producedAt
     *
     * @return \DateTime
     */
    public function getProducedAt()
    {
        return $this->producedAt;
    }

    /**
     * Sets a new producedAt
     *
     * @param \DateTime $producedAt
     * @return self
     */
    public function setProducedAt(\DateTime $producedAt)
    {
        $this->producedAt = $producedAt;
        return $this;
    }
}

