<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CustomerPartyType
 *
 *
 * XSD Type: CustomerPartyType
 */
class CustomerPartyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryContact $deliveryContact
     */
    private $deliveryContact = null;

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
     * Gets as deliveryContact
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryContact
     */
    public function getDeliveryContact()
    {
        return $this->deliveryContact;
    }

    /**
     * Sets a new deliveryContact
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryContact $deliveryContact
     * @return self
     */
    public function setDeliveryContact(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DeliveryContact $deliveryContact = null)
    {
        $this->deliveryContact = $deliveryContact;
        return $this;
    }
}

