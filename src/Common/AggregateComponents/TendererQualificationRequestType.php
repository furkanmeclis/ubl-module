<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TendererQualificationRequestType
 *
 *
 * XSD Type: TendererQualificationRequestType
 */
class TendererQualificationRequestType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyLegalFormCode $companyLegalFormCode
     */
    private $companyLegalFormCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyLegalForm $companyLegalForm
     */
    private $companyLegalForm = null;

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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredBusinessClassificationScheme[] $requiredBusinessClassificationScheme
     */
    private $requiredBusinessClassificationScheme = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalEvaluationCriterion[] $technicalEvaluationCriterion
     */
    private $technicalEvaluationCriterion = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialEvaluationCriterion[] $financialEvaluationCriterion
     */
    private $financialEvaluationCriterion = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SpecificTendererRequirement[] $specificTendererRequirement
     */
    private $specificTendererRequirement = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorRole[] $economicOperatorRole
     */
    private $economicOperatorRole = [
        
    ];

    /**
     * Gets as companyLegalFormCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyLegalFormCode
     */
    public function getCompanyLegalFormCode()
    {
        return $this->companyLegalFormCode;
    }

    /**
     * Sets a new companyLegalFormCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyLegalFormCode $companyLegalFormCode
     * @return self
     */
    public function setCompanyLegalFormCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyLegalFormCode $companyLegalFormCode = null)
    {
        $this->companyLegalFormCode = $companyLegalFormCode;
        return $this;
    }

    /**
     * Gets as companyLegalForm
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyLegalForm
     */
    public function getCompanyLegalForm()
    {
        return $this->companyLegalForm;
    }

    /**
     * Sets a new companyLegalForm
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyLegalForm $companyLegalForm
     * @return self
     */
    public function setCompanyLegalForm(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyLegalForm $companyLegalForm = null)
    {
        $this->companyLegalForm = $companyLegalForm;
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
     * Adds as requiredBusinessClassificationScheme
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme
     */
    public function addToRequiredBusinessClassificationScheme(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredBusinessClassificationScheme $requiredBusinessClassificationScheme)
    {
        $this->requiredBusinessClassificationScheme[] = $requiredBusinessClassificationScheme;
        return $this;
    }

    /**
     * isset requiredBusinessClassificationScheme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredBusinessClassificationScheme($index)
    {
        return isset($this->requiredBusinessClassificationScheme[$index]);
    }

    /**
     * unset requiredBusinessClassificationScheme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredBusinessClassificationScheme($index)
    {
        unset($this->requiredBusinessClassificationScheme[$index]);
    }

    /**
     * Gets as requiredBusinessClassificationScheme
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredBusinessClassificationScheme[]
     */
    public function getRequiredBusinessClassificationScheme()
    {
        return $this->requiredBusinessClassificationScheme;
    }

    /**
     * Sets a new requiredBusinessClassificationScheme
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredBusinessClassificationScheme[] $requiredBusinessClassificationScheme
     * @return self
     */
    public function setRequiredBusinessClassificationScheme(?array $requiredBusinessClassificationScheme = null)
    {
        $this->requiredBusinessClassificationScheme = $requiredBusinessClassificationScheme;
        return $this;
    }

    /**
     * Adds as technicalEvaluationCriterion
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalEvaluationCriterion $technicalEvaluationCriterion
     */
    public function addToTechnicalEvaluationCriterion(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalEvaluationCriterion $technicalEvaluationCriterion)
    {
        $this->technicalEvaluationCriterion[] = $technicalEvaluationCriterion;
        return $this;
    }

    /**
     * isset technicalEvaluationCriterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalEvaluationCriterion($index)
    {
        return isset($this->technicalEvaluationCriterion[$index]);
    }

    /**
     * unset technicalEvaluationCriterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalEvaluationCriterion($index)
    {
        unset($this->technicalEvaluationCriterion[$index]);
    }

    /**
     * Gets as technicalEvaluationCriterion
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalEvaluationCriterion[]
     */
    public function getTechnicalEvaluationCriterion()
    {
        return $this->technicalEvaluationCriterion;
    }

    /**
     * Sets a new technicalEvaluationCriterion
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TechnicalEvaluationCriterion[] $technicalEvaluationCriterion
     * @return self
     */
    public function setTechnicalEvaluationCriterion(?array $technicalEvaluationCriterion = null)
    {
        $this->technicalEvaluationCriterion = $technicalEvaluationCriterion;
        return $this;
    }

    /**
     * Adds as financialEvaluationCriterion
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialEvaluationCriterion $financialEvaluationCriterion
     */
    public function addToFinancialEvaluationCriterion(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialEvaluationCriterion $financialEvaluationCriterion)
    {
        $this->financialEvaluationCriterion[] = $financialEvaluationCriterion;
        return $this;
    }

    /**
     * isset financialEvaluationCriterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFinancialEvaluationCriterion($index)
    {
        return isset($this->financialEvaluationCriterion[$index]);
    }

    /**
     * unset financialEvaluationCriterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFinancialEvaluationCriterion($index)
    {
        unset($this->financialEvaluationCriterion[$index]);
    }

    /**
     * Gets as financialEvaluationCriterion
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialEvaluationCriterion[]
     */
    public function getFinancialEvaluationCriterion()
    {
        return $this->financialEvaluationCriterion;
    }

    /**
     * Sets a new financialEvaluationCriterion
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialEvaluationCriterion[] $financialEvaluationCriterion
     * @return self
     */
    public function setFinancialEvaluationCriterion(?array $financialEvaluationCriterion = null)
    {
        $this->financialEvaluationCriterion = $financialEvaluationCriterion;
        return $this;
    }

    /**
     * Adds as specificTendererRequirement
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SpecificTendererRequirement $specificTendererRequirement
     */
    public function addToSpecificTendererRequirement(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SpecificTendererRequirement $specificTendererRequirement)
    {
        $this->specificTendererRequirement[] = $specificTendererRequirement;
        return $this;
    }

    /**
     * isset specificTendererRequirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecificTendererRequirement($index)
    {
        return isset($this->specificTendererRequirement[$index]);
    }

    /**
     * unset specificTendererRequirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecificTendererRequirement($index)
    {
        unset($this->specificTendererRequirement[$index]);
    }

    /**
     * Gets as specificTendererRequirement
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SpecificTendererRequirement[]
     */
    public function getSpecificTendererRequirement()
    {
        return $this->specificTendererRequirement;
    }

    /**
     * Sets a new specificTendererRequirement
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SpecificTendererRequirement[] $specificTendererRequirement
     * @return self
     */
    public function setSpecificTendererRequirement(?array $specificTendererRequirement = null)
    {
        $this->specificTendererRequirement = $specificTendererRequirement;
        return $this;
    }

    /**
     * Adds as economicOperatorRole
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorRole $economicOperatorRole
     */
    public function addToEconomicOperatorRole(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorRole $economicOperatorRole)
    {
        $this->economicOperatorRole[] = $economicOperatorRole;
        return $this;
    }

    /**
     * isset economicOperatorRole
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEconomicOperatorRole($index)
    {
        return isset($this->economicOperatorRole[$index]);
    }

    /**
     * unset economicOperatorRole
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEconomicOperatorRole($index)
    {
        unset($this->economicOperatorRole[$index]);
    }

    /**
     * Gets as economicOperatorRole
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorRole[]
     */
    public function getEconomicOperatorRole()
    {
        return $this->economicOperatorRole;
    }

    /**
     * Sets a new economicOperatorRole
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorRole[] $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(?array $economicOperatorRole = null)
    {
        $this->economicOperatorRole = $economicOperatorRole;
        return $this;
    }
}

