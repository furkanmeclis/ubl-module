<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing BudgetAccountType
 *
 *
 * XSD Type: BudgetAccountType
 */
class BudgetAccountType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BudgetYearNumeric $budgetYearNumeric
     */
    private $budgetYearNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredClassificationScheme $requiredClassificationScheme
     */
    private $requiredClassificationScheme = null;

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
     * Gets as budgetYearNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BudgetYearNumeric
     */
    public function getBudgetYearNumeric()
    {
        return $this->budgetYearNumeric;
    }

    /**
     * Sets a new budgetYearNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BudgetYearNumeric $budgetYearNumeric
     * @return self
     */
    public function setBudgetYearNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BudgetYearNumeric $budgetYearNumeric = null)
    {
        $this->budgetYearNumeric = $budgetYearNumeric;
        return $this;
    }

    /**
     * Gets as requiredClassificationScheme
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredClassificationScheme
     */
    public function getRequiredClassificationScheme()
    {
        return $this->requiredClassificationScheme;
    }

    /**
     * Sets a new requiredClassificationScheme
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredClassificationScheme $requiredClassificationScheme
     * @return self
     */
    public function setRequiredClassificationScheme(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RequiredClassificationScheme $requiredClassificationScheme = null)
    {
        $this->requiredClassificationScheme = $requiredClassificationScheme;
        return $this;
    }
}

