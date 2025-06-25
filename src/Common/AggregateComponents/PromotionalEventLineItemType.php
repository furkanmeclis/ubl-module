<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PromotionalEventLineItemType
 *
 *
 * XSD Type: PromotionalEventLineItemType
 */
class PromotionalEventLineItemType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventLineItem $eventLineItem
     */
    private $eventLineItem = null;

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
    public function setAmount(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as eventLineItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventLineItem
     */
    public function getEventLineItem()
    {
        return $this->eventLineItem;
    }

    /**
     * Sets a new eventLineItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventLineItem $eventLineItem
     * @return self
     */
    public function setEventLineItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventLineItem $eventLineItem)
    {
        $this->eventLineItem = $eventLineItem;
        return $this;
    }
}

