<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ServiceProviderPartyType
 *
 *
 * XSD Type: ServiceProviderPartyType
 */
class ServiceProviderPartyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceTypeCode $serviceTypeCode
     */
    private $serviceTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceType[] $serviceType
     */
    private $serviceType = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerContact $sellerContact
     */
    private $sellerContact = null;

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
     * Gets as serviceTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceTypeCode
     */
    public function getServiceTypeCode()
    {
        return $this->serviceTypeCode;
    }

    /**
     * Sets a new serviceTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceTypeCode $serviceTypeCode
     * @return self
     */
    public function setServiceTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceTypeCode $serviceTypeCode = null)
    {
        $this->serviceTypeCode = $serviceTypeCode;
        return $this;
    }

    /**
     * Adds as serviceType
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceType $serviceType
     */
    public function addToServiceType(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceType $serviceType)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * isset serviceType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceType($index)
    {
        return isset($this->serviceType[$index]);
    }

    /**
     * unset serviceType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceType($index)
    {
        unset($this->serviceType[$index]);
    }

    /**
     * Gets as serviceType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceType[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceType[] $serviceType
     * @return self
     */
    public function setServiceType(?array $serviceType = null)
    {
        $this->serviceType = $serviceType;
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
     * Gets as sellerContact
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerContact
     */
    public function getSellerContact()
    {
        return $this->sellerContact;
    }

    /**
     * Sets a new sellerContact
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerContact $sellerContact
     * @return self
     */
    public function setSellerContact(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellerContact $sellerContact = null)
    {
        $this->sellerContact = $sellerContact;
        return $this;
    }
}

