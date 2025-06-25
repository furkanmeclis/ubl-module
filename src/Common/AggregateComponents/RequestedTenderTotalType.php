<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing RequestedTenderTotalType
 *
 *
 * XSD Type: RequestedTenderTotalType
 */
class RequestedTenderTotalType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedOverallContractAmount $estimatedOverallContractAmount
     */
    private $estimatedOverallContractAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalAmount $totalAmount
     */
    private $totalAmount = null;

    /**
     * @var bool $taxIncludedIndicator
     */
    private $taxIncludedIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumAmount $minimumAmount
     */
    private $minimumAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumAmount $maximumAmount
     */
    private $maximumAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MonetaryScope[] $monetaryScope
     */
    private $monetaryScope = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AverageSubsequentContractAmount $averageSubsequentContractAmount
     */
    private $averageSubsequentContractAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ApplicableTaxCategory[] $applicableTaxCategory
     */
    private $applicableTaxCategory = [
        
    ];

    /**
     * Gets as estimatedOverallContractAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedOverallContractAmount
     */
    public function getEstimatedOverallContractAmount()
    {
        return $this->estimatedOverallContractAmount;
    }

    /**
     * Sets a new estimatedOverallContractAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedOverallContractAmount $estimatedOverallContractAmount
     * @return self
     */
    public function setEstimatedOverallContractAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EstimatedOverallContractAmount $estimatedOverallContractAmount = null)
    {
        $this->estimatedOverallContractAmount = $estimatedOverallContractAmount;
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
     * Gets as taxIncludedIndicator
     *
     * @return bool
     */
    public function getTaxIncludedIndicator()
    {
        return $this->taxIncludedIndicator;
    }

    /**
     * Sets a new taxIncludedIndicator
     *
     * @param bool $taxIncludedIndicator
     * @return self
     */
    public function setTaxIncludedIndicator($taxIncludedIndicator)
    {
        $this->taxIncludedIndicator = $taxIncludedIndicator;
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
     * Adds as monetaryScope
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MonetaryScope $monetaryScope
     */
    public function addToMonetaryScope(\FurkanMeclis\GIB\UBL\Common\BasicComponents\MonetaryScope $monetaryScope)
    {
        $this->monetaryScope[] = $monetaryScope;
        return $this;
    }

    /**
     * isset monetaryScope
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonetaryScope($index)
    {
        return isset($this->monetaryScope[$index]);
    }

    /**
     * unset monetaryScope
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonetaryScope($index)
    {
        unset($this->monetaryScope[$index]);
    }

    /**
     * Gets as monetaryScope
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MonetaryScope[]
     */
    public function getMonetaryScope()
    {
        return $this->monetaryScope;
    }

    /**
     * Sets a new monetaryScope
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MonetaryScope[] $monetaryScope
     * @return self
     */
    public function setMonetaryScope(?array $monetaryScope = null)
    {
        $this->monetaryScope = $monetaryScope;
        return $this;
    }

    /**
     * Gets as averageSubsequentContractAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AverageSubsequentContractAmount
     */
    public function getAverageSubsequentContractAmount()
    {
        return $this->averageSubsequentContractAmount;
    }

    /**
     * Sets a new averageSubsequentContractAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AverageSubsequentContractAmount $averageSubsequentContractAmount
     * @return self
     */
    public function setAverageSubsequentContractAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AverageSubsequentContractAmount $averageSubsequentContractAmount = null)
    {
        $this->averageSubsequentContractAmount = $averageSubsequentContractAmount;
        return $this;
    }

    /**
     * Adds as applicableTaxCategory
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ApplicableTaxCategory $applicableTaxCategory
     */
    public function addToApplicableTaxCategory(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ApplicableTaxCategory $applicableTaxCategory)
    {
        $this->applicableTaxCategory[] = $applicableTaxCategory;
        return $this;
    }

    /**
     * isset applicableTaxCategory
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableTaxCategory($index)
    {
        return isset($this->applicableTaxCategory[$index]);
    }

    /**
     * unset applicableTaxCategory
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableTaxCategory($index)
    {
        unset($this->applicableTaxCategory[$index]);
    }

    /**
     * Gets as applicableTaxCategory
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ApplicableTaxCategory[]
     */
    public function getApplicableTaxCategory()
    {
        return $this->applicableTaxCategory;
    }

    /**
     * Sets a new applicableTaxCategory
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ApplicableTaxCategory[] $applicableTaxCategory
     * @return self
     */
    public function setApplicableTaxCategory(?array $applicableTaxCategory = null)
    {
        $this->applicableTaxCategory = $applicableTaxCategory;
        return $this;
    }
}

