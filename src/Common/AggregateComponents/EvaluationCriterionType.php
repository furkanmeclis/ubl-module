<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EvaluationCriterionType
 *
 *
 * XSD Type: EvaluationCriterionType
 */
class EvaluationCriterionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EvaluationCriterionTypeCode $evaluationCriterionTypeCode
     */
    private $evaluationCriterionTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdAmount $thresholdAmount
     */
    private $thresholdAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdQuantity $thresholdQuantity
     */
    private $thresholdQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpressionCode $expressionCode
     */
    private $expressionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Expression[] $expression
     */
    private $expression = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DurationPeriod $durationPeriod
     */
    private $durationPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence[] $suggestedEvidence
     */
    private $suggestedEvidence = [
        
    ];

    /**
     * Gets as evaluationCriterionTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EvaluationCriterionTypeCode
     */
    public function getEvaluationCriterionTypeCode()
    {
        return $this->evaluationCriterionTypeCode;
    }

    /**
     * Sets a new evaluationCriterionTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EvaluationCriterionTypeCode $evaluationCriterionTypeCode
     * @return self
     */
    public function setEvaluationCriterionTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EvaluationCriterionTypeCode $evaluationCriterionTypeCode = null)
    {
        $this->evaluationCriterionTypeCode = $evaluationCriterionTypeCode;
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
     * Gets as thresholdAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdAmount
     */
    public function getThresholdAmount()
    {
        return $this->thresholdAmount;
    }

    /**
     * Sets a new thresholdAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdAmount $thresholdAmount
     * @return self
     */
    public function setThresholdAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdAmount $thresholdAmount = null)
    {
        $this->thresholdAmount = $thresholdAmount;
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
    public function setThresholdQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ThresholdQuantity $thresholdQuantity = null)
    {
        $this->thresholdQuantity = $thresholdQuantity;
        return $this;
    }

    /**
     * Gets as expressionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpressionCode
     */
    public function getExpressionCode()
    {
        return $this->expressionCode;
    }

    /**
     * Sets a new expressionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpressionCode $expressionCode
     * @return self
     */
    public function setExpressionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpressionCode $expressionCode = null)
    {
        $this->expressionCode = $expressionCode;
        return $this;
    }

    /**
     * Adds as expression
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Expression $expression
     */
    public function addToExpression(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Expression $expression)
    {
        $this->expression[] = $expression;
        return $this;
    }

    /**
     * isset expression
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExpression($index)
    {
        return isset($this->expression[$index]);
    }

    /**
     * unset expression
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExpression($index)
    {
        unset($this->expression[$index]);
    }

    /**
     * Gets as expression
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Expression[]
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Expression[] $expression
     * @return self
     */
    public function setExpression(?array $expression = null)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Gets as durationPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DurationPeriod
     */
    public function getDurationPeriod()
    {
        return $this->durationPeriod;
    }

    /**
     * Sets a new durationPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DurationPeriod $durationPeriod
     * @return self
     */
    public function setDurationPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DurationPeriod $durationPeriod = null)
    {
        $this->durationPeriod = $durationPeriod;
        return $this;
    }

    /**
     * Adds as suggestedEvidence
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence $suggestedEvidence
     */
    public function addToSuggestedEvidence(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence $suggestedEvidence)
    {
        $this->suggestedEvidence[] = $suggestedEvidence;
        return $this;
    }

    /**
     * isset suggestedEvidence
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuggestedEvidence($index)
    {
        return isset($this->suggestedEvidence[$index]);
    }

    /**
     * unset suggestedEvidence
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuggestedEvidence($index)
    {
        unset($this->suggestedEvidence[$index]);
    }

    /**
     * Gets as suggestedEvidence
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence[]
     */
    public function getSuggestedEvidence()
    {
        return $this->suggestedEvidence;
    }

    /**
     * Sets a new suggestedEvidence
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence[] $suggestedEvidence
     * @return self
     */
    public function setSuggestedEvidence(?array $suggestedEvidence = null)
    {
        $this->suggestedEvidence = $suggestedEvidence;
        return $this;
    }
}

