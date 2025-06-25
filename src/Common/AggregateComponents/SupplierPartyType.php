<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing SupplierPartyType
 *
 *
 * XSD Type: SupplierPartyType
 */
class SupplierPartyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchContact $despatchContact
     */
    private $despatchContact = null;

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
     * Gets as despatchContact
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchContact
     */
    public function getDespatchContact()
    {
        return $this->despatchContact;
    }

    /**
     * Sets a new despatchContact
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchContact $despatchContact
     * @return self
     */
    public function setDespatchContact(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchContact $despatchContact = null)
    {
        $this->despatchContact = $despatchContact;
        return $this;
    }
}

