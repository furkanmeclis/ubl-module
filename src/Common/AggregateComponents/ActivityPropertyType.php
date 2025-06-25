<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ActivityPropertyType
 *
 *
 * XSD Type: ActivityPropertyType
 */
class ActivityPropertyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Value $value
     */
    private $value = null;

    /**
     * Gets as name
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Value $value
     * @return self
     */
    public function setValue(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Value $value)
    {
        $this->value = $value;
        return $this;
    }
}

