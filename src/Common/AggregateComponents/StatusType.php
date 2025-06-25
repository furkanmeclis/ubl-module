<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing StatusType
 *
 *
 * XSD Type: StatusType
 */
class StatusType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConditionCode $conditionCode
     */
    private $conditionCode = null;

    /**
     * @var \DateTime $referenceDate
     */
    private $referenceDate = null;

    /**
     * @var \DateTime $referenceTime
     */
    private $referenceTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusReasonCode $statusReasonCode
     */
    private $statusReasonCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusReason[] $statusReason
     */
    private $statusReason = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceID $sequenceID
     */
    private $sequenceID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Text[] $text
     */
    private $text = [
        
    ];

    /**
     * @var bool $indicationIndicator
     */
    private $indicationIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent $percent
     */
    private $percent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReliabilityPercent $reliabilityPercent
     */
    private $reliabilityPercent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Condition[] $condition
     */
    private $condition = [
        
    ];

    /**
     * Gets as conditionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConditionCode
     */
    public function getConditionCode()
    {
        return $this->conditionCode;
    }

    /**
     * Sets a new conditionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConditionCode $conditionCode
     * @return self
     */
    public function setConditionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConditionCode $conditionCode = null)
    {
        $this->conditionCode = $conditionCode;
        return $this;
    }

    /**
     * Gets as referenceDate
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * Sets a new referenceDate
     *
     * @param \DateTime $referenceDate
     * @return self
     */
    public function setReferenceDate(?\DateTime $referenceDate = null)
    {
        $this->referenceDate = $referenceDate;
        return $this;
    }

    /**
     * Gets as referenceTime
     *
     * @return \DateTime
     */
    public function getReferenceTime()
    {
        return $this->referenceTime;
    }

    /**
     * Sets a new referenceTime
     *
     * @param \DateTime $referenceTime
     * @return self
     */
    public function setReferenceTime(?\DateTime $referenceTime = null)
    {
        $this->referenceTime = $referenceTime;
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
     * Gets as statusReasonCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusReasonCode
     */
    public function getStatusReasonCode()
    {
        return $this->statusReasonCode;
    }

    /**
     * Sets a new statusReasonCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusReasonCode $statusReasonCode
     * @return self
     */
    public function setStatusReasonCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusReasonCode $statusReasonCode = null)
    {
        $this->statusReasonCode = $statusReasonCode;
        return $this;
    }

    /**
     * Adds as statusReason
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusReason $statusReason
     */
    public function addToStatusReason(\FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusReason $statusReason)
    {
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * isset statusReason
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusReason($index)
    {
        return isset($this->statusReason[$index]);
    }

    /**
     * unset statusReason
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusReason($index)
    {
        unset($this->statusReason[$index]);
    }

    /**
     * Gets as statusReason
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusReason[]
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\StatusReason[] $statusReason
     * @return self
     */
    public function setStatusReason(?array $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as sequenceID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceID
     */
    public function getSequenceID()
    {
        return $this->sequenceID;
    }

    /**
     * Sets a new sequenceID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceID $sequenceID
     * @return self
     */
    public function setSequenceID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceID $sequenceID = null)
    {
        $this->sequenceID = $sequenceID;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Text $text
     */
    public function addToText(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Text $text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * @param int|string $index
     * @return bool
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * @param int|string $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Text[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Text[] $text
     * @return self
     */
    public function setText(?array $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as indicationIndicator
     *
     * @return bool
     */
    public function getIndicationIndicator()
    {
        return $this->indicationIndicator;
    }

    /**
     * Sets a new indicationIndicator
     *
     * @param bool $indicationIndicator
     * @return self
     */
    public function setIndicationIndicator($indicationIndicator)
    {
        $this->indicationIndicator = $indicationIndicator;
        return $this;
    }

    /**
     * Gets as percent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent $percent
     * @return self
     */
    public function setPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent $percent = null)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as reliabilityPercent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReliabilityPercent
     */
    public function getReliabilityPercent()
    {
        return $this->reliabilityPercent;
    }

    /**
     * Sets a new reliabilityPercent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReliabilityPercent $reliabilityPercent
     * @return self
     */
    public function setReliabilityPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReliabilityPercent $reliabilityPercent = null)
    {
        $this->reliabilityPercent = $reliabilityPercent;
        return $this;
    }

    /**
     * Adds as condition
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Condition $condition
     */
    public function addToCondition(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Condition $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Condition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Condition[] $condition
     * @return self
     */
    public function setCondition(?array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }
}

