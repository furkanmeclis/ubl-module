<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EconomicOperatorShortListType
 *
 *
 * XSD Type: EconomicOperatorShortListType
 */
class EconomicOperatorShortListType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LimitationDescription[] $limitationDescription
     */
    private $limitationDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpectedQuantity $expectedQuantity
     */
    private $expectedQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreSelectedParty[] $preSelectedParty
     */
    private $preSelectedParty = [
        
    ];

    /**
     * Adds as limitationDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LimitationDescription $limitationDescription
     */
    public function addToLimitationDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\LimitationDescription $limitationDescription)
    {
        $this->limitationDescription[] = $limitationDescription;
        return $this;
    }

    /**
     * isset limitationDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLimitationDescription($index)
    {
        return isset($this->limitationDescription[$index]);
    }

    /**
     * unset limitationDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLimitationDescription($index)
    {
        unset($this->limitationDescription[$index]);
    }

    /**
     * Gets as limitationDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LimitationDescription[]
     */
    public function getLimitationDescription()
    {
        return $this->limitationDescription;
    }

    /**
     * Sets a new limitationDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LimitationDescription[] $limitationDescription
     * @return self
     */
    public function setLimitationDescription(?array $limitationDescription = null)
    {
        $this->limitationDescription = $limitationDescription;
        return $this;
    }

    /**
     * Gets as expectedQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpectedQuantity
     */
    public function getExpectedQuantity()
    {
        return $this->expectedQuantity;
    }

    /**
     * Sets a new expectedQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpectedQuantity $expectedQuantity
     * @return self
     */
    public function setExpectedQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpectedQuantity $expectedQuantity = null)
    {
        $this->expectedQuantity = $expectedQuantity;
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
     * Adds as preSelectedParty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreSelectedParty $preSelectedParty
     */
    public function addToPreSelectedParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreSelectedParty $preSelectedParty)
    {
        $this->preSelectedParty[] = $preSelectedParty;
        return $this;
    }

    /**
     * isset preSelectedParty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreSelectedParty($index)
    {
        return isset($this->preSelectedParty[$index]);
    }

    /**
     * unset preSelectedParty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreSelectedParty($index)
    {
        unset($this->preSelectedParty[$index]);
    }

    /**
     * Gets as preSelectedParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreSelectedParty[]
     */
    public function getPreSelectedParty()
    {
        return $this->preSelectedParty;
    }

    /**
     * Sets a new preSelectedParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PreSelectedParty[] $preSelectedParty
     * @return self
     */
    public function setPreSelectedParty(?array $preSelectedParty = null)
    {
        $this->preSelectedParty = $preSelectedParty;
        return $this;
    }
}

