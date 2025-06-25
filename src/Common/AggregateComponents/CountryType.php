<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CountryType
 *
 *
 * XSD Type: CountryType
 */
class CountryType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\IdentificationCode $identificationCode
     */
    private $identificationCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * Gets as identificationCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\IdentificationCode
     */
    public function getIdentificationCode()
    {
        return $this->identificationCode;
    }

    /**
     * Sets a new identificationCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\IdentificationCode $identificationCode
     * @return self
     */
    public function setIdentificationCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\IdentificationCode $identificationCode = null)
    {
        $this->identificationCode = $identificationCode;
        return $this;
    }

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
}

