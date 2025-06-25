<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing UtilityItemType
 *
 *
 * XSD Type: UtilityItemType
 */
class UtilityItemType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberID $subscriberID
     */
    private $subscriberID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberType $subscriberType
     */
    private $subscriberType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberTypeCode $subscriberTypeCode
     */
    private $subscriberTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackQuantity $packQuantity
     */
    private $packQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackSizeNumeric $packSizeNumeric
     */
    private $packSizeNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrentChargeType $currentChargeType
     */
    private $currentChargeType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrentChargeTypeCode $currentChargeTypeCode
     */
    private $currentChargeTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OneTimeChargeType $oneTimeChargeType
     */
    private $oneTimeChargeType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     */
    private $oneTimeChargeTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contract $contract
     */
    private $contract = null;

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
    public function setID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as subscriberID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberID
     */
    public function getSubscriberID()
    {
        return $this->subscriberID;
    }

    /**
     * Sets a new subscriberID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberID $subscriberID
     * @return self
     */
    public function setSubscriberID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberID $subscriberID = null)
    {
        $this->subscriberID = $subscriberID;
        return $this;
    }

    /**
     * Gets as subscriberType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Sets a new subscriberType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberType $subscriberType
     * @return self
     */
    public function setSubscriberType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberType $subscriberType = null)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Gets as subscriberTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberTypeCode
     */
    public function getSubscriberTypeCode()
    {
        return $this->subscriberTypeCode;
    }

    /**
     * Sets a new subscriberTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberTypeCode $subscriberTypeCode
     * @return self
     */
    public function setSubscriberTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SubscriberTypeCode $subscriberTypeCode = null)
    {
        $this->subscriberTypeCode = $subscriberTypeCode;
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
     * Gets as packQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackQuantity
     */
    public function getPackQuantity()
    {
        return $this->packQuantity;
    }

    /**
     * Sets a new packQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackQuantity $packQuantity
     * @return self
     */
    public function setPackQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PackQuantity $packQuantity = null)
    {
        $this->packQuantity = $packQuantity;
        return $this;
    }

    /**
     * Gets as packSizeNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackSizeNumeric
     */
    public function getPackSizeNumeric()
    {
        return $this->packSizeNumeric;
    }

    /**
     * Sets a new packSizeNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackSizeNumeric $packSizeNumeric
     * @return self
     */
    public function setPackSizeNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PackSizeNumeric $packSizeNumeric = null)
    {
        $this->packSizeNumeric = $packSizeNumeric;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType $consumptionType = null)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode $consumptionTypeCode = null)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
        return $this;
    }

    /**
     * Gets as currentChargeType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrentChargeType
     */
    public function getCurrentChargeType()
    {
        return $this->currentChargeType;
    }

    /**
     * Sets a new currentChargeType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrentChargeType $currentChargeType
     * @return self
     */
    public function setCurrentChargeType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrentChargeType $currentChargeType = null)
    {
        $this->currentChargeType = $currentChargeType;
        return $this;
    }

    /**
     * Gets as currentChargeTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrentChargeTypeCode
     */
    public function getCurrentChargeTypeCode()
    {
        return $this->currentChargeTypeCode;
    }

    /**
     * Sets a new currentChargeTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrentChargeTypeCode $currentChargeTypeCode
     * @return self
     */
    public function setCurrentChargeTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CurrentChargeTypeCode $currentChargeTypeCode = null)
    {
        $this->currentChargeTypeCode = $currentChargeTypeCode;
        return $this;
    }

    /**
     * Gets as oneTimeChargeType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OneTimeChargeType
     */
    public function getOneTimeChargeType()
    {
        return $this->oneTimeChargeType;
    }

    /**
     * Sets a new oneTimeChargeType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OneTimeChargeType $oneTimeChargeType
     * @return self
     */
    public function setOneTimeChargeType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OneTimeChargeType $oneTimeChargeType = null)
    {
        $this->oneTimeChargeType = $oneTimeChargeType;
        return $this;
    }

    /**
     * Gets as oneTimeChargeTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OneTimeChargeTypeCode
     */
    public function getOneTimeChargeTypeCode()
    {
        return $this->oneTimeChargeTypeCode;
    }

    /**
     * Sets a new oneTimeChargeTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     * @return self
     */
    public function setOneTimeChargeTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OneTimeChargeTypeCode $oneTimeChargeTypeCode = null)
    {
        $this->oneTimeChargeTypeCode = $oneTimeChargeTypeCode;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxCategory $taxCategory = null)
    {
        $this->taxCategory = $taxCategory;
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
}

