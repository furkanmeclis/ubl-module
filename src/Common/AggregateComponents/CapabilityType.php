<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CapabilityType
 *
 *
 * XSD Type: CapabilityType
 */
class CapabilityType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CapabilityTypeCode $capabilityTypeCode
     */
    private $capabilityTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueAmount $valueAmount
     */
    private $valueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQuantity $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied[] $evidenceSupplied
     */
    private $evidenceSupplied = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Gets as capabilityTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CapabilityTypeCode
     */
    public function getCapabilityTypeCode()
    {
        return $this->capabilityTypeCode;
    }

    /**
     * Sets a new capabilityTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CapabilityTypeCode $capabilityTypeCode
     * @return self
     */
    public function setCapabilityTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CapabilityTypeCode $capabilityTypeCode = null)
    {
        $this->capabilityTypeCode = $capabilityTypeCode;
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
     * Gets as valueAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueAmount
     */
    public function getValueAmount()
    {
        return $this->valueAmount;
    }

    /**
     * Sets a new valueAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueAmount $valueAmount
     * @return self
     */
    public function setValueAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueAmount $valueAmount = null)
    {
        $this->valueAmount = $valueAmount;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as evidenceSupplied
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied $evidenceSupplied
     */
    public function addToEvidenceSupplied(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied $evidenceSupplied)
    {
        $this->evidenceSupplied[] = $evidenceSupplied;
        return $this;
    }

    /**
     * isset evidenceSupplied
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceSupplied($index)
    {
        return isset($this->evidenceSupplied[$index]);
    }

    /**
     * unset evidenceSupplied
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceSupplied($index)
    {
        unset($this->evidenceSupplied[$index]);
    }

    /**
     * Gets as evidenceSupplied
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied[]
     */
    public function getEvidenceSupplied()
    {
        return $this->evidenceSupplied;
    }

    /**
     * Sets a new evidenceSupplied
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied[] $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(?array $evidenceSupplied = null)
    {
        $this->evidenceSupplied = $evidenceSupplied;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }
}

