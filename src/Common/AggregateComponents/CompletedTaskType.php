<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CompletedTaskType
 *
 *
 * XSD Type: CompletedTaskType
 */
class CompletedTaskType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AnnualAverageAmount $annualAverageAmount
     */
    private $annualAverageAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTaskAmount $totalTaskAmount
     */
    private $totalTaskAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyCapacityAmount $partyCapacityAmount
     */
    private $partyCapacityAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied[] $evidenceSupplied
     */
    private $evidenceSupplied = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     */
    private $period = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RecipientCustomerParty $recipientCustomerParty
     */
    private $recipientCustomerParty = null;

    /**
     * Gets as annualAverageAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AnnualAverageAmount
     */
    public function getAnnualAverageAmount()
    {
        return $this->annualAverageAmount;
    }

    /**
     * Sets a new annualAverageAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AnnualAverageAmount $annualAverageAmount
     * @return self
     */
    public function setAnnualAverageAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AnnualAverageAmount $annualAverageAmount = null)
    {
        $this->annualAverageAmount = $annualAverageAmount;
        return $this;
    }

    /**
     * Gets as totalTaskAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTaskAmount
     */
    public function getTotalTaskAmount()
    {
        return $this->totalTaskAmount;
    }

    /**
     * Sets a new totalTaskAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTaskAmount $totalTaskAmount
     * @return self
     */
    public function setTotalTaskAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTaskAmount $totalTaskAmount = null)
    {
        $this->totalTaskAmount = $totalTaskAmount;
        return $this;
    }

    /**
     * Gets as partyCapacityAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyCapacityAmount
     */
    public function getPartyCapacityAmount()
    {
        return $this->partyCapacityAmount;
    }

    /**
     * Sets a new partyCapacityAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyCapacityAmount $partyCapacityAmount
     * @return self
     */
    public function setPartyCapacityAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PartyCapacityAmount $partyCapacityAmount = null)
    {
        $this->partyCapacityAmount = $partyCapacityAmount;
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
     * Adds as evidenceSupplied
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied $evidenceSupplied
     */
    public function addToEvidenceSupplied(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied $evidenceSupplied)
    {
        $this->evidenceSupplied[] = $evidenceSupplied;
        return $this;
    }

    /**
     * isset evidenceSupplied
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceSupplied($index)
    {
        return isset($this->evidenceSupplied[$index]);
    }

    /**
     * unset evidenceSupplied
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceSupplied($index)
    {
        unset($this->evidenceSupplied[$index]);
    }

    /**
     * Gets as evidenceSupplied
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied[]
     */
    public function getEvidenceSupplied()
    {
        return $this->evidenceSupplied;
    }

    /**
     * Sets a new evidenceSupplied
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied[] $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(?array $evidenceSupplied = null)
    {
        $this->evidenceSupplied = $evidenceSupplied;
        return $this;
    }

    /**
     * Gets as period
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as recipientCustomerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RecipientCustomerParty
     */
    public function getRecipientCustomerParty()
    {
        return $this->recipientCustomerParty;
    }

    /**
     * Sets a new recipientCustomerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RecipientCustomerParty $recipientCustomerParty
     * @return self
     */
    public function setRecipientCustomerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RecipientCustomerParty $recipientCustomerParty = null)
    {
        $this->recipientCustomerParty = $recipientCustomerParty;
        return $this;
    }
}

