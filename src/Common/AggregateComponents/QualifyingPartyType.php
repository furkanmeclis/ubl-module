<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing QualifyingPartyType
 *
 *
 * XSD Type: QualifyingPartyType
 */
class QualifyingPartyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ParticipationPercent $participationPercent
     */
    private $participationPercent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PersonalSituation[] $personalSituation
     */
    private $personalSituation = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OperatingYearsQuantity $operatingYearsQuantity
     */
    private $operatingYearsQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmployeeQuantity $employeeQuantity
     */
    private $employeeQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BusinessClassificationEvidenceID $businessClassificationEvidenceID
     */
    private $businessClassificationEvidenceID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BusinessIdentityEvidenceID $businessIdentityEvidenceID
     */
    private $businessIdentityEvidenceID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TendererRoleCode $tendererRoleCode
     */
    private $tendererRoleCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BusinessClassificationScheme $businessClassificationScheme
     */
    private $businessClassificationScheme = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCapability[] $technicalCapability
     */
    private $technicalCapability = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialCapability[] $financialCapability
     */
    private $financialCapability = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CompletedTask[] $completedTask
     */
    private $completedTask = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Declaration[] $declaration
     */
    private $declaration = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorRole $economicOperatorRole
     */
    private $economicOperatorRole = null;

    /**
     * Gets as participationPercent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ParticipationPercent
     */
    public function getParticipationPercent()
    {
        return $this->participationPercent;
    }

    /**
     * Sets a new participationPercent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ParticipationPercent $participationPercent
     * @return self
     */
    public function setParticipationPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ParticipationPercent $participationPercent = null)
    {
        $this->participationPercent = $participationPercent;
        return $this;
    }

    /**
     * Adds as personalSituation
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PersonalSituation $personalSituation
     */
    public function addToPersonalSituation(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PersonalSituation $personalSituation)
    {
        $this->personalSituation[] = $personalSituation;
        return $this;
    }

    /**
     * isset personalSituation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonalSituation($index)
    {
        return isset($this->personalSituation[$index]);
    }

    /**
     * unset personalSituation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonalSituation($index)
    {
        unset($this->personalSituation[$index]);
    }

    /**
     * Gets as personalSituation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PersonalSituation[]
     */
    public function getPersonalSituation()
    {
        return $this->personalSituation;
    }

    /**
     * Sets a new personalSituation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PersonalSituation[] $personalSituation
     * @return self
     */
    public function setPersonalSituation(?array $personalSituation = null)
    {
        $this->personalSituation = $personalSituation;
        return $this;
    }

    /**
     * Gets as operatingYearsQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OperatingYearsQuantity
     */
    public function getOperatingYearsQuantity()
    {
        return $this->operatingYearsQuantity;
    }

    /**
     * Sets a new operatingYearsQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OperatingYearsQuantity $operatingYearsQuantity
     * @return self
     */
    public function setOperatingYearsQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OperatingYearsQuantity $operatingYearsQuantity = null)
    {
        $this->operatingYearsQuantity = $operatingYearsQuantity;
        return $this;
    }

    /**
     * Gets as employeeQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmployeeQuantity
     */
    public function getEmployeeQuantity()
    {
        return $this->employeeQuantity;
    }

    /**
     * Sets a new employeeQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmployeeQuantity $employeeQuantity
     * @return self
     */
    public function setEmployeeQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EmployeeQuantity $employeeQuantity = null)
    {
        $this->employeeQuantity = $employeeQuantity;
        return $this;
    }

    /**
     * Gets as businessClassificationEvidenceID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BusinessClassificationEvidenceID
     */
    public function getBusinessClassificationEvidenceID()
    {
        return $this->businessClassificationEvidenceID;
    }

    /**
     * Sets a new businessClassificationEvidenceID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BusinessClassificationEvidenceID $businessClassificationEvidenceID
     * @return self
     */
    public function setBusinessClassificationEvidenceID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BusinessClassificationEvidenceID $businessClassificationEvidenceID = null)
    {
        $this->businessClassificationEvidenceID = $businessClassificationEvidenceID;
        return $this;
    }

    /**
     * Gets as businessIdentityEvidenceID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BusinessIdentityEvidenceID
     */
    public function getBusinessIdentityEvidenceID()
    {
        return $this->businessIdentityEvidenceID;
    }

    /**
     * Sets a new businessIdentityEvidenceID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BusinessIdentityEvidenceID $businessIdentityEvidenceID
     * @return self
     */
    public function setBusinessIdentityEvidenceID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BusinessIdentityEvidenceID $businessIdentityEvidenceID = null)
    {
        $this->businessIdentityEvidenceID = $businessIdentityEvidenceID;
        return $this;
    }

    /**
     * Gets as tendererRoleCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TendererRoleCode
     */
    public function getTendererRoleCode()
    {
        return $this->tendererRoleCode;
    }

    /**
     * Sets a new tendererRoleCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TendererRoleCode $tendererRoleCode
     * @return self
     */
    public function setTendererRoleCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TendererRoleCode $tendererRoleCode = null)
    {
        $this->tendererRoleCode = $tendererRoleCode;
        return $this;
    }

    /**
     * Gets as businessClassificationScheme
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BusinessClassificationScheme
     */
    public function getBusinessClassificationScheme()
    {
        return $this->businessClassificationScheme;
    }

    /**
     * Sets a new businessClassificationScheme
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BusinessClassificationScheme $businessClassificationScheme
     * @return self
     */
    public function setBusinessClassificationScheme(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BusinessClassificationScheme $businessClassificationScheme = null)
    {
        $this->businessClassificationScheme = $businessClassificationScheme;
        return $this;
    }

    /**
     * Adds as technicalCapability
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCapability $technicalCapability
     */
    public function addToTechnicalCapability(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCapability $technicalCapability)
    {
        $this->technicalCapability[] = $technicalCapability;
        return $this;
    }

    /**
     * isset technicalCapability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalCapability($index)
    {
        return isset($this->technicalCapability[$index]);
    }

    /**
     * unset technicalCapability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalCapability($index)
    {
        unset($this->technicalCapability[$index]);
    }

    /**
     * Gets as technicalCapability
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCapability[]
     */
    public function getTechnicalCapability()
    {
        return $this->technicalCapability;
    }

    /**
     * Sets a new technicalCapability
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalCapability[] $technicalCapability
     * @return self
     */
    public function setTechnicalCapability(?array $technicalCapability = null)
    {
        $this->technicalCapability = $technicalCapability;
        return $this;
    }

    /**
     * Adds as financialCapability
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialCapability $financialCapability
     */
    public function addToFinancialCapability(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialCapability $financialCapability)
    {
        $this->financialCapability[] = $financialCapability;
        return $this;
    }

    /**
     * isset financialCapability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFinancialCapability($index)
    {
        return isset($this->financialCapability[$index]);
    }

    /**
     * unset financialCapability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFinancialCapability($index)
    {
        unset($this->financialCapability[$index]);
    }

    /**
     * Gets as financialCapability
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialCapability[]
     */
    public function getFinancialCapability()
    {
        return $this->financialCapability;
    }

    /**
     * Sets a new financialCapability
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialCapability[] $financialCapability
     * @return self
     */
    public function setFinancialCapability(?array $financialCapability = null)
    {
        $this->financialCapability = $financialCapability;
        return $this;
    }

    /**
     * Adds as completedTask
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CompletedTask $completedTask
     */
    public function addToCompletedTask(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CompletedTask $completedTask)
    {
        $this->completedTask[] = $completedTask;
        return $this;
    }

    /**
     * isset completedTask
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompletedTask($index)
    {
        return isset($this->completedTask[$index]);
    }

    /**
     * unset completedTask
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompletedTask($index)
    {
        unset($this->completedTask[$index]);
    }

    /**
     * Gets as completedTask
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CompletedTask[]
     */
    public function getCompletedTask()
    {
        return $this->completedTask;
    }

    /**
     * Sets a new completedTask
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CompletedTask[] $completedTask
     * @return self
     */
    public function setCompletedTask(?array $completedTask = null)
    {
        $this->completedTask = $completedTask;
        return $this;
    }

    /**
     * Adds as declaration
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Declaration $declaration
     */
    public function addToDeclaration(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Declaration $declaration)
    {
        $this->declaration[] = $declaration;
        return $this;
    }

    /**
     * isset declaration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeclaration($index)
    {
        return isset($this->declaration[$index]);
    }

    /**
     * unset declaration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeclaration($index)
    {
        unset($this->declaration[$index]);
    }

    /**
     * Gets as declaration
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Declaration[]
     */
    public function getDeclaration()
    {
        return $this->declaration;
    }

    /**
     * Sets a new declaration
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Declaration[] $declaration
     * @return self
     */
    public function setDeclaration(?array $declaration = null)
    {
        $this->declaration = $declaration;
        return $this;
    }

    /**
     * Gets as party
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     * @return self
     */
    public function setParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party = null)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as economicOperatorRole
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorRole
     */
    public function getEconomicOperatorRole()
    {
        return $this->economicOperatorRole;
    }

    /**
     * Sets a new economicOperatorRole
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorRole $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorRole $economicOperatorRole = null)
    {
        $this->economicOperatorRole = $economicOperatorRole;
        return $this;
    }
}

