<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DeliveryTermsType
 *
 *
 * XSD Type: DeliveryTermsType
 */
class DeliveryTermsType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecialTerms $specialTerms
     */
    private $specialTerms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * Gets as iD
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     * @return self
     */
    public function setID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as specialTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecialTerms
     */
    public function getSpecialTerms()
    {
        return $this->specialTerms;
    }

    /**
     * Sets a new specialTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecialTerms $specialTerms
     * @return self
     */
    public function setSpecialTerms(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecialTerms $specialTerms = null)
    {
        $this->specialTerms = $specialTerms;
        return $this;
    }

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
}

