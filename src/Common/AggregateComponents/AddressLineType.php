<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing AddressLineType
 *
 *
 * XSD Type: AddressLineType
 */
class AddressLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Line $line
     */
    private $line = null;

    /**
     * Gets as line
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Line
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Line $line
     * @return self
     */
    public function setLine(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Line $line)
    {
        $this->line = $line;
        return $this;
    }
}

