<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ConsumptionType
 *
 *
 * XSD Type: ConsumptionType
 */
class ConsumptionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UtilityStatementTypeCode $utilityStatementTypeCode
     */
    private $utilityStatementTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainPeriod $mainPeriod
     */
    private $mainPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyWaterSupply $energyWaterSupply
     */
    private $energyWaterSupply = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TelecommunicationsSupply $telecommunicationsSupply
     */
    private $telecommunicationsSupply = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * Gets as utilityStatementTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\UtilityStatementTypeCode
     */
    public function getUtilityStatementTypeCode()
    {
        return $this->utilityStatementTypeCode;
    }

    /**
     * Sets a new utilityStatementTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\UtilityStatementTypeCode $utilityStatementTypeCode
     * @return self
     */
    public function setUtilityStatementTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\UtilityStatementTypeCode $utilityStatementTypeCode = null)
    {
        $this->utilityStatementTypeCode = $utilityStatementTypeCode;
        return $this;
    }

    /**
     * Gets as mainPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainPeriod
     */
    public function getMainPeriod()
    {
        return $this->mainPeriod;
    }

    /**
     * Sets a new mainPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainPeriod $mainPeriod
     * @return self
     */
    public function setMainPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainPeriod $mainPeriod = null)
    {
        $this->mainPeriod = $mainPeriod;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as energyWaterSupply
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyWaterSupply
     */
    public function getEnergyWaterSupply()
    {
        return $this->energyWaterSupply;
    }

    /**
     * Sets a new energyWaterSupply
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyWaterSupply $energyWaterSupply
     * @return self
     */
    public function setEnergyWaterSupply(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnergyWaterSupply $energyWaterSupply = null)
    {
        $this->energyWaterSupply = $energyWaterSupply;
        return $this;
    }

    /**
     * Gets as telecommunicationsSupply
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TelecommunicationsSupply
     */
    public function getTelecommunicationsSupply()
    {
        return $this->telecommunicationsSupply;
    }

    /**
     * Sets a new telecommunicationsSupply
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TelecommunicationsSupply $telecommunicationsSupply
     * @return self
     */
    public function setTelecommunicationsSupply(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TelecommunicationsSupply $telecommunicationsSupply = null)
    {
        $this->telecommunicationsSupply = $telecommunicationsSupply;
        return $this;
    }

    /**
     * Gets as legalMonetaryTotal
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }
}

