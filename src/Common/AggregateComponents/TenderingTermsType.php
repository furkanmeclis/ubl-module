<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TenderingTermsType
 *
 *
 * XSD Type: TenderingTermsType
 */
class TenderingTermsType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AwardingMethodTypeCode $awardingMethodTypeCode
     */
    private $awardingMethodTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceEvaluationCode $priceEvaluationCode
     */
    private $priceEvaluationCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumVariantQuantity $maximumVariantQuantity
     */
    private $maximumVariantQuantity = null;

    /**
     * @var bool $variantConstraintIndicator
     */
    private $variantConstraintIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AcceptedVariantsDescription[] $acceptedVariantsDescription
     */
    private $acceptedVariantsDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceRevisionFormulaDescription[] $priceRevisionFormulaDescription
     */
    private $priceRevisionFormulaDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FundingProgramCode $fundingProgramCode
     */
    private $fundingProgramCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FundingProgram[] $fundingProgram
     */
    private $fundingProgram = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAdvertisementAmount $maximumAdvertisementAmount
     */
    private $maximumAdvertisementAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentFrequencyCode $paymentFrequencyCode
     */
    private $paymentFrequencyCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EconomicOperatorRegistryURI $economicOperatorRegistryURI
     */
    private $economicOperatorRegistryURI = null;

    /**
     * @var bool $requiredCurriculaIndicator
     */
    private $requiredCurriculaIndicator = null;

    /**
     * @var bool $otherConditionsIndicator
     */
    private $otherConditionsIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalConditions[] $additionalConditions
     */
    private $additionalConditions = [
        
    ];

    /**
     * @var \DateTime $latestSecurityClearanceDate
     */
    private $latestSecurityClearanceDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentationFeeAmount $documentationFeeAmount
     */
    private $documentationFeeAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PenaltyClause[] $penaltyClause
     */
    private $penaltyClause = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredFinancialGuarantee[] $requiredFinancialGuarantee
     */
    private $requiredFinancialGuarantee = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference
     */
    private $procurementLegislationDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference
     */
    private $fiscalLegislationDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference
     */
    private $environmentalLegislationDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference
     */
    private $employmentLegislationDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractualDocumentReference[] $contractualDocumentReference
     */
    private $contractualDocumentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     */
    private $callForTendersDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TendererQualificationRequest[] $tendererQualificationRequest
     */
    private $tendererQualificationRequest = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowedSubcontractTerms[] $allowedSubcontractTerms
     */
    private $allowedSubcontractTerms = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderPreparation[] $tenderPreparation
     */
    private $tenderPreparation = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractExecutionRequirement[] $contractExecutionRequirement
     */
    private $contractExecutionRequirement = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingTerms $awardingTerms
     */
    private $awardingTerms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalInformationParty $additionalInformationParty
     */
    private $additionalInformationParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentProviderParty $documentProviderParty
     */
    private $documentProviderParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderRecipientParty $tenderRecipientParty
     */
    private $tenderRecipientParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractResponsibleParty $contractResponsibleParty
     */
    private $contractResponsibleParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderEvaluationParty[] $tenderEvaluationParty
     */
    private $tenderEvaluationParty = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderValidityPeriod $tenderValidityPeriod
     */
    private $tenderValidityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractAcceptancePeriod $contractAcceptancePeriod
     */
    private $contractAcceptancePeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealTerms $appealTerms
     */
    private $appealTerms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Language[] $language
     */
    private $language = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccountLine[] $budgetAccountLine
     */
    private $budgetAccountLine = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference
     */
    private $replacedNoticeDocumentReference = null;

    /**
     * Gets as awardingMethodTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AwardingMethodTypeCode
     */
    public function getAwardingMethodTypeCode()
    {
        return $this->awardingMethodTypeCode;
    }

    /**
     * Sets a new awardingMethodTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AwardingMethodTypeCode $awardingMethodTypeCode
     * @return self
     */
    public function setAwardingMethodTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AwardingMethodTypeCode $awardingMethodTypeCode = null)
    {
        $this->awardingMethodTypeCode = $awardingMethodTypeCode;
        return $this;
    }

    /**
     * Gets as priceEvaluationCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceEvaluationCode
     */
    public function getPriceEvaluationCode()
    {
        return $this->priceEvaluationCode;
    }

    /**
     * Sets a new priceEvaluationCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceEvaluationCode $priceEvaluationCode
     * @return self
     */
    public function setPriceEvaluationCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceEvaluationCode $priceEvaluationCode = null)
    {
        $this->priceEvaluationCode = $priceEvaluationCode;
        return $this;
    }

    /**
     * Gets as maximumVariantQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumVariantQuantity
     */
    public function getMaximumVariantQuantity()
    {
        return $this->maximumVariantQuantity;
    }

    /**
     * Sets a new maximumVariantQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumVariantQuantity $maximumVariantQuantity
     * @return self
     */
    public function setMaximumVariantQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumVariantQuantity $maximumVariantQuantity = null)
    {
        $this->maximumVariantQuantity = $maximumVariantQuantity;
        return $this;
    }

    /**
     * Gets as variantConstraintIndicator
     *
     * @return bool
     */
    public function getVariantConstraintIndicator()
    {
        return $this->variantConstraintIndicator;
    }

    /**
     * Sets a new variantConstraintIndicator
     *
     * @param bool $variantConstraintIndicator
     * @return self
     */
    public function setVariantConstraintIndicator($variantConstraintIndicator)
    {
        $this->variantConstraintIndicator = $variantConstraintIndicator;
        return $this;
    }

    /**
     * Adds as acceptedVariantsDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AcceptedVariantsDescription $acceptedVariantsDescription
     */
    public function addToAcceptedVariantsDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\AcceptedVariantsDescription $acceptedVariantsDescription)
    {
        $this->acceptedVariantsDescription[] = $acceptedVariantsDescription;
        return $this;
    }

    /**
     * isset acceptedVariantsDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedVariantsDescription($index)
    {
        return isset($this->acceptedVariantsDescription[$index]);
    }

    /**
     * unset acceptedVariantsDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedVariantsDescription($index)
    {
        unset($this->acceptedVariantsDescription[$index]);
    }

    /**
     * Gets as acceptedVariantsDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AcceptedVariantsDescription[]
     */
    public function getAcceptedVariantsDescription()
    {
        return $this->acceptedVariantsDescription;
    }

    /**
     * Sets a new acceptedVariantsDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AcceptedVariantsDescription[] $acceptedVariantsDescription
     * @return self
     */
    public function setAcceptedVariantsDescription(?array $acceptedVariantsDescription = null)
    {
        $this->acceptedVariantsDescription = $acceptedVariantsDescription;
        return $this;
    }

    /**
     * Adds as priceRevisionFormulaDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceRevisionFormulaDescription $priceRevisionFormulaDescription
     */
    public function addToPriceRevisionFormulaDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceRevisionFormulaDescription $priceRevisionFormulaDescription)
    {
        $this->priceRevisionFormulaDescription[] = $priceRevisionFormulaDescription;
        return $this;
    }

    /**
     * isset priceRevisionFormulaDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceRevisionFormulaDescription($index)
    {
        return isset($this->priceRevisionFormulaDescription[$index]);
    }

    /**
     * unset priceRevisionFormulaDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceRevisionFormulaDescription($index)
    {
        unset($this->priceRevisionFormulaDescription[$index]);
    }

    /**
     * Gets as priceRevisionFormulaDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceRevisionFormulaDescription[]
     */
    public function getPriceRevisionFormulaDescription()
    {
        return $this->priceRevisionFormulaDescription;
    }

    /**
     * Sets a new priceRevisionFormulaDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PriceRevisionFormulaDescription[] $priceRevisionFormulaDescription
     * @return self
     */
    public function setPriceRevisionFormulaDescription(?array $priceRevisionFormulaDescription = null)
    {
        $this->priceRevisionFormulaDescription = $priceRevisionFormulaDescription;
        return $this;
    }

    /**
     * Gets as fundingProgramCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FundingProgramCode
     */
    public function getFundingProgramCode()
    {
        return $this->fundingProgramCode;
    }

    /**
     * Sets a new fundingProgramCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FundingProgramCode $fundingProgramCode
     * @return self
     */
    public function setFundingProgramCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\FundingProgramCode $fundingProgramCode = null)
    {
        $this->fundingProgramCode = $fundingProgramCode;
        return $this;
    }

    /**
     * Adds as fundingProgram
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FundingProgram $fundingProgram
     */
    public function addToFundingProgram(\FurkanMeclis\GIB\UBL\Common\BasicComponents\FundingProgram $fundingProgram)
    {
        $this->fundingProgram[] = $fundingProgram;
        return $this;
    }

    /**
     * isset fundingProgram
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFundingProgram($index)
    {
        return isset($this->fundingProgram[$index]);
    }

    /**
     * unset fundingProgram
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFundingProgram($index)
    {
        unset($this->fundingProgram[$index]);
    }

    /**
     * Gets as fundingProgram
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FundingProgram[]
     */
    public function getFundingProgram()
    {
        return $this->fundingProgram;
    }

    /**
     * Sets a new fundingProgram
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FundingProgram[] $fundingProgram
     * @return self
     */
    public function setFundingProgram(?array $fundingProgram = null)
    {
        $this->fundingProgram = $fundingProgram;
        return $this;
    }

    /**
     * Gets as maximumAdvertisementAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAdvertisementAmount
     */
    public function getMaximumAdvertisementAmount()
    {
        return $this->maximumAdvertisementAmount;
    }

    /**
     * Sets a new maximumAdvertisementAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAdvertisementAmount $maximumAdvertisementAmount
     * @return self
     */
    public function setMaximumAdvertisementAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAdvertisementAmount $maximumAdvertisementAmount = null)
    {
        $this->maximumAdvertisementAmount = $maximumAdvertisementAmount;
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
     * Gets as paymentFrequencyCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentFrequencyCode
     */
    public function getPaymentFrequencyCode()
    {
        return $this->paymentFrequencyCode;
    }

    /**
     * Sets a new paymentFrequencyCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentFrequencyCode $paymentFrequencyCode
     * @return self
     */
    public function setPaymentFrequencyCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PaymentFrequencyCode $paymentFrequencyCode = null)
    {
        $this->paymentFrequencyCode = $paymentFrequencyCode;
        return $this;
    }

    /**
     * Gets as economicOperatorRegistryURI
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EconomicOperatorRegistryURI
     */
    public function getEconomicOperatorRegistryURI()
    {
        return $this->economicOperatorRegistryURI;
    }

    /**
     * Sets a new economicOperatorRegistryURI
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EconomicOperatorRegistryURI $economicOperatorRegistryURI
     * @return self
     */
    public function setEconomicOperatorRegistryURI(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EconomicOperatorRegistryURI $economicOperatorRegistryURI = null)
    {
        $this->economicOperatorRegistryURI = $economicOperatorRegistryURI;
        return $this;
    }

    /**
     * Gets as requiredCurriculaIndicator
     *
     * @return bool
     */
    public function getRequiredCurriculaIndicator()
    {
        return $this->requiredCurriculaIndicator;
    }

    /**
     * Sets a new requiredCurriculaIndicator
     *
     * @param bool $requiredCurriculaIndicator
     * @return self
     */
    public function setRequiredCurriculaIndicator($requiredCurriculaIndicator)
    {
        $this->requiredCurriculaIndicator = $requiredCurriculaIndicator;
        return $this;
    }

    /**
     * Gets as otherConditionsIndicator
     *
     * @return bool
     */
    public function getOtherConditionsIndicator()
    {
        return $this->otherConditionsIndicator;
    }

    /**
     * Sets a new otherConditionsIndicator
     *
     * @param bool $otherConditionsIndicator
     * @return self
     */
    public function setOtherConditionsIndicator($otherConditionsIndicator)
    {
        $this->otherConditionsIndicator = $otherConditionsIndicator;
        return $this;
    }

    /**
     * Adds as additionalConditions
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalConditions $additionalConditions
     */
    public function addToAdditionalConditions(\FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalConditions $additionalConditions)
    {
        $this->additionalConditions[] = $additionalConditions;
        return $this;
    }

    /**
     * isset additionalConditions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalConditions($index)
    {
        return isset($this->additionalConditions[$index]);
    }

    /**
     * unset additionalConditions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalConditions($index)
    {
        unset($this->additionalConditions[$index]);
    }

    /**
     * Gets as additionalConditions
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalConditions[]
     */
    public function getAdditionalConditions()
    {
        return $this->additionalConditions;
    }

    /**
     * Sets a new additionalConditions
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalConditions[] $additionalConditions
     * @return self
     */
    public function setAdditionalConditions(?array $additionalConditions = null)
    {
        $this->additionalConditions = $additionalConditions;
        return $this;
    }

    /**
     * Gets as latestSecurityClearanceDate
     *
     * @return \DateTime
     */
    public function getLatestSecurityClearanceDate()
    {
        return $this->latestSecurityClearanceDate;
    }

    /**
     * Sets a new latestSecurityClearanceDate
     *
     * @param \DateTime $latestSecurityClearanceDate
     * @return self
     */
    public function setLatestSecurityClearanceDate(?\DateTime $latestSecurityClearanceDate = null)
    {
        $this->latestSecurityClearanceDate = $latestSecurityClearanceDate;
        return $this;
    }

    /**
     * Gets as documentationFeeAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentationFeeAmount
     */
    public function getDocumentationFeeAmount()
    {
        return $this->documentationFeeAmount;
    }

    /**
     * Sets a new documentationFeeAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentationFeeAmount $documentationFeeAmount
     * @return self
     */
    public function setDocumentationFeeAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DocumentationFeeAmount $documentationFeeAmount = null)
    {
        $this->documentationFeeAmount = $documentationFeeAmount;
        return $this;
    }

    /**
     * Adds as penaltyClause
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PenaltyClause $penaltyClause
     */
    public function addToPenaltyClause(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PenaltyClause $penaltyClause)
    {
        $this->penaltyClause[] = $penaltyClause;
        return $this;
    }

    /**
     * isset penaltyClause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPenaltyClause($index)
    {
        return isset($this->penaltyClause[$index]);
    }

    /**
     * unset penaltyClause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPenaltyClause($index)
    {
        unset($this->penaltyClause[$index]);
    }

    /**
     * Gets as penaltyClause
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PenaltyClause[]
     */
    public function getPenaltyClause()
    {
        return $this->penaltyClause;
    }

    /**
     * Sets a new penaltyClause
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PenaltyClause[] $penaltyClause
     * @return self
     */
    public function setPenaltyClause(?array $penaltyClause = null)
    {
        $this->penaltyClause = $penaltyClause;
        return $this;
    }

    /**
     * Adds as requiredFinancialGuarantee
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredFinancialGuarantee $requiredFinancialGuarantee
     */
    public function addToRequiredFinancialGuarantee(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredFinancialGuarantee $requiredFinancialGuarantee)
    {
        $this->requiredFinancialGuarantee[] = $requiredFinancialGuarantee;
        return $this;
    }

    /**
     * isset requiredFinancialGuarantee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredFinancialGuarantee($index)
    {
        return isset($this->requiredFinancialGuarantee[$index]);
    }

    /**
     * unset requiredFinancialGuarantee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredFinancialGuarantee($index)
    {
        unset($this->requiredFinancialGuarantee[$index]);
    }

    /**
     * Gets as requiredFinancialGuarantee
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredFinancialGuarantee[]
     */
    public function getRequiredFinancialGuarantee()
    {
        return $this->requiredFinancialGuarantee;
    }

    /**
     * Sets a new requiredFinancialGuarantee
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredFinancialGuarantee[] $requiredFinancialGuarantee
     * @return self
     */
    public function setRequiredFinancialGuarantee(?array $requiredFinancialGuarantee = null)
    {
        $this->requiredFinancialGuarantee = $requiredFinancialGuarantee;
        return $this;
    }

    /**
     * Gets as procurementLegislationDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementLegislationDocumentReference
     */
    public function getProcurementLegislationDocumentReference()
    {
        return $this->procurementLegislationDocumentReference;
    }

    /**
     * Sets a new procurementLegislationDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference
     * @return self
     */
    public function setProcurementLegislationDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference = null)
    {
        $this->procurementLegislationDocumentReference = $procurementLegislationDocumentReference;
        return $this;
    }

    /**
     * Gets as fiscalLegislationDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FiscalLegislationDocumentReference
     */
    public function getFiscalLegislationDocumentReference()
    {
        return $this->fiscalLegislationDocumentReference;
    }

    /**
     * Sets a new fiscalLegislationDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference
     * @return self
     */
    public function setFiscalLegislationDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference = null)
    {
        $this->fiscalLegislationDocumentReference = $fiscalLegislationDocumentReference;
        return $this;
    }

    /**
     * Gets as environmentalLegislationDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalLegislationDocumentReference
     */
    public function getEnvironmentalLegislationDocumentReference()
    {
        return $this->environmentalLegislationDocumentReference;
    }

    /**
     * Sets a new environmentalLegislationDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference
     * @return self
     */
    public function setEnvironmentalLegislationDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference = null)
    {
        $this->environmentalLegislationDocumentReference = $environmentalLegislationDocumentReference;
        return $this;
    }

    /**
     * Gets as employmentLegislationDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmploymentLegislationDocumentReference
     */
    public function getEmploymentLegislationDocumentReference()
    {
        return $this->employmentLegislationDocumentReference;
    }

    /**
     * Sets a new employmentLegislationDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference
     * @return self
     */
    public function setEmploymentLegislationDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference = null)
    {
        $this->employmentLegislationDocumentReference = $employmentLegislationDocumentReference;
        return $this;
    }

    /**
     * Adds as contractualDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractualDocumentReference $contractualDocumentReference
     */
    public function addToContractualDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractualDocumentReference $contractualDocumentReference)
    {
        $this->contractualDocumentReference[] = $contractualDocumentReference;
        return $this;
    }

    /**
     * isset contractualDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractualDocumentReference($index)
    {
        return isset($this->contractualDocumentReference[$index]);
    }

    /**
     * unset contractualDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractualDocumentReference($index)
    {
        unset($this->contractualDocumentReference[$index]);
    }

    /**
     * Gets as contractualDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractualDocumentReference[]
     */
    public function getContractualDocumentReference()
    {
        return $this->contractualDocumentReference;
    }

    /**
     * Sets a new contractualDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractualDocumentReference[] $contractualDocumentReference
     * @return self
     */
    public function setContractualDocumentReference(?array $contractualDocumentReference = null)
    {
        $this->contractualDocumentReference = $contractualDocumentReference;
        return $this;
    }

    /**
     * Gets as callForTendersDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReference()
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * Sets a new callForTendersDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference = null)
    {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod = null)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(?array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as tendererQualificationRequest
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TendererQualificationRequest $tendererQualificationRequest
     */
    public function addToTendererQualificationRequest(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TendererQualificationRequest $tendererQualificationRequest)
    {
        $this->tendererQualificationRequest[] = $tendererQualificationRequest;
        return $this;
    }

    /**
     * isset tendererQualificationRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTendererQualificationRequest($index)
    {
        return isset($this->tendererQualificationRequest[$index]);
    }

    /**
     * unset tendererQualificationRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTendererQualificationRequest($index)
    {
        unset($this->tendererQualificationRequest[$index]);
    }

    /**
     * Gets as tendererQualificationRequest
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TendererQualificationRequest[]
     */
    public function getTendererQualificationRequest()
    {
        return $this->tendererQualificationRequest;
    }

    /**
     * Sets a new tendererQualificationRequest
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TendererQualificationRequest[] $tendererQualificationRequest
     * @return self
     */
    public function setTendererQualificationRequest(?array $tendererQualificationRequest = null)
    {
        $this->tendererQualificationRequest = $tendererQualificationRequest;
        return $this;
    }

    /**
     * Adds as allowedSubcontractTerms
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowedSubcontractTerms $allowedSubcontractTerms
     */
    public function addToAllowedSubcontractTerms(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowedSubcontractTerms $allowedSubcontractTerms)
    {
        $this->allowedSubcontractTerms[] = $allowedSubcontractTerms;
        return $this;
    }

    /**
     * isset allowedSubcontractTerms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowedSubcontractTerms($index)
    {
        return isset($this->allowedSubcontractTerms[$index]);
    }

    /**
     * unset allowedSubcontractTerms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowedSubcontractTerms($index)
    {
        unset($this->allowedSubcontractTerms[$index]);
    }

    /**
     * Gets as allowedSubcontractTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowedSubcontractTerms[]
     */
    public function getAllowedSubcontractTerms()
    {
        return $this->allowedSubcontractTerms;
    }

    /**
     * Sets a new allowedSubcontractTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowedSubcontractTerms[] $allowedSubcontractTerms
     * @return self
     */
    public function setAllowedSubcontractTerms(?array $allowedSubcontractTerms = null)
    {
        $this->allowedSubcontractTerms = $allowedSubcontractTerms;
        return $this;
    }

    /**
     * Adds as tenderPreparation
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderPreparation $tenderPreparation
     */
    public function addToTenderPreparation(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderPreparation $tenderPreparation)
    {
        $this->tenderPreparation[] = $tenderPreparation;
        return $this;
    }

    /**
     * isset tenderPreparation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderPreparation($index)
    {
        return isset($this->tenderPreparation[$index]);
    }

    /**
     * unset tenderPreparation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderPreparation($index)
    {
        unset($this->tenderPreparation[$index]);
    }

    /**
     * Gets as tenderPreparation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderPreparation[]
     */
    public function getTenderPreparation()
    {
        return $this->tenderPreparation;
    }

    /**
     * Sets a new tenderPreparation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderPreparation[] $tenderPreparation
     * @return self
     */
    public function setTenderPreparation(?array $tenderPreparation = null)
    {
        $this->tenderPreparation = $tenderPreparation;
        return $this;
    }

    /**
     * Adds as contractExecutionRequirement
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractExecutionRequirement $contractExecutionRequirement
     */
    public function addToContractExecutionRequirement(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractExecutionRequirement $contractExecutionRequirement)
    {
        $this->contractExecutionRequirement[] = $contractExecutionRequirement;
        return $this;
    }

    /**
     * isset contractExecutionRequirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractExecutionRequirement($index)
    {
        return isset($this->contractExecutionRequirement[$index]);
    }

    /**
     * unset contractExecutionRequirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractExecutionRequirement($index)
    {
        unset($this->contractExecutionRequirement[$index]);
    }

    /**
     * Gets as contractExecutionRequirement
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractExecutionRequirement[]
     */
    public function getContractExecutionRequirement()
    {
        return $this->contractExecutionRequirement;
    }

    /**
     * Sets a new contractExecutionRequirement
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractExecutionRequirement[] $contractExecutionRequirement
     * @return self
     */
    public function setContractExecutionRequirement(?array $contractExecutionRequirement = null)
    {
        $this->contractExecutionRequirement = $contractExecutionRequirement;
        return $this;
    }

    /**
     * Gets as awardingTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingTerms
     */
    public function getAwardingTerms()
    {
        return $this->awardingTerms;
    }

    /**
     * Sets a new awardingTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingTerms $awardingTerms
     * @return self
     */
    public function setAwardingTerms(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AwardingTerms $awardingTerms = null)
    {
        $this->awardingTerms = $awardingTerms;
        return $this;
    }

    /**
     * Gets as additionalInformationParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalInformationParty
     */
    public function getAdditionalInformationParty()
    {
        return $this->additionalInformationParty;
    }

    /**
     * Sets a new additionalInformationParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalInformationParty $additionalInformationParty
     * @return self
     */
    public function setAdditionalInformationParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalInformationParty $additionalInformationParty = null)
    {
        $this->additionalInformationParty = $additionalInformationParty;
        return $this;
    }

    /**
     * Gets as documentProviderParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentProviderParty
     */
    public function getDocumentProviderParty()
    {
        return $this->documentProviderParty;
    }

    /**
     * Sets a new documentProviderParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentProviderParty $documentProviderParty
     * @return self
     */
    public function setDocumentProviderParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentProviderParty $documentProviderParty = null)
    {
        $this->documentProviderParty = $documentProviderParty;
        return $this;
    }

    /**
     * Gets as tenderRecipientParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderRecipientParty
     */
    public function getTenderRecipientParty()
    {
        return $this->tenderRecipientParty;
    }

    /**
     * Sets a new tenderRecipientParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderRecipientParty $tenderRecipientParty
     * @return self
     */
    public function setTenderRecipientParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderRecipientParty $tenderRecipientParty = null)
    {
        $this->tenderRecipientParty = $tenderRecipientParty;
        return $this;
    }

    /**
     * Gets as contractResponsibleParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractResponsibleParty
     */
    public function getContractResponsibleParty()
    {
        return $this->contractResponsibleParty;
    }

    /**
     * Sets a new contractResponsibleParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractResponsibleParty $contractResponsibleParty
     * @return self
     */
    public function setContractResponsibleParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractResponsibleParty $contractResponsibleParty = null)
    {
        $this->contractResponsibleParty = $contractResponsibleParty;
        return $this;
    }

    /**
     * Adds as tenderEvaluationParty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderEvaluationParty $tenderEvaluationParty
     */
    public function addToTenderEvaluationParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderEvaluationParty $tenderEvaluationParty)
    {
        $this->tenderEvaluationParty[] = $tenderEvaluationParty;
        return $this;
    }

    /**
     * isset tenderEvaluationParty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderEvaluationParty($index)
    {
        return isset($this->tenderEvaluationParty[$index]);
    }

    /**
     * unset tenderEvaluationParty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderEvaluationParty($index)
    {
        unset($this->tenderEvaluationParty[$index]);
    }

    /**
     * Gets as tenderEvaluationParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderEvaluationParty[]
     */
    public function getTenderEvaluationParty()
    {
        return $this->tenderEvaluationParty;
    }

    /**
     * Sets a new tenderEvaluationParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderEvaluationParty[] $tenderEvaluationParty
     * @return self
     */
    public function setTenderEvaluationParty(?array $tenderEvaluationParty = null)
    {
        $this->tenderEvaluationParty = $tenderEvaluationParty;
        return $this;
    }

    /**
     * Gets as tenderValidityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderValidityPeriod
     */
    public function getTenderValidityPeriod()
    {
        return $this->tenderValidityPeriod;
    }

    /**
     * Sets a new tenderValidityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderValidityPeriod $tenderValidityPeriod
     * @return self
     */
    public function setTenderValidityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderValidityPeriod $tenderValidityPeriod = null)
    {
        $this->tenderValidityPeriod = $tenderValidityPeriod;
        return $this;
    }

    /**
     * Gets as contractAcceptancePeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractAcceptancePeriod
     */
    public function getContractAcceptancePeriod()
    {
        return $this->contractAcceptancePeriod;
    }

    /**
     * Sets a new contractAcceptancePeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractAcceptancePeriod $contractAcceptancePeriod
     * @return self
     */
    public function setContractAcceptancePeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractAcceptancePeriod $contractAcceptancePeriod = null)
    {
        $this->contractAcceptancePeriod = $contractAcceptancePeriod;
        return $this;
    }

    /**
     * Gets as appealTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealTerms
     */
    public function getAppealTerms()
    {
        return $this->appealTerms;
    }

    /**
     * Sets a new appealTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealTerms $appealTerms
     * @return self
     */
    public function setAppealTerms(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealTerms $appealTerms = null)
    {
        $this->appealTerms = $appealTerms;
        return $this;
    }

    /**
     * Adds as language
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Language $language
     */
    public function addToLanguage(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Language $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Language[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Language[] $language
     * @return self
     */
    public function setLanguage(?array $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as budgetAccountLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccountLine $budgetAccountLine
     */
    public function addToBudgetAccountLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccountLine $budgetAccountLine)
    {
        $this->budgetAccountLine[] = $budgetAccountLine;
        return $this;
    }

    /**
     * isset budgetAccountLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBudgetAccountLine($index)
    {
        return isset($this->budgetAccountLine[$index]);
    }

    /**
     * unset budgetAccountLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBudgetAccountLine($index)
    {
        unset($this->budgetAccountLine[$index]);
    }

    /**
     * Gets as budgetAccountLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccountLine[]
     */
    public function getBudgetAccountLine()
    {
        return $this->budgetAccountLine;
    }

    /**
     * Sets a new budgetAccountLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccountLine[] $budgetAccountLine
     * @return self
     */
    public function setBudgetAccountLine(?array $budgetAccountLine = null)
    {
        $this->budgetAccountLine = $budgetAccountLine;
        return $this;
    }

    /**
     * Gets as replacedNoticeDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacedNoticeDocumentReference
     */
    public function getReplacedNoticeDocumentReference()
    {
        return $this->replacedNoticeDocumentReference;
    }

    /**
     * Sets a new replacedNoticeDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference
     * @return self
     */
    public function setReplacedNoticeDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference = null)
    {
        $this->replacedNoticeDocumentReference = $replacedNoticeDocumentReference;
        return $this;
    }
}

