<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing AwardingTermsType
 *
 *
 * XSD Type: AwardingTermsType
 */
class AwardingTermsType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\WeightingAlgorithmCode $weightingAlgorithmCode
     */
    private $weightingAlgorithmCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TechnicalCommitteeDescription[] $technicalCommitteeDescription
     */
    private $technicalCommitteeDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowTendersDescription[] $lowTendersDescription
     */
    private $lowTendersDescription = [
        
    ];

    /**
     * @var bool $prizeIndicator
     */
    private $prizeIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrizeDescription[] $prizeDescription
     */
    private $prizeDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentDescription[] $paymentDescription
     */
    private $paymentDescription = [
        
    ];

    /**
     * @var bool $followupContractIndicator
     */
    private $followupContractIndicator = null;

    /**
     * @var bool $bindingOnBuyerIndicator
     */
    private $bindingOnBuyerIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterion[] $awardingCriterion
     */
    private $awardingCriterion = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCommitteePerson[] $technicalCommitteePerson
     */
    private $technicalCommitteePerson = [
        
    ];

    /**
     * Gets as weightingAlgorithmCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\WeightingAlgorithmCode
     */
    public function getWeightingAlgorithmCode()
    {
        return $this->weightingAlgorithmCode;
    }

    /**
     * Sets a new weightingAlgorithmCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\WeightingAlgorithmCode $weightingAlgorithmCode
     * @return self
     */
    public function setWeightingAlgorithmCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\WeightingAlgorithmCode $weightingAlgorithmCode = null)
    {
        $this->weightingAlgorithmCode = $weightingAlgorithmCode;
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
     * Adds as technicalCommitteeDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TechnicalCommitteeDescription $technicalCommitteeDescription
     */
    public function addToTechnicalCommitteeDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TechnicalCommitteeDescription $technicalCommitteeDescription)
    {
        $this->technicalCommitteeDescription[] = $technicalCommitteeDescription;
        return $this;
    }

    /**
     * isset technicalCommitteeDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalCommitteeDescription($index)
    {
        return isset($this->technicalCommitteeDescription[$index]);
    }

    /**
     * unset technicalCommitteeDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalCommitteeDescription($index)
    {
        unset($this->technicalCommitteeDescription[$index]);
    }

    /**
     * Gets as technicalCommitteeDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TechnicalCommitteeDescription[]
     */
    public function getTechnicalCommitteeDescription()
    {
        return $this->technicalCommitteeDescription;
    }

    /**
     * Sets a new technicalCommitteeDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TechnicalCommitteeDescription[] $technicalCommitteeDescription
     * @return self
     */
    public function setTechnicalCommitteeDescription(?array $technicalCommitteeDescription = null)
    {
        $this->technicalCommitteeDescription = $technicalCommitteeDescription;
        return $this;
    }

    /**
     * Adds as lowTendersDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowTendersDescription $lowTendersDescription
     */
    public function addToLowTendersDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\LowTendersDescription $lowTendersDescription)
    {
        $this->lowTendersDescription[] = $lowTendersDescription;
        return $this;
    }

    /**
     * isset lowTendersDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLowTendersDescription($index)
    {
        return isset($this->lowTendersDescription[$index]);
    }

    /**
     * unset lowTendersDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLowTendersDescription($index)
    {
        unset($this->lowTendersDescription[$index]);
    }

    /**
     * Gets as lowTendersDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowTendersDescription[]
     */
    public function getLowTendersDescription()
    {
        return $this->lowTendersDescription;
    }

    /**
     * Sets a new lowTendersDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowTendersDescription[] $lowTendersDescription
     * @return self
     */
    public function setLowTendersDescription(?array $lowTendersDescription = null)
    {
        $this->lowTendersDescription = $lowTendersDescription;
        return $this;
    }

    /**
     * Gets as prizeIndicator
     *
     * @return bool
     */
    public function getPrizeIndicator()
    {
        return $this->prizeIndicator;
    }

    /**
     * Sets a new prizeIndicator
     *
     * @param bool $prizeIndicator
     * @return self
     */
    public function setPrizeIndicator($prizeIndicator)
    {
        $this->prizeIndicator = $prizeIndicator;
        return $this;
    }

    /**
     * Adds as prizeDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrizeDescription $prizeDescription
     */
    public function addToPrizeDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PrizeDescription $prizeDescription)
    {
        $this->prizeDescription[] = $prizeDescription;
        return $this;
    }

    /**
     * isset prizeDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrizeDescription($index)
    {
        return isset($this->prizeDescription[$index]);
    }

    /**
     * unset prizeDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrizeDescription($index)
    {
        unset($this->prizeDescription[$index]);
    }

    /**
     * Gets as prizeDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrizeDescription[]
     */
    public function getPrizeDescription()
    {
        return $this->prizeDescription;
    }

    /**
     * Sets a new prizeDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrizeDescription[] $prizeDescription
     * @return self
     */
    public function setPrizeDescription(?array $prizeDescription = null)
    {
        $this->prizeDescription = $prizeDescription;
        return $this;
    }

    /**
     * Adds as paymentDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentDescription $paymentDescription
     */
    public function addToPaymentDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentDescription $paymentDescription)
    {
        $this->paymentDescription[] = $paymentDescription;
        return $this;
    }

    /**
     * isset paymentDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentDescription($index)
    {
        return isset($this->paymentDescription[$index]);
    }

    /**
     * unset paymentDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentDescription($index)
    {
        unset($this->paymentDescription[$index]);
    }

    /**
     * Gets as paymentDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentDescription[]
     */
    public function getPaymentDescription()
    {
        return $this->paymentDescription;
    }

    /**
     * Sets a new paymentDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentDescription[] $paymentDescription
     * @return self
     */
    public function setPaymentDescription(?array $paymentDescription = null)
    {
        $this->paymentDescription = $paymentDescription;
        return $this;
    }

    /**
     * Gets as followupContractIndicator
     *
     * @return bool
     */
    public function getFollowupContractIndicator()
    {
        return $this->followupContractIndicator;
    }

    /**
     * Sets a new followupContractIndicator
     *
     * @param bool $followupContractIndicator
     * @return self
     */
    public function setFollowupContractIndicator($followupContractIndicator)
    {
        $this->followupContractIndicator = $followupContractIndicator;
        return $this;
    }

    /**
     * Gets as bindingOnBuyerIndicator
     *
     * @return bool
     */
    public function getBindingOnBuyerIndicator()
    {
        return $this->bindingOnBuyerIndicator;
    }

    /**
     * Sets a new bindingOnBuyerIndicator
     *
     * @param bool $bindingOnBuyerIndicator
     * @return self
     */
    public function setBindingOnBuyerIndicator($bindingOnBuyerIndicator)
    {
        $this->bindingOnBuyerIndicator = $bindingOnBuyerIndicator;
        return $this;
    }

    /**
     * Adds as awardingCriterion
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterion $awardingCriterion
     */
    public function addToAwardingCriterion(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterion $awardingCriterion)
    {
        $this->awardingCriterion[] = $awardingCriterion;
        return $this;
    }

    /**
     * isset awardingCriterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAwardingCriterion($index)
    {
        return isset($this->awardingCriterion[$index]);
    }

    /**
     * unset awardingCriterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAwardingCriterion($index)
    {
        unset($this->awardingCriterion[$index]);
    }

    /**
     * Gets as awardingCriterion
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterion[]
     */
    public function getAwardingCriterion()
    {
        return $this->awardingCriterion;
    }

    /**
     * Sets a new awardingCriterion
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingCriterion[] $awardingCriterion
     * @return self
     */
    public function setAwardingCriterion(?array $awardingCriterion = null)
    {
        $this->awardingCriterion = $awardingCriterion;
        return $this;
    }

    /**
     * Adds as technicalCommitteePerson
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCommitteePerson $technicalCommitteePerson
     */
    public function addToTechnicalCommitteePerson(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCommitteePerson $technicalCommitteePerson)
    {
        $this->technicalCommitteePerson[] = $technicalCommitteePerson;
        return $this;
    }

    /**
     * isset technicalCommitteePerson
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalCommitteePerson($index)
    {
        return isset($this->technicalCommitteePerson[$index]);
    }

    /**
     * unset technicalCommitteePerson
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalCommitteePerson($index)
    {
        unset($this->technicalCommitteePerson[$index]);
    }

    /**
     * Gets as technicalCommitteePerson
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCommitteePerson[]
     */
    public function getTechnicalCommitteePerson()
    {
        return $this->technicalCommitteePerson;
    }

    /**
     * Sets a new technicalCommitteePerson
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCommitteePerson[] $technicalCommitteePerson
     * @return self
     */
    public function setTechnicalCommitteePerson(?array $technicalCommitteePerson = null)
    {
        $this->technicalCommitteePerson = $technicalCommitteePerson;
        return $this;
    }
}

