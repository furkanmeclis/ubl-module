<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ItemInstanceType
 *
 *
 * XSD Type: ItemInstanceType
 */
class ItemInstanceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProductTraceID $productTraceID
     */
    private $productTraceID = null;

    /**
     * @var \DateTime $manufactureDate
     */
    private $manufactureDate = null;

    /**
     * @var \DateTime $manufactureTime
     */
    private $manufactureTime = null;

    /**
     * @var \DateTime $bestBeforeDate
     */
    private $bestBeforeDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationID $registrationID
     */
    private $registrationID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SerialID $serialID
     */
    private $serialID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     */
    private $additionalItemProperty = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LotIdentification $lotIdentification
     */
    private $lotIdentification = null;

    /**
     * Gets as productTraceID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProductTraceID
     */
    public function getProductTraceID()
    {
        return $this->productTraceID;
    }

    /**
     * Sets a new productTraceID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProductTraceID $productTraceID
     * @return self
     */
    public function setProductTraceID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ProductTraceID $productTraceID = null)
    {
        $this->productTraceID = $productTraceID;
        return $this;
    }

    /**
     * Gets as manufactureDate
     *
     * @return \DateTime
     */
    public function getManufactureDate()
    {
        return $this->manufactureDate;
    }

    /**
     * Sets a new manufactureDate
     *
     * @param \DateTime $manufactureDate
     * @return self
     */
    public function setManufactureDate(?\DateTime $manufactureDate = null)
    {
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * Gets as manufactureTime
     *
     * @return \DateTime
     */
    public function getManufactureTime()
    {
        return $this->manufactureTime;
    }

    /**
     * Sets a new manufactureTime
     *
     * @param \DateTime $manufactureTime
     * @return self
     */
    public function setManufactureTime(?\DateTime $manufactureTime = null)
    {
        $this->manufactureTime = $manufactureTime;
        return $this;
    }

    /**
     * Gets as bestBeforeDate
     *
     * @return \DateTime
     */
    public function getBestBeforeDate()
    {
        return $this->bestBeforeDate;
    }

    /**
     * Sets a new bestBeforeDate
     *
     * @param \DateTime $bestBeforeDate
     * @return self
     */
    public function setBestBeforeDate(?\DateTime $bestBeforeDate = null)
    {
        $this->bestBeforeDate = $bestBeforeDate;
        return $this;
    }

    /**
     * Gets as registrationID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationID
     */
    public function getRegistrationID()
    {
        return $this->registrationID;
    }

    /**
     * Sets a new registrationID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationID $registrationID
     * @return self
     */
    public function setRegistrationID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationID $registrationID = null)
    {
        $this->registrationID = $registrationID;
        return $this;
    }

    /**
     * Gets as serialID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SerialID
     */
    public function getSerialID()
    {
        return $this->serialID;
    }

    /**
     * Sets a new serialID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SerialID $serialID
     * @return self
     */
    public function setSerialID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SerialID $serialID = null)
    {
        $this->serialID = $serialID;
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

    /**
     * Gets as lotIdentification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LotIdentification
     */
    public function getLotIdentification()
    {
        return $this->lotIdentification;
    }

    /**
     * Sets a new lotIdentification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LotIdentification $lotIdentification
     * @return self
     */
    public function setLotIdentification(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LotIdentification $lotIdentification = null)
    {
        $this->lotIdentification = $lotIdentification;
        return $this;
    }
}

