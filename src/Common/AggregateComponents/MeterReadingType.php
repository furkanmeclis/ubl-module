<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing MeterReadingType
 *
 *
 * XSD Type: MeterReadingType
 */
class MeterReadingType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingType $meterReadingType
     */
    private $meterReadingType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingTypeCode $meterReadingTypeCode
     */
    private $meterReadingTypeCode = null;

    /**
     * @var \DateTime $previousMeterReadingDate
     */
    private $previousMeterReadingDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterQuantity $previousMeterQuantity
     */
    private $previousMeterQuantity = null;

    /**
     * @var \DateTime $latestMeterReadingDate
     */
    private $latestMeterReadingDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterQuantity $latestMeterQuantity
     */
    private $latestMeterQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterReadingMethod $previousMeterReadingMethod
     */
    private $previousMeterReadingMethod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterReadingMethodCode $previousMeterReadingMethodCode
     */
    private $previousMeterReadingMethodCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterReadingMethod $latestMeterReadingMethod
     */
    private $latestMeterReadingMethod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterReadingMethodCode $latestMeterReadingMethodCode
     */
    private $latestMeterReadingMethodCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingComments[] $meterReadingComments
     */
    private $meterReadingComments = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeliveredQuantity $deliveredQuantity
     */
    private $deliveredQuantity = null;

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
     * Gets as meterReadingType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingType
     */
    public function getMeterReadingType()
    {
        return $this->meterReadingType;
    }

    /**
     * Sets a new meterReadingType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingType $meterReadingType
     * @return self
     */
    public function setMeterReadingType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingType $meterReadingType = null)
    {
        $this->meterReadingType = $meterReadingType;
        return $this;
    }

    /**
     * Gets as meterReadingTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingTypeCode
     */
    public function getMeterReadingTypeCode()
    {
        return $this->meterReadingTypeCode;
    }

    /**
     * Sets a new meterReadingTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingTypeCode $meterReadingTypeCode
     * @return self
     */
    public function setMeterReadingTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingTypeCode $meterReadingTypeCode = null)
    {
        $this->meterReadingTypeCode = $meterReadingTypeCode;
        return $this;
    }

    /**
     * Gets as previousMeterReadingDate
     *
     * @return \DateTime
     */
    public function getPreviousMeterReadingDate()
    {
        return $this->previousMeterReadingDate;
    }

    /**
     * Sets a new previousMeterReadingDate
     *
     * @param \DateTime $previousMeterReadingDate
     * @return self
     */
    public function setPreviousMeterReadingDate(\DateTime $previousMeterReadingDate)
    {
        $this->previousMeterReadingDate = $previousMeterReadingDate;
        return $this;
    }

    /**
     * Gets as previousMeterQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterQuantity
     */
    public function getPreviousMeterQuantity()
    {
        return $this->previousMeterQuantity;
    }

    /**
     * Sets a new previousMeterQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterQuantity $previousMeterQuantity
     * @return self
     */
    public function setPreviousMeterQuantity(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterQuantity $previousMeterQuantity)
    {
        $this->previousMeterQuantity = $previousMeterQuantity;
        return $this;
    }

    /**
     * Gets as latestMeterReadingDate
     *
     * @return \DateTime
     */
    public function getLatestMeterReadingDate()
    {
        return $this->latestMeterReadingDate;
    }

    /**
     * Sets a new latestMeterReadingDate
     *
     * @param \DateTime $latestMeterReadingDate
     * @return self
     */
    public function setLatestMeterReadingDate(\DateTime $latestMeterReadingDate)
    {
        $this->latestMeterReadingDate = $latestMeterReadingDate;
        return $this;
    }

    /**
     * Gets as latestMeterQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterQuantity
     */
    public function getLatestMeterQuantity()
    {
        return $this->latestMeterQuantity;
    }

    /**
     * Sets a new latestMeterQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterQuantity $latestMeterQuantity
     * @return self
     */
    public function setLatestMeterQuantity(\FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterQuantity $latestMeterQuantity)
    {
        $this->latestMeterQuantity = $latestMeterQuantity;
        return $this;
    }

    /**
     * Gets as previousMeterReadingMethod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterReadingMethod
     */
    public function getPreviousMeterReadingMethod()
    {
        return $this->previousMeterReadingMethod;
    }

    /**
     * Sets a new previousMeterReadingMethod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterReadingMethod $previousMeterReadingMethod
     * @return self
     */
    public function setPreviousMeterReadingMethod(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterReadingMethod $previousMeterReadingMethod = null)
    {
        $this->previousMeterReadingMethod = $previousMeterReadingMethod;
        return $this;
    }

    /**
     * Gets as previousMeterReadingMethodCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterReadingMethodCode
     */
    public function getPreviousMeterReadingMethodCode()
    {
        return $this->previousMeterReadingMethodCode;
    }

    /**
     * Sets a new previousMeterReadingMethodCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterReadingMethodCode $previousMeterReadingMethodCode
     * @return self
     */
    public function setPreviousMeterReadingMethodCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousMeterReadingMethodCode $previousMeterReadingMethodCode = null)
    {
        $this->previousMeterReadingMethodCode = $previousMeterReadingMethodCode;
        return $this;
    }

    /**
     * Gets as latestMeterReadingMethod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterReadingMethod
     */
    public function getLatestMeterReadingMethod()
    {
        return $this->latestMeterReadingMethod;
    }

    /**
     * Sets a new latestMeterReadingMethod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterReadingMethod $latestMeterReadingMethod
     * @return self
     */
    public function setLatestMeterReadingMethod(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterReadingMethod $latestMeterReadingMethod = null)
    {
        $this->latestMeterReadingMethod = $latestMeterReadingMethod;
        return $this;
    }

    /**
     * Gets as latestMeterReadingMethodCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterReadingMethodCode
     */
    public function getLatestMeterReadingMethodCode()
    {
        return $this->latestMeterReadingMethodCode;
    }

    /**
     * Sets a new latestMeterReadingMethodCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterReadingMethodCode $latestMeterReadingMethodCode
     * @return self
     */
    public function setLatestMeterReadingMethodCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LatestMeterReadingMethodCode $latestMeterReadingMethodCode = null)
    {
        $this->latestMeterReadingMethodCode = $latestMeterReadingMethodCode;
        return $this;
    }

    /**
     * Adds as meterReadingComments
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingComments $meterReadingComments
     */
    public function addToMeterReadingComments(\FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingComments $meterReadingComments)
    {
        $this->meterReadingComments[] = $meterReadingComments;
        return $this;
    }

    /**
     * isset meterReadingComments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeterReadingComments($index)
    {
        return isset($this->meterReadingComments[$index]);
    }

    /**
     * unset meterReadingComments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeterReadingComments($index)
    {
        unset($this->meterReadingComments[$index]);
    }

    /**
     * Gets as meterReadingComments
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingComments[]
     */
    public function getMeterReadingComments()
    {
        return $this->meterReadingComments;
    }

    /**
     * Sets a new meterReadingComments
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MeterReadingComments[] $meterReadingComments
     * @return self
     */
    public function setMeterReadingComments(?array $meterReadingComments = null)
    {
        $this->meterReadingComments = $meterReadingComments;
        return $this;
    }

    /**
     * Gets as deliveredQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeliveredQuantity
     */
    public function getDeliveredQuantity()
    {
        return $this->deliveredQuantity;
    }

    /**
     * Sets a new deliveredQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeliveredQuantity $deliveredQuantity
     * @return self
     */
    public function setDeliveredQuantity(\FurkanMeclis\GIB\UBL\Common\BasicComponents\DeliveredQuantity $deliveredQuantity)
    {
        $this->deliveredQuantity = $deliveredQuantity;
        return $this;
    }
}

