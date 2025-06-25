<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing SubcontractTermsType
 *
 *
 * XSD Type: SubcontractTermsType
 */
class SubcontractTermsType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Rate $rate
     */
    private $rate = null;

    /**
     * @var bool $unknownPriceIndicator
     */
    private $unknownPriceIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubcontractingConditionsCode $subcontractingConditionsCode
     */
    private $subcontractingConditionsCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPercent $maximumPercent
     */
    private $maximumPercent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumPercent $minimumPercent
     */
    private $minimumPercent = null;

    /**
     * Gets as rate
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Rate $rate
     * @return self
     */
    public function setRate(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Rate $rate = null)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Gets as unknownPriceIndicator
     *
     * @return bool
     */
    public function getUnknownPriceIndicator()
    {
        return $this->unknownPriceIndicator;
    }

    /**
     * Sets a new unknownPriceIndicator
     *
     * @param bool $unknownPriceIndicator
     * @return self
     */
    public function setUnknownPriceIndicator($unknownPriceIndicator)
    {
        $this->unknownPriceIndicator = $unknownPriceIndicator;
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
     * Gets as amount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     * @return self
     */
    public function setAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as subcontractingConditionsCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubcontractingConditionsCode
     */
    public function getSubcontractingConditionsCode()
    {
        return $this->subcontractingConditionsCode;
    }

    /**
     * Sets a new subcontractingConditionsCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SubcontractingConditionsCode $subcontractingConditionsCode
     * @return self
     */
    public function setSubcontractingConditionsCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SubcontractingConditionsCode $subcontractingConditionsCode = null)
    {
        $this->subcontractingConditionsCode = $subcontractingConditionsCode;
        return $this;
    }

    /**
     * Gets as maximumPercent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPercent
     */
    public function getMaximumPercent()
    {
        return $this->maximumPercent;
    }

    /**
     * Sets a new maximumPercent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPercent $maximumPercent
     * @return self
     */
    public function setMaximumPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumPercent $maximumPercent = null)
    {
        $this->maximumPercent = $maximumPercent;
        return $this;
    }

    /**
     * Gets as minimumPercent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumPercent
     */
    public function getMinimumPercent()
    {
        return $this->minimumPercent;
    }

    /**
     * Sets a new minimumPercent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumPercent $minimumPercent
     * @return self
     */
    public function setMinimumPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumPercent $minimumPercent = null)
    {
        $this->minimumPercent = $minimumPercent;
        return $this;
    }
}

