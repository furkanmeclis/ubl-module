<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing LotIdentificationType
 *
 *
 * XSD Type: LotIdentificationType
 */
class LotIdentificationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LotNumberID $lotNumberID
     */
    private $lotNumberID = null;

    /**
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     */
    private $additionalItemProperty = [
        
    ];

    /**
     * Gets as lotNumberID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LotNumberID
     */
    public function getLotNumberID()
    {
        return $this->lotNumberID;
    }

    /**
     * Sets a new lotNumberID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LotNumberID $lotNumberID
     * @return self
     */
    public function setLotNumberID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LotNumberID $lotNumberID = null)
    {
        $this->lotNumberID = $lotNumberID;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(?\DateTime $expiryDate = null)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Adds as additionalItemProperty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemProperty $additionalItemProperty
     */
    public function addToAdditionalItemProperty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemProperty $additionalItemProperty)
    {
        $this->additionalItemProperty[] = $additionalItemProperty;
        return $this;
    }

    /**
     * isset additionalItemProperty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalItemProperty($index)
    {
        return isset($this->additionalItemProperty[$index]);
    }

    /**
     * unset additionalItemProperty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalItemProperty($index)
    {
        unset($this->additionalItemProperty[$index]);
    }

    /**
     * Gets as additionalItemProperty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemProperty[]
     */
    public function getAdditionalItemProperty()
    {
        return $this->additionalItemProperty;
    }

    /**
     * Sets a new additionalItemProperty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     * @return self
     */
    public function setAdditionalItemProperty(?array $additionalItemProperty = null)
    {
        $this->additionalItemProperty = $additionalItemProperty;
        return $this;
    }
}

