<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TradeFinancingType
 *
 *
 * XSD Type: TradeFinancingType
 */
class TradeFinancingType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FinancingInstrumentCode $financingInstrumentCode
     */
    private $financingInstrumentCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractDocumentReference $contractDocumentReference
     */
    private $contractDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancingParty $financingParty
     */
    private $financingParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancingFinancialAccount $financingFinancialAccount
     */
    private $financingFinancialAccount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause[] $clause
     */
    private $clause = [
        
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
     * Gets as financingInstrumentCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FinancingInstrumentCode
     */
    public function getFinancingInstrumentCode()
    {
        return $this->financingInstrumentCode;
    }

    /**
     * Sets a new financingInstrumentCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FinancingInstrumentCode $financingInstrumentCode
     * @return self
     */
    public function setFinancingInstrumentCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\FinancingInstrumentCode $financingInstrumentCode = null)
    {
        $this->financingInstrumentCode = $financingInstrumentCode;
        return $this;
    }

    /**
     * Gets as contractDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractDocumentReference
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractDocumentReference $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractDocumentReference $contractDocumentReference = null)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as financingParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancingParty
     */
    public function getFinancingParty()
    {
        return $this->financingParty;
    }

    /**
     * Sets a new financingParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancingParty $financingParty
     * @return self
     */
    public function setFinancingParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancingParty $financingParty)
    {
        $this->financingParty = $financingParty;
        return $this;
    }

    /**
     * Gets as financingFinancialAccount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancingFinancialAccount
     */
    public function getFinancingFinancialAccount()
    {
        return $this->financingFinancialAccount;
    }

    /**
     * Sets a new financingFinancialAccount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancingFinancialAccount $financingFinancialAccount
     * @return self
     */
    public function setFinancingFinancialAccount(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancingFinancialAccount $financingFinancialAccount = null)
    {
        $this->financingFinancialAccount = $financingFinancialAccount;
        return $this;
    }

    /**
     * Adds as clause
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause $clause
     */
    public function addToClause(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause $clause)
    {
        $this->clause[] = $clause;
        return $this;
    }

    /**
     * isset clause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClause($index)
    {
        return isset($this->clause[$index]);
    }

    /**
     * unset clause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClause($index)
    {
        unset($this->clause[$index]);
    }

    /**
     * Gets as clause
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause[]
     */
    public function getClause()
    {
        return $this->clause;
    }

    /**
     * Sets a new clause
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Clause[] $clause
     * @return self
     */
    public function setClause(?array $clause = null)
    {
        $this->clause = $clause;
        return $this;
    }
}

