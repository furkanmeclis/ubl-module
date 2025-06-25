<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ExceptionNotificationLineType
 *
 *
 * XSD Type: ExceptionNotificationLineType
 */
class ExceptionNotificationLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExceptionStatusCode $exceptionStatusCode
     */
    private $exceptionStatusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CollaborationPriorityCode $collaborationPriorityCode
     */
    private $collaborationPriorityCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResolutionCode $resolutionCode
     */
    private $resolutionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparedValueMeasure $comparedValueMeasure
     */
    private $comparedValueMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SourceValueMeasure $sourceValueMeasure
     */
    private $sourceValueMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\VarianceQuantity $varianceQuantity
     */
    private $varianceQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerformanceMetricTypeCode $performanceMetricTypeCode
     */
    private $performanceMetricTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExceptionObservationPeriod $exceptionObservationPeriod
     */
    private $exceptionObservationPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastException $forecastException
     */
    private $forecastException = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem $supplyItem
     */
    private $supplyItem = null;

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
     * Gets as exceptionStatusCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExceptionStatusCode
     */
    public function getExceptionStatusCode()
    {
        return $this->exceptionStatusCode;
    }

    /**
     * Sets a new exceptionStatusCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExceptionStatusCode $exceptionStatusCode
     * @return self
     */
    public function setExceptionStatusCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ExceptionStatusCode $exceptionStatusCode = null)
    {
        $this->exceptionStatusCode = $exceptionStatusCode;
        return $this;
    }

    /**
     * Gets as collaborationPriorityCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CollaborationPriorityCode
     */
    public function getCollaborationPriorityCode()
    {
        return $this->collaborationPriorityCode;
    }

    /**
     * Sets a new collaborationPriorityCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CollaborationPriorityCode $collaborationPriorityCode
     * @return self
     */
    public function setCollaborationPriorityCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CollaborationPriorityCode $collaborationPriorityCode = null)
    {
        $this->collaborationPriorityCode = $collaborationPriorityCode;
        return $this;
    }

    /**
     * Gets as resolutionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResolutionCode
     */
    public function getResolutionCode()
    {
        return $this->resolutionCode;
    }

    /**
     * Sets a new resolutionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResolutionCode $resolutionCode
     * @return self
     */
    public function setResolutionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ResolutionCode $resolutionCode = null)
    {
        $this->resolutionCode = $resolutionCode;
        return $this;
    }

    /**
     * Gets as comparedValueMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparedValueMeasure
     */
    public function getComparedValueMeasure()
    {
        return $this->comparedValueMeasure;
    }

    /**
     * Sets a new comparedValueMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparedValueMeasure $comparedValueMeasure
     * @return self
     */
    public function setComparedValueMeasure(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparedValueMeasure $comparedValueMeasure)
    {
        $this->comparedValueMeasure = $comparedValueMeasure;
        return $this;
    }

    /**
     * Gets as sourceValueMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SourceValueMeasure
     */
    public function getSourceValueMeasure()
    {
        return $this->sourceValueMeasure;
    }

    /**
     * Sets a new sourceValueMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SourceValueMeasure $sourceValueMeasure
     * @return self
     */
    public function setSourceValueMeasure(\FurkanMeclis\GIB\UBL\Common\BasicComponents\SourceValueMeasure $sourceValueMeasure)
    {
        $this->sourceValueMeasure = $sourceValueMeasure;
        return $this;
    }

    /**
     * Gets as varianceQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\VarianceQuantity
     */
    public function getVarianceQuantity()
    {
        return $this->varianceQuantity;
    }

    /**
     * Sets a new varianceQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\VarianceQuantity $varianceQuantity
     * @return self
     */
    public function setVarianceQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\VarianceQuantity $varianceQuantity = null)
    {
        $this->varianceQuantity = $varianceQuantity;
        return $this;
    }

    /**
     * Gets as supplyChainActivityTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCode()
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * Sets a new supplyChainActivityTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode = null)
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;
        return $this;
    }

    /**
     * Gets as performanceMetricTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerformanceMetricTypeCode
     */
    public function getPerformanceMetricTypeCode()
    {
        return $this->performanceMetricTypeCode;
    }

    /**
     * Sets a new performanceMetricTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerformanceMetricTypeCode $performanceMetricTypeCode
     * @return self
     */
    public function setPerformanceMetricTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PerformanceMetricTypeCode $performanceMetricTypeCode = null)
    {
        $this->performanceMetricTypeCode = $performanceMetricTypeCode;
        return $this;
    }

    /**
     * Gets as exceptionObservationPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExceptionObservationPeriod
     */
    public function getExceptionObservationPeriod()
    {
        return $this->exceptionObservationPeriod;
    }

    /**
     * Sets a new exceptionObservationPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExceptionObservationPeriod $exceptionObservationPeriod
     * @return self
     */
    public function setExceptionObservationPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExceptionObservationPeriod $exceptionObservationPeriod = null)
    {
        $this->exceptionObservationPeriod = $exceptionObservationPeriod;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as forecastException
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastException
     */
    public function getForecastException()
    {
        return $this->forecastException;
    }

    /**
     * Sets a new forecastException
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastException $forecastException
     * @return self
     */
    public function setForecastException(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastException $forecastException = null)
    {
        $this->forecastException = $forecastException;
        return $this;
    }

    /**
     * Gets as supplyItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem
     */
    public function getSupplyItem()
    {
        return $this->supplyItem;
    }

    /**
     * Sets a new supplyItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem $supplyItem
     * @return self
     */
    public function setSupplyItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem $supplyItem)
    {
        $this->supplyItem = $supplyItem;
        return $this;
    }
}

