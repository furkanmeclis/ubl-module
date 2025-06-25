<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing SupplierConsumptionType
 *
 *
 * XSD Type: SupplierConsumptionType
 */
class SupplierConsumptionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilitySupplierParty $utilitySupplierParty
     */
    private $utilitySupplierParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityCustomerParty $utilityCustomerParty
     */
    private $utilityCustomerParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Consumption $consumption
     */
    private $consumption = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Contract $contract
     */
    private $contract = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionLine[] $consumptionLine
     */
    private $consumptionLine = [
        
    ];

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
     * Gets as utilitySupplierParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilitySupplierParty
     */
    public function getUtilitySupplierParty()
    {
        return $this->utilitySupplierParty;
    }

    /**
     * Sets a new utilitySupplierParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilitySupplierParty $utilitySupplierParty
     * @return self
     */
    public function setUtilitySupplierParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilitySupplierParty $utilitySupplierParty = null)
    {
        $this->utilitySupplierParty = $utilitySupplierParty;
        return $this;
    }

    /**
     * Gets as utilityCustomerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityCustomerParty
     */
    public function getUtilityCustomerParty()
    {
        return $this->utilityCustomerParty;
    }

    /**
     * Sets a new utilityCustomerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityCustomerParty $utilityCustomerParty
     * @return self
     */
    public function setUtilityCustomerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\UtilityCustomerParty $utilityCustomerParty = null)
    {
        $this->utilityCustomerParty = $utilityCustomerParty;
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
    public function setConsumption(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Consumption $consumption)
    {
        $this->consumption = $consumption;
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
     * Adds as consumptionLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionLine $consumptionLine
     */
    public function addToConsumptionLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionLine $consumptionLine)
    {
        $this->consumptionLine[] = $consumptionLine;
        return $this;
    }

    /**
     * isset consumptionLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionLine($index)
    {
        return isset($this->consumptionLine[$index]);
    }

    /**
     * unset consumptionLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionLine($index)
    {
        unset($this->consumptionLine[$index]);
    }

    /**
     * Gets as consumptionLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionLine[]
     */
    public function getConsumptionLine()
    {
        return $this->consumptionLine;
    }

    /**
     * Sets a new consumptionLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionLine[] $consumptionLine
     * @return self
     */
    public function setConsumptionLine(array $consumptionLine)
    {
        $this->consumptionLine = $consumptionLine;
        return $this;
    }
}

