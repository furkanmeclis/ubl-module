<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TenderingProcessType
 *
 *
 * XSD Type: TenderingProcessType
 */
class TenderingProcessType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OriginalContractingSystemID $originalContractingSystemID
     */
    private $originalContractingSystemID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NegotiationDescription[] $negotiationDescription
     */
    private $negotiationDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcedureCode $procedureCode
     */
    private $procedureCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UrgencyCode $urgencyCode
     */
    private $urgencyCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpenseCode $expenseCode
     */
    private $expenseCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartPresentationCode $partPresentationCode
     */
    private $partPresentationCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractingSystemCode $contractingSystemCode
     */
    private $contractingSystemCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubmissionMethodCode $submissionMethodCode
     */
    private $submissionMethodCode = null;

    /**
     * @var bool $candidateReductionConstraintIndicator
     */
    private $candidateReductionConstraintIndicator = null;

    /**
     * @var bool $governmentAgreementConstraintIndicator
     */
    private $governmentAgreementConstraintIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentAvailabilityPeriod $documentAvailabilityPeriod
     */
    private $documentAvailabilityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderSubmissionDeadlinePeriod $tenderSubmissionDeadlinePeriod
     */
    private $tenderSubmissionDeadlinePeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvitationSubmissionPeriod $invitationSubmissionPeriod
     */
    private $invitationSubmissionPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ParticipationRequestReceptionPeriod $participationRequestReceptionPeriod
     */
    private $participationRequestReceptionPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NoticeDocumentReference[] $noticeDocumentReference
     */
    private $noticeDocumentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     */
    private $additionalDocumentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcessJustification[] $processJustification
     */
    private $processJustification = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorShortList $economicOperatorShortList
     */
    private $economicOperatorShortList = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OpenTenderEvent[] $openTenderEvent
     */
    private $openTenderEvent = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AuctionTerms $auctionTerms
     */
    private $auctionTerms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FrameworkAgreement $frameworkAgreement
     */
    private $frameworkAgreement = null;

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
     * Gets as originalContractingSystemID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OriginalContractingSystemID
     */
    public function getOriginalContractingSystemID()
    {
        return $this->originalContractingSystemID;
    }

    /**
     * Sets a new originalContractingSystemID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OriginalContractingSystemID $originalContractingSystemID
     * @return self
     */
    public function setOriginalContractingSystemID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OriginalContractingSystemID $originalContractingSystemID = null)
    {
        $this->originalContractingSystemID = $originalContractingSystemID;
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
     * Adds as negotiationDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NegotiationDescription $negotiationDescription
     */
    public function addToNegotiationDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\NegotiationDescription $negotiationDescription)
    {
        $this->negotiationDescription[] = $negotiationDescription;
        return $this;
    }

    /**
     * isset negotiationDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNegotiationDescription($index)
    {
        return isset($this->negotiationDescription[$index]);
    }

    /**
     * unset negotiationDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNegotiationDescription($index)
    {
        unset($this->negotiationDescription[$index]);
    }

    /**
     * Gets as negotiationDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NegotiationDescription[]
     */
    public function getNegotiationDescription()
    {
        return $this->negotiationDescription;
    }

    /**
     * Sets a new negotiationDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NegotiationDescription[] $negotiationDescription
     * @return self
     */
    public function setNegotiationDescription(?array $negotiationDescription = null)
    {
        $this->negotiationDescription = $negotiationDescription;
        return $this;
    }

    /**
     * Gets as procedureCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcedureCode
     */
    public function getProcedureCode()
    {
        return $this->procedureCode;
    }

    /**
     * Sets a new procedureCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcedureCode $procedureCode
     * @return self
     */
    public function setProcedureCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcedureCode $procedureCode = null)
    {
        $this->procedureCode = $procedureCode;
        return $this;
    }

    /**
     * Gets as urgencyCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\UrgencyCode
     */
    public function getUrgencyCode()
    {
        return $this->urgencyCode;
    }

    /**
     * Sets a new urgencyCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\UrgencyCode $urgencyCode
     * @return self
     */
    public function setUrgencyCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\UrgencyCode $urgencyCode = null)
    {
        $this->urgencyCode = $urgencyCode;
        return $this;
    }

    /**
     * Gets as expenseCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpenseCode
     */
    public function getExpenseCode()
    {
        return $this->expenseCode;
    }

    /**
     * Sets a new expenseCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpenseCode $expenseCode
     * @return self
     */
    public function setExpenseCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpenseCode $expenseCode = null)
    {
        $this->expenseCode = $expenseCode;
        return $this;
    }

    /**
     * Gets as partPresentationCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartPresentationCode
     */
    public function getPartPresentationCode()
    {
        return $this->partPresentationCode;
    }

    /**
     * Sets a new partPresentationCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartPresentationCode $partPresentationCode
     * @return self
     */
    public function setPartPresentationCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PartPresentationCode $partPresentationCode = null)
    {
        $this->partPresentationCode = $partPresentationCode;
        return $this;
    }

    /**
     * Gets as contractingSystemCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractingSystemCode
     */
    public function getContractingSystemCode()
    {
        return $this->contractingSystemCode;
    }

    /**
     * Sets a new contractingSystemCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractingSystemCode $contractingSystemCode
     * @return self
     */
    public function setContractingSystemCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ContractingSystemCode $contractingSystemCode = null)
    {
        $this->contractingSystemCode = $contractingSystemCode;
        return $this;
    }

    /**
     * Gets as submissionMethodCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubmissionMethodCode
     */
    public function getSubmissionMethodCode()
    {
        return $this->submissionMethodCode;
    }

    /**
     * Sets a new submissionMethodCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubmissionMethodCode $submissionMethodCode
     * @return self
     */
    public function setSubmissionMethodCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SubmissionMethodCode $submissionMethodCode = null)
    {
        $this->submissionMethodCode = $submissionMethodCode;
        return $this;
    }

    /**
     * Gets as candidateReductionConstraintIndicator
     *
     * @return bool
     */
    public function getCandidateReductionConstraintIndicator()
    {
        return $this->candidateReductionConstraintIndicator;
    }

    /**
     * Sets a new candidateReductionConstraintIndicator
     *
     * @param bool $candidateReductionConstraintIndicator
     * @return self
     */
    public function setCandidateReductionConstraintIndicator($candidateReductionConstraintIndicator)
    {
        $this->candidateReductionConstraintIndicator = $candidateReductionConstraintIndicator;
        return $this;
    }

    /**
     * Gets as governmentAgreementConstraintIndicator
     *
     * @return bool
     */
    public function getGovernmentAgreementConstraintIndicator()
    {
        return $this->governmentAgreementConstraintIndicator;
    }

    /**
     * Sets a new governmentAgreementConstraintIndicator
     *
     * @param bool $governmentAgreementConstraintIndicator
     * @return self
     */
    public function setGovernmentAgreementConstraintIndicator($governmentAgreementConstraintIndicator)
    {
        $this->governmentAgreementConstraintIndicator = $governmentAgreementConstraintIndicator;
        return $this;
    }

    /**
     * Gets as documentAvailabilityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentAvailabilityPeriod
     */
    public function getDocumentAvailabilityPeriod()
    {
        return $this->documentAvailabilityPeriod;
    }

    /**
     * Sets a new documentAvailabilityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentAvailabilityPeriod $documentAvailabilityPeriod
     * @return self
     */
    public function setDocumentAvailabilityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentAvailabilityPeriod $documentAvailabilityPeriod = null)
    {
        $this->documentAvailabilityPeriod = $documentAvailabilityPeriod;
        return $this;
    }

    /**
     * Gets as tenderSubmissionDeadlinePeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderSubmissionDeadlinePeriod
     */
    public function getTenderSubmissionDeadlinePeriod()
    {
        return $this->tenderSubmissionDeadlinePeriod;
    }

    /**
     * Sets a new tenderSubmissionDeadlinePeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderSubmissionDeadlinePeriod $tenderSubmissionDeadlinePeriod
     * @return self
     */
    public function setTenderSubmissionDeadlinePeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderSubmissionDeadlinePeriod $tenderSubmissionDeadlinePeriod = null)
    {
        $this->tenderSubmissionDeadlinePeriod = $tenderSubmissionDeadlinePeriod;
        return $this;
    }

    /**
     * Gets as invitationSubmissionPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvitationSubmissionPeriod
     */
    public function getInvitationSubmissionPeriod()
    {
        return $this->invitationSubmissionPeriod;
    }

    /**
     * Sets a new invitationSubmissionPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvitationSubmissionPeriod $invitationSubmissionPeriod
     * @return self
     */
    public function setInvitationSubmissionPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvitationSubmissionPeriod $invitationSubmissionPeriod = null)
    {
        $this->invitationSubmissionPeriod = $invitationSubmissionPeriod;
        return $this;
    }

    /**
     * Gets as participationRequestReceptionPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ParticipationRequestReceptionPeriod
     */
    public function getParticipationRequestReceptionPeriod()
    {
        return $this->participationRequestReceptionPeriod;
    }

    /**
     * Sets a new participationRequestReceptionPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ParticipationRequestReceptionPeriod $participationRequestReceptionPeriod
     * @return self
     */
    public function setParticipationRequestReceptionPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ParticipationRequestReceptionPeriod $participationRequestReceptionPeriod = null)
    {
        $this->participationRequestReceptionPeriod = $participationRequestReceptionPeriod;
        return $this;
    }

    /**
     * Adds as noticeDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NoticeDocumentReference $noticeDocumentReference
     */
    public function addToNoticeDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\NoticeDocumentReference $noticeDocumentReference)
    {
        $this->noticeDocumentReference[] = $noticeDocumentReference;
        return $this;
    }

    /**
     * isset noticeDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNoticeDocumentReference($index)
    {
        return isset($this->noticeDocumentReference[$index]);
    }

    /**
     * unset noticeDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNoticeDocumentReference($index)
    {
        unset($this->noticeDocumentReference[$index]);
    }

    /**
     * Gets as noticeDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NoticeDocumentReference[]
     */
    public function getNoticeDocumentReference()
    {
        return $this->noticeDocumentReference;
    }

    /**
     * Sets a new noticeDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\NoticeDocumentReference[] $noticeDocumentReference
     * @return self
     */
    public function setNoticeDocumentReference(?array $noticeDocumentReference = null)
    {
        $this->noticeDocumentReference = $noticeDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    public function addToAdditionalDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * isset additionalDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDocumentReference($index)
    {
        return isset($this->additionalDocumentReference[$index]);
    }

    /**
     * unset additionalDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDocumentReference($index)
    {
        unset($this->additionalDocumentReference[$index]);
    }

    /**
     * Gets as additionalDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference[]
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(?array $additionalDocumentReference = null)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as processJustification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcessJustification $processJustification
     */
    public function addToProcessJustification(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcessJustification $processJustification)
    {
        $this->processJustification[] = $processJustification;
        return $this;
    }

    /**
     * isset processJustification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessJustification($index)
    {
        return isset($this->processJustification[$index]);
    }

    /**
     * unset processJustification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessJustification($index)
    {
        unset($this->processJustification[$index]);
    }

    /**
     * Gets as processJustification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcessJustification[]
     */
    public function getProcessJustification()
    {
        return $this->processJustification;
    }

    /**
     * Sets a new processJustification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcessJustification[] $processJustification
     * @return self
     */
    public function setProcessJustification(?array $processJustification = null)
    {
        $this->processJustification = $processJustification;
        return $this;
    }

    /**
     * Gets as economicOperatorShortList
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorShortList
     */
    public function getEconomicOperatorShortList()
    {
        return $this->economicOperatorShortList;
    }

    /**
     * Sets a new economicOperatorShortList
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorShortList $economicOperatorShortList
     * @return self
     */
    public function setEconomicOperatorShortList(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EconomicOperatorShortList $economicOperatorShortList = null)
    {
        $this->economicOperatorShortList = $economicOperatorShortList;
        return $this;
    }

    /**
     * Adds as openTenderEvent
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OpenTenderEvent $openTenderEvent
     */
    public function addToOpenTenderEvent(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OpenTenderEvent $openTenderEvent)
    {
        $this->openTenderEvent[] = $openTenderEvent;
        return $this;
    }

    /**
     * isset openTenderEvent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOpenTenderEvent($index)
    {
        return isset($this->openTenderEvent[$index]);
    }

    /**
     * unset openTenderEvent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOpenTenderEvent($index)
    {
        unset($this->openTenderEvent[$index]);
    }

    /**
     * Gets as openTenderEvent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OpenTenderEvent[]
     */
    public function getOpenTenderEvent()
    {
        return $this->openTenderEvent;
    }

    /**
     * Sets a new openTenderEvent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OpenTenderEvent[] $openTenderEvent
     * @return self
     */
    public function setOpenTenderEvent(?array $openTenderEvent = null)
    {
        $this->openTenderEvent = $openTenderEvent;
        return $this;
    }

    /**
     * Gets as auctionTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AuctionTerms
     */
    public function getAuctionTerms()
    {
        return $this->auctionTerms;
    }

    /**
     * Sets a new auctionTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AuctionTerms $auctionTerms
     * @return self
     */
    public function setAuctionTerms(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AuctionTerms $auctionTerms = null)
    {
        $this->auctionTerms = $auctionTerms;
        return $this;
    }

    /**
     * Gets as frameworkAgreement
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FrameworkAgreement
     */
    public function getFrameworkAgreement()
    {
        return $this->frameworkAgreement;
    }

    /**
     * Sets a new frameworkAgreement
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FrameworkAgreement $frameworkAgreement
     * @return self
     */
    public function setFrameworkAgreement(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FrameworkAgreement $frameworkAgreement = null)
    {
        $this->frameworkAgreement = $frameworkAgreement;
        return $this;
    }
}

