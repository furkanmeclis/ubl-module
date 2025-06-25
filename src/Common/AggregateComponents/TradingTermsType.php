<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TradingTermsType
 *
 *
 * XSD Type: TradingTermsType
 */
class TradingTermsType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Information[] $information
     */
    private $information = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Reference $reference
     */
    private $reference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ApplicableAddress $applicableAddress
     */
    private $applicableAddress = null;

    /**
     * Adds as information
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Information $information
     */
    public function addToInformation(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Information $information)
    {
        $this->information[] = $information;
        return $this;
    }

    /**
     * isset information
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Information[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Information[] $information
     * @return self
     */
    public function setInformation(?array $information = null)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Reference $reference
     * @return self
     */
    public function setReference(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Reference $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as applicableAddress
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ApplicableAddress
     */
    public function getApplicableAddress()
    {
        return $this->applicableAddress;
    }

    /**
     * Sets a new applicableAddress
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ApplicableAddress $applicableAddress
     * @return self
     */
    public function setApplicableAddress(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ApplicableAddress $applicableAddress = null)
    {
        $this->applicableAddress = $applicableAddress;
        return $this;
    }
}

