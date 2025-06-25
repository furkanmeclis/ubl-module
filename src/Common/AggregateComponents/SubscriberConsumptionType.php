<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing SubscriberConsumptionType
 *
 *
 * XSD Type: SubscriberConsumptionType
 */
class SubscriberConsumptionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionID $consumptionID
     */
    private $consumptionID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecificationTypeCode $specificationTypeCode
     */
    private $specificationTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalMeteredQuantity $totalMeteredQuantity
     */
    private $totalMeteredQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubscriberParty $subscriberParty
     */
    private $subscriberParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityConsumptionPoint $utilityConsumptionPoint
     */
    private $utilityConsumptionPoint = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OnAccountPayment[] $onAccountPayment
     */
    private $onAccountPayment = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Consumption $consumption
     */
    private $consumption = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplierConsumption[] $supplierConsumption
     */
    private $supplierConsumption = [
        
    ];

    /**
     * Gets as consumptionID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionID
     */
    public function getConsumptionID()
    {
        return $this->consumptionID;
    }

    /**
     * Sets a new consumptionID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionID $consumptionID
     * @return self
     */
    public function setConsumptionID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionID $consumptionID = null)
    {
        $this->consumptionID = $consumptionID;
        return $this;
    }

    /**
     * Gets as specificationTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecificationTypeCode
     */
    public function getSpecificationTypeCode()
    {
        return $this->specificationTypeCode;
    }

    /**
     * Sets a new specificationTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecificationTypeCode $specificationTypeCode
     * @return self
     */
    public function setSpecificationTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecificationTypeCode $specificationTypeCode = null)
    {
        $this->specificationTypeCode = $specificationTypeCode;
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
     * Gets as totalMeteredQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalMeteredQuantity
     */
    public function getTotalMeteredQuantity()
    {
        return $this->totalMeteredQuantity;
    }

    /**
     * Sets a new totalMeteredQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalMeteredQuantity $totalMeteredQuantity
     * @return self
     */
    public function setTotalMeteredQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalMeteredQuantity $totalMeteredQuantity = null)
    {
        $this->totalMeteredQuantity = $totalMeteredQuantity;
        return $this;
    }

    /**
     * Gets as subscriberParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubscriberParty
     */
    public function getSubscriberParty()
    {
        return $this->subscriberParty;
    }

    /**
     * Sets a new subscriberParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubscriberParty $subscriberParty
     * @return self
     */
    public function setSubscriberParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubscriberParty $subscriberParty = null)
    {
        $this->subscriberParty = $subscriberParty;
        return $this;
    }

    /**
     * Gets as utilityConsumptionPoint
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityConsumptionPoint
     */
    public function getUtilityConsumptionPoint()
    {
        return $this->utilityConsumptionPoint;
    }

    /**
     * Sets a new utilityConsumptionPoint
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityConsumptionPoint $utilityConsumptionPoint
     * @return self
     */
    public function setUtilityConsumptionPoint(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityConsumptionPoint $utilityConsumptionPoint)
    {
        $this->utilityConsumptionPoint = $utilityConsumptionPoint;
        return $this;
    }

    /**
     * Adds as onAccountPayment
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OnAccountPayment $onAccountPayment
     */
    public function addToOnAccountPayment(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OnAccountPayment $onAccountPayment)
    {
        $this->onAccountPayment[] = $onAccountPayment;
        return $this;
    }

    /**
     * isset onAccountPayment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOnAccountPayment($index)
    {
        return isset($this->onAccountPayment[$index]);
    }

    /**
     * unset onAccountPayment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOnAccountPayment($index)
    {
        unset($this->onAccountPayment[$index]);
    }

    /**
     * Gets as onAccountPayment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OnAccountPayment[]
     */
    public function getOnAccountPayment()
    {
        return $this->onAccountPayment;
    }

    /**
     * Sets a new onAccountPayment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OnAccountPayment[] $onAccountPayment
     * @return self
     */
    public function setOnAccountPayment(?array $onAccountPayment = null)
    {
        $this->onAccountPayment = $onAccountPayment;
        return $this;
    }

    /**
     * Gets as consumption
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Consumption
     */
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * Sets a new consumption
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Consumption $consumption
     * @return self
     */
    public function setConsumption(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Consumption $consumption = null)
    {
        $this->consumption = $consumption;
        return $this;
    }

    /**
     * Adds as supplierConsumption
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplierConsumption $supplierConsumption
     */
    public function addToSupplierConsumption(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplierConsumption $supplierConsumption)
    {
        $this->supplierConsumption[] = $supplierConsumption;
        return $this;
    }

    /**
     * isset supplierConsumption
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplierConsumption($index)
    {
        return isset($this->supplierConsumption[$index]);
    }

    /**
     * unset supplierConsumption
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplierConsumption($index)
    {
        unset($this->supplierConsumption[$index]);
    }

    /**
     * Gets as supplierConsumption
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplierConsumption[]
     */
    public function getSupplierConsumption()
    {
        return $this->supplierConsumption;
    }

    /**
     * Sets a new supplierConsumption
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplierConsumption[] $supplierConsumption
     * @return self
     */
    public function setSupplierConsumption(?array $supplierConsumption = null)
    {
        $this->supplierConsumption = $supplierConsumption;
        return $this;
    }
}

