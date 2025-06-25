<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing BudgetAccountLineType
 *
 *
 * XSD Type: BudgetAccountLineType
 */
class BudgetAccountLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalAmount $totalAmount
     */
    private $totalAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccount[] $budgetAccount
     */
    private $budgetAccount = [
        
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
     * Gets as totalAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalAmount $totalAmount
     * @return self
     */
    public function setTotalAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalAmount $totalAmount = null)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Adds as budgetAccount
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccount $budgetAccount
     */
    public function addToBudgetAccount(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccount $budgetAccount)
    {
        $this->budgetAccount[] = $budgetAccount;
        return $this;
    }

    /**
     * isset budgetAccount
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBudgetAccount($index)
    {
        return isset($this->budgetAccount[$index]);
    }

    /**
     * unset budgetAccount
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBudgetAccount($index)
    {
        unset($this->budgetAccount[$index]);
    }

    /**
     * Gets as budgetAccount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccount[]
     */
    public function getBudgetAccount()
    {
        return $this->budgetAccount;
    }

    /**
     * Sets a new budgetAccount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BudgetAccount[] $budgetAccount
     * @return self
     */
    public function setBudgetAccount(?array $budgetAccount = null)
    {
        $this->budgetAccount = $budgetAccount;
        return $this;
    }
}

