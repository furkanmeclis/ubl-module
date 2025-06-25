<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PartyType
 *
 *
 * XSD Type: PartyType
 */
class PartyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\WebsiteURI $websiteURI
     */
    private $websiteURI = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EndpointID $endpointID
     */
    private $endpointID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\IndustryClassificationCode $industryClassificationCode
     */
    private $industryClassificationCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyIdentification[] $partyIdentification
     */
    private $partyIdentification = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyName $partyName
     */
    private $partyName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PostalAddress $postalAddress
     */
    private $postalAddress = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PhysicalLocation $physicalLocation
     */
    private $physicalLocation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyTaxScheme $partyTaxScheme
     */
    private $partyTaxScheme = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyLegalEntity[] $partyLegalEntity
     */
    private $partyLegalEntity = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact $contact
     */
    private $contact = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Person $person
     */
    private $person = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AgentParty $agentParty
     */
    private $agentParty = null;

    /**
     * Gets as websiteURI
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\WebsiteURI
     */
    public function getWebsiteURI()
    {
        return $this->websiteURI;
    }

    /**
     * Sets a new websiteURI
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\WebsiteURI $websiteURI
     * @return self
     */
    public function setWebsiteURI(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\WebsiteURI $websiteURI = null)
    {
        $this->websiteURI = $websiteURI;
        return $this;
    }

    /**
     * Gets as endpointID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EndpointID
     */
    public function getEndpointID()
    {
        return $this->endpointID;
    }

    /**
     * Sets a new endpointID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EndpointID $endpointID
     * @return self
     */
    public function setEndpointID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EndpointID $endpointID = null)
    {
        $this->endpointID = $endpointID;
        return $this;
    }

    /**
     * Gets as industryClassificationCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\IndustryClassificationCode
     */
    public function getIndustryClassificationCode()
    {
        return $this->industryClassificationCode;
    }

    /**
     * Sets a new industryClassificationCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\IndustryClassificationCode $industryClassificationCode
     * @return self
     */
    public function setIndustryClassificationCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\IndustryClassificationCode $industryClassificationCode = null)
    {
        $this->industryClassificationCode = $industryClassificationCode;
        return $this;
    }

    /**
     * Adds as partyIdentification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyIdentification $partyIdentification
     */
    public function addToPartyIdentification(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyIdentification $partyIdentification)
    {
        $this->partyIdentification[] = $partyIdentification;
        return $this;
    }

    /**
     * isset partyIdentification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyIdentification($index)
    {
        return isset($this->partyIdentification[$index]);
    }

    /**
     * unset partyIdentification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyIdentification($index)
    {
        unset($this->partyIdentification[$index]);
    }

    /**
     * Gets as partyIdentification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyIdentification[]
     */
    public function getPartyIdentification()
    {
        return $this->partyIdentification;
    }

    /**
     * Sets a new partyIdentification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyIdentification[] $partyIdentification
     * @return self
     */
    public function setPartyIdentification(array $partyIdentification)
    {
        $this->partyIdentification = $partyIdentification;
        return $this;
    }

    /**
     * Gets as partyName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyName
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyName $partyName
     * @return self
     */
    public function setPartyName(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyName $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as postalAddress
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Sets a new postalAddress
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PostalAddress $postalAddress
     * @return self
     */
    public function setPostalAddress(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PostalAddress $postalAddress)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * Gets as physicalLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PhysicalLocation
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Sets a new physicalLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PhysicalLocation $physicalLocation
     * @return self
     */
    public function setPhysicalLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PhysicalLocation $physicalLocation = null)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * Gets as partyTaxScheme
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyTaxScheme
     */
    public function getPartyTaxScheme()
    {
        return $this->partyTaxScheme;
    }

    /**
     * Sets a new partyTaxScheme
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyTaxScheme $partyTaxScheme
     * @return self
     */
    public function setPartyTaxScheme(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyTaxScheme $partyTaxScheme = null)
    {
        $this->partyTaxScheme = $partyTaxScheme;
        return $this;
    }

    /**
     * Adds as partyLegalEntity
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyLegalEntity $partyLegalEntity
     */
    public function addToPartyLegalEntity(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyLegalEntity $partyLegalEntity)
    {
        $this->partyLegalEntity[] = $partyLegalEntity;
        return $this;
    }

    /**
     * isset partyLegalEntity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyLegalEntity($index)
    {
        return isset($this->partyLegalEntity[$index]);
    }

    /**
     * unset partyLegalEntity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyLegalEntity($index)
    {
        unset($this->partyLegalEntity[$index]);
    }

    /**
     * Gets as partyLegalEntity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyLegalEntity[]
     */
    public function getPartyLegalEntity()
    {
        return $this->partyLegalEntity;
    }

    /**
     * Sets a new partyLegalEntity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PartyLegalEntity[] $partyLegalEntity
     * @return self
     */
    public function setPartyLegalEntity(?array $partyLegalEntity = null)
    {
        $this->partyLegalEntity = $partyLegalEntity;
        return $this;
    }

    /**
     * Gets as contact
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact $contact
     * @return self
     */
    public function setContact(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as person
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Person $person
     * @return self
     */
    public function setPerson(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Person $person = null)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as agentParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AgentParty
     */
    public function getAgentParty()
    {
        return $this->agentParty;
    }

    /**
     * Sets a new agentParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AgentParty $agentParty
     * @return self
     */
    public function setAgentParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AgentParty $agentParty = null)
    {
        $this->agentParty = $agentParty;
        return $this;
    }
}

