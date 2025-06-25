<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EndorserPartyType
 *
 *
 * XSD Type: EndorserPartyType
 */
class EndorserPartyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleCode $roleCode
     */
    private $roleCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryContact $signatoryContact
     */
    private $signatoryContact = null;

    /**
     * Gets as roleCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleCode
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }

    /**
     * Sets a new roleCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleCode $roleCode
     * @return self
     */
    public function setRoleCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleCode $roleCode)
    {
        $this->roleCode = $roleCode;
        return $this;
    }

    /**
     * Gets as sequenceNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(\FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as party
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     * @return self
     */
    public function setParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as signatoryContact
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryContact
     */
    public function getSignatoryContact()
    {
        return $this->signatoryContact;
    }

    /**
     * Sets a new signatoryContact
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryContact $signatoryContact
     * @return self
     */
    public function setSignatoryContact(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryContact $signatoryContact)
    {
        $this->signatoryContact = $signatoryContact;
        return $this;
    }
}

