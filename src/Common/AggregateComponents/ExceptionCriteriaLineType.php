<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ExceptionCriteriaLineType
 *
 *
 * XSD Type: ExceptionCriteriaLineType
 */
class ExceptionCriteriaLineType
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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdValueComparisonCode $thresholdValueComparisonCode
     */
    private $thresholdValueComparisonCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdQuantity $thresholdQuantity
     */
    private $thresholdQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExceptionStatusCode $exceptionStatusCode
     */
    private $exceptionStatusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CollaborationPriorityCode $collaborationPriorityCode
     */
    private $collaborationPriorityCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExceptionResolutionCode $exceptionResolutionCode
     */
    private $exceptionResolutionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PerformanceMetricTypeCode $performanceMetricTypeCode
     */
    private $performanceMetricTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EffectivePeriod $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem[] $supplyItem
     */
    private $supplyItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastExceptionCriterionLine $forecastExceptionCriterionLine
     */
    private $forecastExceptionCriterionLine = null;

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
     * Gets as thresholdValueComparisonCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdValueComparisonCode
     */
    public function getThresholdValueComparisonCode()
    {
        return $this->thresholdValueComparisonCode;
    }

    /**
     * Sets a new thresholdValueComparisonCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdValueComparisonCode $thresholdValueComparisonCode
     * @return self
     */
    public function setThresholdValueComparisonCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdValueComparisonCode $thresholdValueComparisonCode)
    {
        $this->thresholdValueComparisonCode = $thresholdValueComparisonCode;
        return $this;
    }

    /**
     * Gets as thresholdQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdQuantity
     */
    public function getThresholdQuantity()
    {
        return $this->thresholdQuantity;
    }

    /**
     * Sets a new thresholdQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdQuantity $thresholdQuantity
     * @return self
     */
    public function setThresholdQuantity(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdQuantity $thresholdQuantity)
    {
        $this->thresholdQuantity = $thresholdQuantity;
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
     * Gets as exceptionResolutionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExceptionResolutionCode
     */
    public function getExceptionResolutionCode()
    {
        return $this->exceptionResolutionCode;
    }

    /**
     * Sets a new exceptionResolutionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExceptionResolutionCode $exceptionResolutionCode
     * @return self
     */
    public function setExceptionResolutionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ExceptionResolutionCode $exceptionResolutionCode = null)
    {
        $this->exceptionResolutionCode = $exceptionResolutionCode;
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
     * Gets as effectivePeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EffectivePeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EffectivePeriod $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EffectivePeriod $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Adds as supplyItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem $supplyItem
     */
    public function addToSupplyItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem $supplyItem)
    {
        $this->supplyItem[] = $supplyItem;
        return $this;
    }

    /**
     * isset supplyItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplyItem($index)
    {
        return isset($this->supplyItem[$index]);
    }

    /**
     * unset supplyItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplyItem($index)
    {
        unset($this->supplyItem[$index]);
    }

    /**
     * Gets as supplyItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem[]
     */
    public function getSupplyItem()
    {
        return $this->supplyItem;
    }

    /**
     * Sets a new supplyItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupplyItem[] $supplyItem
     * @return self
     */
    public function setSupplyItem(array $supplyItem)
    {
        $this->supplyItem = $supplyItem;
        return $this;
    }

    /**
     * Gets as forecastExceptionCriterionLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastExceptionCriterionLine
     */
    public function getForecastExceptionCriterionLine()
    {
        return $this->forecastExceptionCriterionLine;
    }

    /**
     * Sets a new forecastExceptionCriterionLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastExceptionCriterionLine $forecastExceptionCriterionLine
     * @return self
     */
    public function setForecastExceptionCriterionLine(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ForecastExceptionCriterionLine $forecastExceptionCriterionLine = null)
    {
        $this->forecastExceptionCriterionLine = $forecastExceptionCriterionLine;
        return $this;
    }
}

