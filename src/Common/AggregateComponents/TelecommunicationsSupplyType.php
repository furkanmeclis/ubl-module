<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TelecommunicationsSupplyType
 *
 *
 * XSD Type: TelecommunicationsSupplyType
 */
class TelecommunicationsSupplyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsSupplyType $telecommunicationsSupplyType
     */
    private $telecommunicationsSupplyType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode
     */
    private $telecommunicationsSupplyTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrivacyCode $privacyCode
     */
    private $privacyCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalAmount $totalAmount
     */
    private $totalAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TelecommunicationsSupplyLine[] $telecommunicationsSupplyLine
     */
    private $telecommunicationsSupplyLine = [
        
    ];

    /**
     * Gets as telecommunicationsSupplyType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsSupplyType
     */
    public function getTelecommunicationsSupplyType()
    {
        return $this->telecommunicationsSupplyType;
    }

    /**
     * Sets a new telecommunicationsSupplyType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsSupplyType $telecommunicationsSupplyType
     * @return self
     */
    public function setTelecommunicationsSupplyType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsSupplyType $telecommunicationsSupplyType = null)
    {
        $this->telecommunicationsSupplyType = $telecommunicationsSupplyType;
        return $this;
    }

    /**
     * Gets as telecommunicationsSupplyTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsSupplyTypeCode
     */
    public function getTelecommunicationsSupplyTypeCode()
    {
        return $this->telecommunicationsSupplyTypeCode;
    }

    /**
     * Sets a new telecommunicationsSupplyTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode
     * @return self
     */
    public function setTelecommunicationsSupplyTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode = null)
    {
        $this->telecommunicationsSupplyTypeCode = $telecommunicationsSupplyTypeCode;
        return $this;
    }

    /**
     * Gets as privacyCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrivacyCode
     */
    public function getPrivacyCode()
    {
        return $this->privacyCode;
    }

    /**
     * Sets a new privacyCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrivacyCode $privacyCode
     * @return self
     */
    public function setPrivacyCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PrivacyCode $privacyCode)
    {
        $this->privacyCode = $privacyCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalAmount $totalAmount
     * @return self
     */
    public function setTotalAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalAmount $totalAmount = null)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Adds as telecommunicationsSupplyLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TelecommunicationsSupplyLine $telecommunicationsSupplyLine
     */
    public function addToTelecommunicationsSupplyLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TelecommunicationsSupplyLine $telecommunicationsSupplyLine)
    {
        $this->telecommunicationsSupplyLine[] = $telecommunicationsSupplyLine;
        return $this;
    }

    /**
     * isset telecommunicationsSupplyLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelecommunicationsSupplyLine($index)
    {
        return isset($this->telecommunicationsSupplyLine[$index]);
    }

    /**
     * unset telecommunicationsSupplyLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelecommunicationsSupplyLine($index)
    {
        unset($this->telecommunicationsSupplyLine[$index]);
    }

    /**
     * Gets as telecommunicationsSupplyLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TelecommunicationsSupplyLine[]
     */
    public function getTelecommunicationsSupplyLine()
    {
        return $this->telecommunicationsSupplyLine;
    }

    /**
     * Sets a new telecommunicationsSupplyLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TelecommunicationsSupplyLine[] $telecommunicationsSupplyLine
     * @return self
     */
    public function setTelecommunicationsSupplyLine(array $telecommunicationsSupplyLine)
    {
        $this->telecommunicationsSupplyLine = $telecommunicationsSupplyLine;
        return $this;
    }
}

