<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TransportEquipmentSealType
 *
 *
 * XSD Type: TransportEquipmentSealType
 */
class TransportEquipmentSealType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SealIssuerTypeCode $sealIssuerTypeCode
     */
    private $sealIssuerTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Condition $condition
     */
    private $condition = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SealStatusCode $sealStatusCode
     */
    private $sealStatusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SealingPartyType $sealingPartyType
     */
    private $sealingPartyType = null;

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
     * Gets as sealIssuerTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SealIssuerTypeCode
     */
    public function getSealIssuerTypeCode()
    {
        return $this->sealIssuerTypeCode;
    }

    /**
     * Sets a new sealIssuerTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SealIssuerTypeCode $sealIssuerTypeCode
     * @return self
     */
    public function setSealIssuerTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SealIssuerTypeCode $sealIssuerTypeCode = null)
    {
        $this->sealIssuerTypeCode = $sealIssuerTypeCode;
        return $this;
    }

    /**
     * Gets as condition
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Condition $condition
     * @return self
     */
    public function setCondition(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Condition $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as sealStatusCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SealStatusCode
     */
    public function getSealStatusCode()
    {
        return $this->sealStatusCode;
    }

    /**
     * Sets a new sealStatusCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SealStatusCode $sealStatusCode
     * @return self
     */
    public function setSealStatusCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SealStatusCode $sealStatusCode = null)
    {
        $this->sealStatusCode = $sealStatusCode;
        return $this;
    }

    /**
     * Gets as sealingPartyType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SealingPartyType
     */
    public function getSealingPartyType()
    {
        return $this->sealingPartyType;
    }

    /**
     * Sets a new sealingPartyType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SealingPartyType $sealingPartyType
     * @return self
     */
    public function setSealingPartyType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SealingPartyType $sealingPartyType = null)
    {
        $this->sealingPartyType = $sealingPartyType;
        return $this;
    }
}

