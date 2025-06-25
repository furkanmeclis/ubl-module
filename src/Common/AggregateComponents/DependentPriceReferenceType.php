<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DependentPriceReferenceType
 *
 *
 * XSD Type: DependentPriceReferenceType
 */
class DependentPriceReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent $percent
     */
    private $percent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LocationAddress $locationAddress
     */
    private $locationAddress = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DependentLineReference $dependentLineReference
     */
    private $dependentLineReference = null;

    /**
     * Gets as percent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent $percent
     * @return self
     */
    public function setPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Percent $percent = null)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as locationAddress
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LocationAddress
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Sets a new locationAddress
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LocationAddress $locationAddress
     * @return self
     */
    public function setLocationAddress(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LocationAddress $locationAddress = null)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * Gets as dependentLineReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DependentLineReference
     */
    public function getDependentLineReference()
    {
        return $this->dependentLineReference;
    }

    /**
     * Sets a new dependentLineReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DependentLineReference $dependentLineReference
     * @return self
     */
    public function setDependentLineReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DependentLineReference $dependentLineReference = null)
    {
        $this->dependentLineReference = $dependentLineReference;
        return $this;
    }
}

