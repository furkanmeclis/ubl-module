<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ContractType
 *
 *
 * XSD Type: ContractType
 */
class ContractType
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
     * @var \DateTime $nominationDate
     */
    private $nominationDate = null;

    /**
     * @var \DateTime $nominationTime
     */
    private $nominationTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractTypeCode $contractTypeCode
     */
    private $contractTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractType $contractType
     */
    private $contractType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractDocumentReference[] $contractDocumentReference
     */
    private $contractDocumentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NominationPeriod $nominationPeriod
     */
    private $nominationPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractualDelivery $contractualDelivery
     */
    private $contractualDelivery = null;

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
     * Gets as nominationDate
     *
     * @return \DateTime
     */
    public function getNominationDate()
    {
        return $this->nominationDate;
    }

    /**
     * Sets a new nominationDate
     *
     * @param \DateTime $nominationDate
     * @return self
     */
    public function setNominationDate(?\DateTime $nominationDate = null)
    {
        $this->nominationDate = $nominationDate;
        return $this;
    }

    /**
     * Gets as nominationTime
     *
     * @return \DateTime
     */
    public function getNominationTime()
    {
        return $this->nominationTime;
    }

    /**
     * Sets a new nominationTime
     *
     * @param \DateTime $nominationTime
     * @return self
     */
    public function setNominationTime(?\DateTime $nominationTime = null)
    {
        $this->nominationTime = $nominationTime;
        return $this;
    }

    /**
     * Gets as contractTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractTypeCode
     */
    public function getContractTypeCode()
    {
        return $this->contractTypeCode;
    }

    /**
     * Sets a new contractTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractTypeCode $contractTypeCode
     * @return self
     */
    public function setContractTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractTypeCode $contractTypeCode = null)
    {
        $this->contractTypeCode = $contractTypeCode;
        return $this;
    }

    /**
     * Gets as contractType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractType
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Sets a new contractType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractType $contractType
     * @return self
     */
    public function setContractType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractType $contractType = null)
    {
        $this->contractType = $contractType;
        return $this;
    }

    /**
     * Adds as note
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note
     */
    public function addToNote(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\VersionID $versionID
     * @return self
     */
    public function setVersionID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\VersionID $versionID = null)
    {
        $this->versionID = $versionID;
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
     * Gets as validityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as contractDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractDocumentReference $contractDocumentReference
     */
    public function addToContractDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractDocumentReference $contractDocumentReference)
    {
        $this->contractDocumentReference[] = $contractDocumentReference;
        return $this;
    }

    /**
     * isset contractDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractDocumentReference($index)
    {
        return isset($this->contractDocumentReference[$index]);
    }

    /**
     * unset contractDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractDocumentReference($index)
    {
        unset($this->contractDocumentReference[$index]);
    }

    /**
     * Gets as contractDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractDocumentReference[]
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractDocumentReference[] $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(?array $contractDocumentReference = null)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }

    /**
     * Gets as nominationPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NominationPeriod
     */
    public function getNominationPeriod()
    {
        return $this->nominationPeriod;
    }

    /**
     * Sets a new nominationPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NominationPeriod $nominationPeriod
     * @return self
     */
    public function setNominationPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\NominationPeriod $nominationPeriod = null)
    {
        $this->nominationPeriod = $nominationPeriod;
        return $this;
    }

    /**
     * Gets as contractualDelivery
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractualDelivery
     */
    public function getContractualDelivery()
    {
        return $this->contractualDelivery;
    }

    /**
     * Sets a new contractualDelivery
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractualDelivery $contractualDelivery
     * @return self
     */
    public function setContractualDelivery(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractualDelivery $contractualDelivery = null)
    {
        $this->contractualDelivery = $contractualDelivery;
        return $this;
    }
}

