<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PowerOfAttorneyType
 *
 *
 * XSD Type: PowerOfAttorneyType
 */
class PowerOfAttorneyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotaryParty $notaryParty
     */
    private $notaryParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AgentParty $agentParty
     */
    private $agentParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WitnessParty[] $witnessParty
     */
    private $witnessParty = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MandateDocumentReference[] $mandateDocumentReference
     */
    private $mandateDocumentReference = [
        
    ];

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
     * Gets as issueDate
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(?\DateTime $issueDate = null)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(?\DateTime $issueTime = null)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as notaryParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotaryParty
     */
    public function getNotaryParty()
    {
        return $this->notaryParty;
    }

    /**
     * Sets a new notaryParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotaryParty $notaryParty
     * @return self
     */
    public function setNotaryParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\NotaryParty $notaryParty = null)
    {
        $this->notaryParty = $notaryParty;
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
    public function setAgentParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AgentParty $agentParty)
    {
        $this->agentParty = $agentParty;
        return $this;
    }

    /**
     * Adds as witnessParty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WitnessParty $witnessParty
     */
    public function addToWitnessParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\WitnessParty $witnessParty)
    {
        $this->witnessParty[] = $witnessParty;
        return $this;
    }

    /**
     * isset witnessParty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWitnessParty($index)
    {
        return isset($this->witnessParty[$index]);
    }

    /**
     * unset witnessParty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWitnessParty($index)
    {
        unset($this->witnessParty[$index]);
    }

    /**
     * Gets as witnessParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WitnessParty[]
     */
    public function getWitnessParty()
    {
        return $this->witnessParty;
    }

    /**
     * Sets a new witnessParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WitnessParty[] $witnessParty
     * @return self
     */
    public function setWitnessParty(?array $witnessParty = null)
    {
        $this->witnessParty = $witnessParty;
        return $this;
    }

    /**
     * Adds as mandateDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MandateDocumentReference $mandateDocumentReference
     */
    public function addToMandateDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MandateDocumentReference $mandateDocumentReference)
    {
        $this->mandateDocumentReference[] = $mandateDocumentReference;
        return $this;
    }

    /**
     * isset mandateDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMandateDocumentReference($index)
    {
        return isset($this->mandateDocumentReference[$index]);
    }

    /**
     * unset mandateDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMandateDocumentReference($index)
    {
        unset($this->mandateDocumentReference[$index]);
    }

    /**
     * Gets as mandateDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MandateDocumentReference[]
     */
    public function getMandateDocumentReference()
    {
        return $this->mandateDocumentReference;
    }

    /**
     * Sets a new mandateDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MandateDocumentReference[] $mandateDocumentReference
     * @return self
     */
    public function setMandateDocumentReference(?array $mandateDocumentReference = null)
    {
        $this->mandateDocumentReference = $mandateDocumentReference;
        return $this;
    }
}

