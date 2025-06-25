<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TenderResultType
 *
 *
 * XSD Type: TenderResultType
 */
class TenderResultType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderResultCode $tenderResultCode
     */
    private $tenderResultCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdvertisementAmount $advertisementAmount
     */
    private $advertisementAmount = null;

    /**
     * @var \DateTime $awardDate
     */
    private $awardDate = null;

    /**
     * @var \DateTime $awardTime
     */
    private $awardTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedTenderQuantity $receivedTenderQuantity
     */
    private $receivedTenderQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowerTenderAmount $lowerTenderAmount
     */
    private $lowerTenderAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HigherTenderAmount $higherTenderAmount
     */
    private $higherTenderAmount = null;

    /**
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity
     */
    private $receivedElectronicTenderQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedForeignTenderQuantity $receivedForeignTenderQuantity
     */
    private $receivedForeignTenderQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contract $contract
     */
    private $contract = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardedTenderedProject $awardedTenderedProject
     */
    private $awardedTenderedProject = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractFormalizationPeriod $contractFormalizationPeriod
     */
    private $contractFormalizationPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubcontractTerms[] $subcontractTerms
     */
    private $subcontractTerms = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WinningParty[] $winningParty
     */
    private $winningParty = [
        
    ];

    /**
     * Gets as tenderResultCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderResultCode
     */
    public function getTenderResultCode()
    {
        return $this->tenderResultCode;
    }

    /**
     * Sets a new tenderResultCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderResultCode $tenderResultCode
     * @return self
     */
    public function setTenderResultCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TenderResultCode $tenderResultCode = null)
    {
        $this->tenderResultCode = $tenderResultCode;
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
     * Gets as advertisementAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdvertisementAmount
     */
    public function getAdvertisementAmount()
    {
        return $this->advertisementAmount;
    }

    /**
     * Sets a new advertisementAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdvertisementAmount $advertisementAmount
     * @return self
     */
    public function setAdvertisementAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AdvertisementAmount $advertisementAmount = null)
    {
        $this->advertisementAmount = $advertisementAmount;
        return $this;
    }

    /**
     * Gets as awardDate
     *
     * @return \DateTime
     */
    public function getAwardDate()
    {
        return $this->awardDate;
    }

    /**
     * Sets a new awardDate
     *
     * @param \DateTime $awardDate
     * @return self
     */
    public function setAwardDate(\DateTime $awardDate)
    {
        $this->awardDate = $awardDate;
        return $this;
    }

    /**
     * Gets as awardTime
     *
     * @return \DateTime
     */
    public function getAwardTime()
    {
        return $this->awardTime;
    }

    /**
     * Sets a new awardTime
     *
     * @param \DateTime $awardTime
     * @return self
     */
    public function setAwardTime(?\DateTime $awardTime = null)
    {
        $this->awardTime = $awardTime;
        return $this;
    }

    /**
     * Gets as receivedTenderQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedTenderQuantity
     */
    public function getReceivedTenderQuantity()
    {
        return $this->receivedTenderQuantity;
    }

    /**
     * Sets a new receivedTenderQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedTenderQuantity $receivedTenderQuantity
     * @return self
     */
    public function setReceivedTenderQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedTenderQuantity $receivedTenderQuantity = null)
    {
        $this->receivedTenderQuantity = $receivedTenderQuantity;
        return $this;
    }

    /**
     * Gets as lowerTenderAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowerTenderAmount
     */
    public function getLowerTenderAmount()
    {
        return $this->lowerTenderAmount;
    }

    /**
     * Sets a new lowerTenderAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowerTenderAmount $lowerTenderAmount
     * @return self
     */
    public function setLowerTenderAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LowerTenderAmount $lowerTenderAmount = null)
    {
        $this->lowerTenderAmount = $lowerTenderAmount;
        return $this;
    }

    /**
     * Gets as higherTenderAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\HigherTenderAmount
     */
    public function getHigherTenderAmount()
    {
        return $this->higherTenderAmount;
    }

    /**
     * Sets a new higherTenderAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\HigherTenderAmount $higherTenderAmount
     * @return self
     */
    public function setHigherTenderAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\HigherTenderAmount $higherTenderAmount = null)
    {
        $this->higherTenderAmount = $higherTenderAmount;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(?\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as receivedElectronicTenderQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedElectronicTenderQuantity
     */
    public function getReceivedElectronicTenderQuantity()
    {
        return $this->receivedElectronicTenderQuantity;
    }

    /**
     * Sets a new receivedElectronicTenderQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity
     * @return self
     */
    public function setReceivedElectronicTenderQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity = null)
    {
        $this->receivedElectronicTenderQuantity = $receivedElectronicTenderQuantity;
        return $this;
    }

    /**
     * Gets as receivedForeignTenderQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedForeignTenderQuantity
     */
    public function getReceivedForeignTenderQuantity()
    {
        return $this->receivedForeignTenderQuantity;
    }

    /**
     * Sets a new receivedForeignTenderQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedForeignTenderQuantity $receivedForeignTenderQuantity
     * @return self
     */
    public function setReceivedForeignTenderQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReceivedForeignTenderQuantity $receivedForeignTenderQuantity = null)
    {
        $this->receivedForeignTenderQuantity = $receivedForeignTenderQuantity;
        return $this;
    }

    /**
     * Gets as contract
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contract $contract
     * @return self
     */
    public function setContract(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contract $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Gets as awardedTenderedProject
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardedTenderedProject
     */
    public function getAwardedTenderedProject()
    {
        return $this->awardedTenderedProject;
    }

    /**
     * Sets a new awardedTenderedProject
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardedTenderedProject $awardedTenderedProject
     * @return self
     */
    public function setAwardedTenderedProject(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardedTenderedProject $awardedTenderedProject = null)
    {
        $this->awardedTenderedProject = $awardedTenderedProject;
        return $this;
    }

    /**
     * Gets as contractFormalizationPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractFormalizationPeriod
     */
    public function getContractFormalizationPeriod()
    {
        return $this->contractFormalizationPeriod;
    }

    /**
     * Sets a new contractFormalizationPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractFormalizationPeriod $contractFormalizationPeriod
     * @return self
     */
    public function setContractFormalizationPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractFormalizationPeriod $contractFormalizationPeriod = null)
    {
        $this->contractFormalizationPeriod = $contractFormalizationPeriod;
        return $this;
    }

    /**
     * Adds as subcontractTerms
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubcontractTerms $subcontractTerms
     */
    public function addToSubcontractTerms(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubcontractTerms $subcontractTerms)
    {
        $this->subcontractTerms[] = $subcontractTerms;
        return $this;
    }

    /**
     * isset subcontractTerms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubcontractTerms($index)
    {
        return isset($this->subcontractTerms[$index]);
    }

    /**
     * unset subcontractTerms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubcontractTerms($index)
    {
        unset($this->subcontractTerms[$index]);
    }

    /**
     * Gets as subcontractTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubcontractTerms[]
     */
    public function getSubcontractTerms()
    {
        return $this->subcontractTerms;
    }

    /**
     * Sets a new subcontractTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubcontractTerms[] $subcontractTerms
     * @return self
     */
    public function setSubcontractTerms(?array $subcontractTerms = null)
    {
        $this->subcontractTerms = $subcontractTerms;
        return $this;
    }

    /**
     * Adds as winningParty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WinningParty $winningParty
     */
    public function addToWinningParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\WinningParty $winningParty)
    {
        $this->winningParty[] = $winningParty;
        return $this;
    }

    /**
     * isset winningParty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWinningParty($index)
    {
        return isset($this->winningParty[$index]);
    }

    /**
     * unset winningParty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWinningParty($index)
    {
        unset($this->winningParty[$index]);
    }

    /**
     * Gets as winningParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WinningParty[]
     */
    public function getWinningParty()
    {
        return $this->winningParty;
    }

    /**
     * Sets a new winningParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WinningParty[] $winningParty
     * @return self
     */
    public function setWinningParty(?array $winningParty = null)
    {
        $this->winningParty = $winningParty;
        return $this;
    }
}

