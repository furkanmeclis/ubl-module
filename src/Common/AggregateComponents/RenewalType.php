<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing RenewalType
 *
 *
 * XSD Type: RenewalType
 */
class RenewalType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     */
    private $period = null;

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
     * Gets as period
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }
}

