<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ContractingPartyTypeType
 *
 *
 * XSD Type: ContractingPartyTypeType
 */
class ContractingPartyTypeType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyTypeCode $partyTypeCode
     */
    private $partyTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyType $partyType
     */
    private $partyType = null;

    /**
     * Gets as partyTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyTypeCode
     */
    public function getPartyTypeCode()
    {
        return $this->partyTypeCode;
    }

    /**
     * Sets a new partyTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyTypeCode $partyTypeCode
     * @return self
     */
    public function setPartyTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyTypeCode $partyTypeCode = null)
    {
        $this->partyTypeCode = $partyTypeCode;
        return $this;
    }

    /**
     * Gets as partyType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyType
     */
    public function getPartyType()
    {
        return $this->partyType;
    }

    /**
     * Sets a new partyType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyType $partyType
     * @return self
     */
    public function setPartyType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyType $partyType = null)
    {
        $this->partyType = $partyType;
        return $this;
    }
}

