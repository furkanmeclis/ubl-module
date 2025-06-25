<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ConsumptionAverageType
 *
 *
 * XSD Type: ConsumptionAverageType
 */
class ConsumptionAverageType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AverageAmount $averageAmount
     */
    private $averageAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as averageAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AverageAmount
     */
    public function getAverageAmount()
    {
        return $this->averageAmount;
    }

    /**
     * Sets a new averageAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AverageAmount $averageAmount
     * @return self
     */
    public function setAverageAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AverageAmount $averageAmount = null)
    {
        $this->averageAmount = $averageAmount;
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
}

