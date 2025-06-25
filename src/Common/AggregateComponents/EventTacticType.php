<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EventTacticType
 *
 *
 * XSD Type: EventTacticType
 */
class EventTacticType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Comment $comment
     */
    private $comment = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventTacticEnumeration $eventTacticEnumeration
     */
    private $eventTacticEnumeration = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     */
    private $period = null;

    /**
     * Gets as comment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Comment $comment
     * @return self
     */
    public function setComment(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Comment $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as eventTacticEnumeration
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventTacticEnumeration
     */
    public function getEventTacticEnumeration()
    {
        return $this->eventTacticEnumeration;
    }

    /**
     * Sets a new eventTacticEnumeration
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventTacticEnumeration $eventTacticEnumeration
     * @return self
     */
    public function setEventTacticEnumeration(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EventTacticEnumeration $eventTacticEnumeration)
    {
        $this->eventTacticEnumeration = $eventTacticEnumeration;
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

