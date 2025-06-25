<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DespatchType
 *
 *
 * XSD Type: DespatchType
 */
class DespatchType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \DateTime $actualDespatchDate
     */
    private $actualDespatchDate = null;

    /**
     * @var \DateTime $actualDespatchTime
     */
    private $actualDespatchTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Instructions $instructions
     */
    private $instructions = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchAddress $despatchAddress
     */
    private $despatchAddress = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchParty $despatchParty
     */
    private $despatchParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contact $contact
     */
    private $contact = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDespatchPeriod $estimatedDespatchPeriod
     */
    private $estimatedDespatchPeriod = null;

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
     * Gets as actualDespatchDate
     *
     * @return \DateTime
     */
    public function getActualDespatchDate()
    {
        return $this->actualDespatchDate;
    }

    /**
     * Sets a new actualDespatchDate
     *
     * @param \DateTime $actualDespatchDate
     * @return self
     */
    public function setActualDespatchDate(?\DateTime $actualDespatchDate = null)
    {
        $this->actualDespatchDate = $actualDespatchDate;
        return $this;
    }

    /**
     * Gets as actualDespatchTime
     *
     * @return \DateTime
     */
    public function getActualDespatchTime()
    {
        return $this->actualDespatchTime;
    }

    /**
     * Sets a new actualDespatchTime
     *
     * @param \DateTime $actualDespatchTime
     * @return self
     */
    public function setActualDespatchTime(?\DateTime $actualDespatchTime = null)
    {
        $this->actualDespatchTime = $actualDespatchTime;
        return $this;
    }

    /**
     * Gets as instructions
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Instructions
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Sets a new instructions
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Instructions $instructions
     * @return self
     */
    public function setInstructions(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Instructions $instructions = null)
    {
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * Gets as despatchAddress
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchAddress
     */
    public function getDespatchAddress()
    {
        return $this->despatchAddress;
    }

    /**
     * Sets a new despatchAddress
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchAddress $despatchAddress
     * @return self
     */
    public function setDespatchAddress(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchAddress $despatchAddress = null)
    {
        $this->despatchAddress = $despatchAddress;
        return $this;
    }

    /**
     * Gets as despatchParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchParty
     */
    public function getDespatchParty()
    {
        return $this->despatchParty;
    }

    /**
     * Sets a new despatchParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchParty $despatchParty
     * @return self
     */
    public function setDespatchParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DespatchParty $despatchParty = null)
    {
        $this->despatchParty = $despatchParty;
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
     * Gets as estimatedDespatchPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDespatchPeriod
     */
    public function getEstimatedDespatchPeriod()
    {
        return $this->estimatedDespatchPeriod;
    }

    /**
     * Sets a new estimatedDespatchPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDespatchPeriod $estimatedDespatchPeriod
     * @return self
     */
    public function setEstimatedDespatchPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDespatchPeriod $estimatedDespatchPeriod = null)
    {
        $this->estimatedDespatchPeriod = $estimatedDespatchPeriod;
        return $this;
    }
}

