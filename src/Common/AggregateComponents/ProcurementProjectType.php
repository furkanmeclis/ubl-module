<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ProcurementProjectType
 *
 *
 * XSD Type: ProcurementProjectType
 */
class ProcurementProjectType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcurementTypeCode $procurementTypeCode
     */
    private $procurementTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcurementSubTypeCode $procurementSubTypeCode
     */
    private $procurementSubTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\QualityControlCode $qualityControlCode
     */
    private $qualityControlCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RequiredFeeAmount $requiredFeeAmount
     */
    private $requiredFeeAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription[] $feeDescription
     */
    private $feeDescription = [
        
    ];

    /**
     * @var \DateTime $requestedDeliveryDate
     */
    private $requestedDeliveryDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedOverallContractQuantity $estimatedOverallContractQuantity
     */
    private $estimatedOverallContractQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequestedTenderTotal $requestedTenderTotal
     */
    private $requestedTenderTotal = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainCommodityClassification $mainCommodityClassification
     */
    private $mainCommodityClassification = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalCommodityClassification[] $additionalCommodityClassification
     */
    private $additionalCommodityClassification = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RealizedLocation[] $realizedLocation
     */
    private $realizedLocation = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedPeriod $plannedPeriod
     */
    private $plannedPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractExtension $contractExtension
     */
    private $contractExtension = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequestForTenderLine[] $requestForTenderLine
     */
    private $requestForTenderLine = [
        
    ];

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
     * Adds as name
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    public function addToName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
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
     * Gets as procurementTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcurementTypeCode
     */
    public function getProcurementTypeCode()
    {
        return $this->procurementTypeCode;
    }

    /**
     * Sets a new procurementTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcurementTypeCode $procurementTypeCode
     * @return self
     */
    public function setProcurementTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcurementTypeCode $procurementTypeCode = null)
    {
        $this->procurementTypeCode = $procurementTypeCode;
        return $this;
    }

    /**
     * Gets as procurementSubTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcurementSubTypeCode
     */
    public function getProcurementSubTypeCode()
    {
        return $this->procurementSubTypeCode;
    }

    /**
     * Sets a new procurementSubTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcurementSubTypeCode $procurementSubTypeCode
     * @return self
     */
    public function setProcurementSubTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcurementSubTypeCode $procurementSubTypeCode = null)
    {
        $this->procurementSubTypeCode = $procurementSubTypeCode;
        return $this;
    }

    /**
     * Gets as qualityControlCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\QualityControlCode
     */
    public function getQualityControlCode()
    {
        return $this->qualityControlCode;
    }

    /**
     * Sets a new qualityControlCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\QualityControlCode $qualityControlCode
     * @return self
     */
    public function setQualityControlCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\QualityControlCode $qualityControlCode = null)
    {
        $this->qualityControlCode = $qualityControlCode;
        return $this;
    }

    /**
     * Gets as requiredFeeAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RequiredFeeAmount
     */
    public function getRequiredFeeAmount()
    {
        return $this->requiredFeeAmount;
    }

    /**
     * Sets a new requiredFeeAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RequiredFeeAmount $requiredFeeAmount
     * @return self
     */
    public function setRequiredFeeAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RequiredFeeAmount $requiredFeeAmount = null)
    {
        $this->requiredFeeAmount = $requiredFeeAmount;
        return $this;
    }

    /**
     * Adds as feeDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription $feeDescription
     */
    public function addToFeeDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription $feeDescription)
    {
        $this->feeDescription[] = $feeDescription;
        return $this;
    }

    /**
     * isset feeDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeeDescription($index)
    {
        return isset($this->feeDescription[$index]);
    }

    /**
     * unset feeDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeeDescription($index)
    {
        unset($this->feeDescription[$index]);
    }

    /**
     * Gets as feeDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription[]
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeeDescription[] $feeDescription
     * @return self
     */
    public function setFeeDescription(?array $feeDescription = null)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }

    /**
     * Gets as requestedDeliveryDate
     *
     * @return \DateTime
     */
    public function getRequestedDeliveryDate()
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * Sets a new requestedDeliveryDate
     *
     * @param \DateTime $requestedDeliveryDate
     * @return self
     */
    public function setRequestedDeliveryDate(?\DateTime $requestedDeliveryDate = null)
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
        return $this;
    }

    /**
     * Gets as estimatedOverallContractQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedOverallContractQuantity
     */
    public function getEstimatedOverallContractQuantity()
    {
        return $this->estimatedOverallContractQuantity;
    }

    /**
     * Sets a new estimatedOverallContractQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedOverallContractQuantity $estimatedOverallContractQuantity
     * @return self
     */
    public function setEstimatedOverallContractQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedOverallContractQuantity $estimatedOverallContractQuantity = null)
    {
        $this->estimatedOverallContractQuantity = $estimatedOverallContractQuantity;
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
     * Gets as requestedTenderTotal
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequestedTenderTotal
     */
    public function getRequestedTenderTotal()
    {
        return $this->requestedTenderTotal;
    }

    /**
     * Sets a new requestedTenderTotal
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequestedTenderTotal $requestedTenderTotal
     * @return self
     */
    public function setRequestedTenderTotal(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequestedTenderTotal $requestedTenderTotal = null)
    {
        $this->requestedTenderTotal = $requestedTenderTotal;
        return $this;
    }

    /**
     * Gets as mainCommodityClassification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainCommodityClassification
     */
    public function getMainCommodityClassification()
    {
        return $this->mainCommodityClassification;
    }

    /**
     * Sets a new mainCommodityClassification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainCommodityClassification $mainCommodityClassification
     * @return self
     */
    public function setMainCommodityClassification(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainCommodityClassification $mainCommodityClassification = null)
    {
        $this->mainCommodityClassification = $mainCommodityClassification;
        return $this;
    }

    /**
     * Adds as additionalCommodityClassification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalCommodityClassification $additionalCommodityClassification
     */
    public function addToAdditionalCommodityClassification(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalCommodityClassification $additionalCommodityClassification)
    {
        $this->additionalCommodityClassification[] = $additionalCommodityClassification;
        return $this;
    }

    /**
     * isset additionalCommodityClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalCommodityClassification($index)
    {
        return isset($this->additionalCommodityClassification[$index]);
    }

    /**
     * unset additionalCommodityClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalCommodityClassification($index)
    {
        unset($this->additionalCommodityClassification[$index]);
    }

    /**
     * Gets as additionalCommodityClassification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalCommodityClassification[]
     */
    public function getAdditionalCommodityClassification()
    {
        return $this->additionalCommodityClassification;
    }

    /**
     * Sets a new additionalCommodityClassification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalCommodityClassification[] $additionalCommodityClassification
     * @return self
     */
    public function setAdditionalCommodityClassification(?array $additionalCommodityClassification = null)
    {
        $this->additionalCommodityClassification = $additionalCommodityClassification;
        return $this;
    }

    /**
     * Adds as realizedLocation
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RealizedLocation $realizedLocation
     */
    public function addToRealizedLocation(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RealizedLocation $realizedLocation)
    {
        $this->realizedLocation[] = $realizedLocation;
        return $this;
    }

    /**
     * isset realizedLocation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRealizedLocation($index)
    {
        return isset($this->realizedLocation[$index]);
    }

    /**
     * unset realizedLocation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRealizedLocation($index)
    {
        unset($this->realizedLocation[$index]);
    }

    /**
     * Gets as realizedLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RealizedLocation[]
     */
    public function getRealizedLocation()
    {
        return $this->realizedLocation;
    }

    /**
     * Sets a new realizedLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RealizedLocation[] $realizedLocation
     * @return self
     */
    public function setRealizedLocation(?array $realizedLocation = null)
    {
        $this->realizedLocation = $realizedLocation;
        return $this;
    }

    /**
     * Gets as plannedPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedPeriod
     */
    public function getPlannedPeriod()
    {
        return $this->plannedPeriod;
    }

    /**
     * Sets a new plannedPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedPeriod $plannedPeriod
     * @return self
     */
    public function setPlannedPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PlannedPeriod $plannedPeriod = null)
    {
        $this->plannedPeriod = $plannedPeriod;
        return $this;
    }

    /**
     * Gets as contractExtension
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractExtension
     */
    public function getContractExtension()
    {
        return $this->contractExtension;
    }

    /**
     * Sets a new contractExtension
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractExtension $contractExtension
     * @return self
     */
    public function setContractExtension(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContractExtension $contractExtension = null)
    {
        $this->contractExtension = $contractExtension;
        return $this;
    }

    /**
     * Adds as requestForTenderLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequestForTenderLine $requestForTenderLine
     */
    public function addToRequestForTenderLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequestForTenderLine $requestForTenderLine)
    {
        $this->requestForTenderLine[] = $requestForTenderLine;
        return $this;
    }

    /**
     * isset requestForTenderLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestForTenderLine($index)
    {
        return isset($this->requestForTenderLine[$index]);
    }

    /**
     * unset requestForTenderLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestForTenderLine($index)
    {
        unset($this->requestForTenderLine[$index]);
    }

    /**
     * Gets as requestForTenderLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequestForTenderLine[]
     */
    public function getRequestForTenderLine()
    {
        return $this->requestForTenderLine;
    }

    /**
     * Sets a new requestForTenderLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequestForTenderLine[] $requestForTenderLine
     * @return self
     */
    public function setRequestForTenderLine(?array $requestForTenderLine = null)
    {
        $this->requestForTenderLine = $requestForTenderLine;
        return $this;
    }
}

