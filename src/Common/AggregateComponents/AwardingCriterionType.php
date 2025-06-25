<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing AwardingCriterionType
 *
 *
 * XSD Type: AwardingCriterionType
 */
class AwardingCriterionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AwardingCriterionTypeCode $awardingCriterionTypeCode
     */
    private $awardingCriterionTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\WeightNumeric $weightNumeric
     */
    private $weightNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Weight[] $weight
     */
    private $weight = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationExpression[] $calculationExpression
     */
    private $calculationExpression = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationExpressionCode $calculationExpressionCode
     */
    private $calculationExpressionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumAmount $minimumAmount
     */
    private $minimumAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAmount $maximumAmount
     */
    private $maximumAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumImprovementBid[] $minimumImprovementBid
     */
    private $minimumImprovementBid = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubordinateAwardingCriterion[] $subordinateAwardingCriterion
     */
    private $subordinateAwardingCriterion = [
        
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
     * Gets as awardingCriterionTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AwardingCriterionTypeCode
     */
    public function getAwardingCriterionTypeCode()
    {
        return $this->awardingCriterionTypeCode;
    }

    /**
     * Sets a new awardingCriterionTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AwardingCriterionTypeCode $awardingCriterionTypeCode
     * @return self
     */
    public function setAwardingCriterionTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AwardingCriterionTypeCode $awardingCriterionTypeCode = null)
    {
        $this->awardingCriterionTypeCode = $awardingCriterionTypeCode;
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
     * Gets as weightNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\WeightNumeric
     */
    public function getWeightNumeric()
    {
        return $this->weightNumeric;
    }

    /**
     * Sets a new weightNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\WeightNumeric $weightNumeric
     * @return self
     */
    public function setWeightNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\WeightNumeric $weightNumeric = null)
    {
        $this->weightNumeric = $weightNumeric;
        return $this;
    }

    /**
     * Adds as weight
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Weight $weight
     */
    public function addToWeight(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Weight $weight)
    {
        $this->weight[] = $weight;
        return $this;
    }

    /**
     * isset weight
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWeight($index)
    {
        return isset($this->weight[$index]);
    }

    /**
     * unset weight
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWeight($index)
    {
        unset($this->weight[$index]);
    }

    /**
     * Gets as weight
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Weight[]
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Weight[] $weight
     * @return self
     */
    public function setWeight(?array $weight = null)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Adds as calculationExpression
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationExpression $calculationExpression
     */
    public function addToCalculationExpression(\FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationExpression $calculationExpression)
    {
        $this->calculationExpression[] = $calculationExpression;
        return $this;
    }

    /**
     * isset calculationExpression
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalculationExpression($index)
    {
        return isset($this->calculationExpression[$index]);
    }

    /**
     * unset calculationExpression
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalculationExpression($index)
    {
        unset($this->calculationExpression[$index]);
    }

    /**
     * Gets as calculationExpression
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationExpression[]
     */
    public function getCalculationExpression()
    {
        return $this->calculationExpression;
    }

    /**
     * Sets a new calculationExpression
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationExpression[] $calculationExpression
     * @return self
     */
    public function setCalculationExpression(?array $calculationExpression = null)
    {
        $this->calculationExpression = $calculationExpression;
        return $this;
    }

    /**
     * Gets as calculationExpressionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationExpressionCode
     */
    public function getCalculationExpressionCode()
    {
        return $this->calculationExpressionCode;
    }

    /**
     * Sets a new calculationExpressionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationExpressionCode $calculationExpressionCode
     * @return self
     */
    public function setCalculationExpressionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CalculationExpressionCode $calculationExpressionCode = null)
    {
        $this->calculationExpressionCode = $calculationExpressionCode;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity = null)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity = null)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as minimumAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumAmount
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * Sets a new minimumAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumAmount $minimumAmount = null)
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * Gets as maximumAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAmount
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }

    /**
     * Sets a new maximumAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAmount $maximumAmount = null)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }

    /**
     * Adds as minimumImprovementBid
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumImprovementBid $minimumImprovementBid
     */
    public function addToMinimumImprovementBid(\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumImprovementBid $minimumImprovementBid)
    {
        $this->minimumImprovementBid[] = $minimumImprovementBid;
        return $this;
    }

    /**
     * isset minimumImprovementBid
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMinimumImprovementBid($index)
    {
        return isset($this->minimumImprovementBid[$index]);
    }

    /**
     * unset minimumImprovementBid
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMinimumImprovementBid($index)
    {
        unset($this->minimumImprovementBid[$index]);
    }

    /**
     * Gets as minimumImprovementBid
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumImprovementBid[]
     */
    public function getMinimumImprovementBid()
    {
        return $this->minimumImprovementBid;
    }

    /**
     * Sets a new minimumImprovementBid
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumImprovementBid[] $minimumImprovementBid
     * @return self
     */
    public function setMinimumImprovementBid(?array $minimumImprovementBid = null)
    {
        $this->minimumImprovementBid = $minimumImprovementBid;
        return $this;
    }

    /**
     * Adds as subordinateAwardingCriterion
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubordinateAwardingCriterion $subordinateAwardingCriterion
     */
    public function addToSubordinateAwardingCriterion(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubordinateAwardingCriterion $subordinateAwardingCriterion)
    {
        $this->subordinateAwardingCriterion[] = $subordinateAwardingCriterion;
        return $this;
    }

    /**
     * isset subordinateAwardingCriterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubordinateAwardingCriterion($index)
    {
        return isset($this->subordinateAwardingCriterion[$index]);
    }

    /**
     * unset subordinateAwardingCriterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubordinateAwardingCriterion($index)
    {
        unset($this->subordinateAwardingCriterion[$index]);
    }

    /**
     * Gets as subordinateAwardingCriterion
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubordinateAwardingCriterion[]
     */
    public function getSubordinateAwardingCriterion()
    {
        return $this->subordinateAwardingCriterion;
    }

    /**
     * Sets a new subordinateAwardingCriterion
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubordinateAwardingCriterion[] $subordinateAwardingCriterion
     * @return self
     */
    public function setSubordinateAwardingCriterion(?array $subordinateAwardingCriterion = null)
    {
        $this->subordinateAwardingCriterion = $subordinateAwardingCriterion;
        return $this;
    }
}

