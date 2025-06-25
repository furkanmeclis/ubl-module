<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ServiceFrequencyType
 *
 *
 * XSD Type: ServiceFrequencyType
 */
class ServiceFrequencyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\WeekDayCode $weekDayCode
     */
    private $weekDayCode = null;

    /**
     * Gets as weekDayCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\WeekDayCode
     */
    public function getWeekDayCode()
    {
        return $this->weekDayCode;
    }

    /**
     * Sets a new weekDayCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\WeekDayCode $weekDayCode
     * @return self
     */
    public function setWeekDayCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\WeekDayCode $weekDayCode)
    {
        $this->weekDayCode = $weekDayCode;
        return $this;
    }
}

