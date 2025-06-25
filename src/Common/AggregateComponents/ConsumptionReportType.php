<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ConsumptionReportType
 *
 *
 * XSD Type: ConsumptionReportType
 */
class ConsumptionReportType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalConsumedQuantity $totalConsumedQuantity
     */
    private $totalConsumedQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BasicConsumedQuantity $basicConsumedQuantity
     */
    private $basicConsumedQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidentOccupantsNumeric $residentOccupantsNumeric
     */
    private $residentOccupantsNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumersEnergyLevelCode $consumersEnergyLevelCode
     */
    private $consumersEnergyLevelCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumersEnergyLevel $consumersEnergyLevel
     */
    private $consumersEnergyLevel = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidenceType $residenceType
     */
    private $residenceType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidenceTypeCode $residenceTypeCode
     */
    private $residenceTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HeatingType $heatingType
     */
    private $heatingType = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HeatingTypeCode $heatingTypeCode
     */
    private $heatingTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     */
    private $period = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\GuidanceDocumentReference $guidanceDocumentReference
     */
    private $guidanceDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReportReference[] $consumptionReportReference
     */
    private $consumptionReportReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionHistory[] $consumptionHistory
     */
    private $consumptionHistory = [
        
    ];

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
    public function setID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionType $consumptionType = null)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumptionTypeCode $consumptionTypeCode = null)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
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
     * Gets as totalConsumedQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalConsumedQuantity
     */
    public function getTotalConsumedQuantity()
    {
        return $this->totalConsumedQuantity;
    }

    /**
     * Sets a new totalConsumedQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalConsumedQuantity $totalConsumedQuantity
     * @return self
     */
    public function setTotalConsumedQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalConsumedQuantity $totalConsumedQuantity = null)
    {
        $this->totalConsumedQuantity = $totalConsumedQuantity;
        return $this;
    }

    /**
     * Gets as basicConsumedQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BasicConsumedQuantity
     */
    public function getBasicConsumedQuantity()
    {
        return $this->basicConsumedQuantity;
    }

    /**
     * Sets a new basicConsumedQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BasicConsumedQuantity $basicConsumedQuantity
     * @return self
     */
    public function setBasicConsumedQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BasicConsumedQuantity $basicConsumedQuantity = null)
    {
        $this->basicConsumedQuantity = $basicConsumedQuantity;
        return $this;
    }

    /**
     * Gets as residentOccupantsNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidentOccupantsNumeric
     */
    public function getResidentOccupantsNumeric()
    {
        return $this->residentOccupantsNumeric;
    }

    /**
     * Sets a new residentOccupantsNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidentOccupantsNumeric $residentOccupantsNumeric
     * @return self
     */
    public function setResidentOccupantsNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidentOccupantsNumeric $residentOccupantsNumeric = null)
    {
        $this->residentOccupantsNumeric = $residentOccupantsNumeric;
        return $this;
    }

    /**
     * Gets as consumersEnergyLevelCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumersEnergyLevelCode
     */
    public function getConsumersEnergyLevelCode()
    {
        return $this->consumersEnergyLevelCode;
    }

    /**
     * Sets a new consumersEnergyLevelCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumersEnergyLevelCode $consumersEnergyLevelCode
     * @return self
     */
    public function setConsumersEnergyLevelCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumersEnergyLevelCode $consumersEnergyLevelCode = null)
    {
        $this->consumersEnergyLevelCode = $consumersEnergyLevelCode;
        return $this;
    }

    /**
     * Gets as consumersEnergyLevel
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumersEnergyLevel
     */
    public function getConsumersEnergyLevel()
    {
        return $this->consumersEnergyLevel;
    }

    /**
     * Sets a new consumersEnergyLevel
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumersEnergyLevel $consumersEnergyLevel
     * @return self
     */
    public function setConsumersEnergyLevel(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumersEnergyLevel $consumersEnergyLevel = null)
    {
        $this->consumersEnergyLevel = $consumersEnergyLevel;
        return $this;
    }

    /**
     * Gets as residenceType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidenceType
     */
    public function getResidenceType()
    {
        return $this->residenceType;
    }

    /**
     * Sets a new residenceType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidenceType $residenceType
     * @return self
     */
    public function setResidenceType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidenceType $residenceType = null)
    {
        $this->residenceType = $residenceType;
        return $this;
    }

    /**
     * Gets as residenceTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidenceTypeCode
     */
    public function getResidenceTypeCode()
    {
        return $this->residenceTypeCode;
    }

    /**
     * Sets a new residenceTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidenceTypeCode $residenceTypeCode
     * @return self
     */
    public function setResidenceTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ResidenceTypeCode $residenceTypeCode = null)
    {
        $this->residenceTypeCode = $residenceTypeCode;
        return $this;
    }

    /**
     * Gets as heatingType
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\HeatingType
     */
    public function getHeatingType()
    {
        return $this->heatingType;
    }

    /**
     * Sets a new heatingType
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\HeatingType $heatingType
     * @return self
     */
    public function setHeatingType(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\HeatingType $heatingType = null)
    {
        $this->heatingType = $heatingType;
        return $this;
    }

    /**
     * Gets as heatingTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\HeatingTypeCode
     */
    public function getHeatingTypeCode()
    {
        return $this->heatingTypeCode;
    }

    /**
     * Sets a new heatingTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\HeatingTypeCode $heatingTypeCode
     * @return self
     */
    public function setHeatingTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\HeatingTypeCode $heatingTypeCode = null)
    {
        $this->heatingTypeCode = $heatingTypeCode;
        return $this;
    }

    /**
     * Gets as period
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as guidanceDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\GuidanceDocumentReference
     */
    public function getGuidanceDocumentReference()
    {
        return $this->guidanceDocumentReference;
    }

    /**
     * Sets a new guidanceDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\GuidanceDocumentReference $guidanceDocumentReference
     * @return self
     */
    public function setGuidanceDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\GuidanceDocumentReference $guidanceDocumentReference = null)
    {
        $this->guidanceDocumentReference = $guidanceDocumentReference;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as consumptionReportReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReportReference $consumptionReportReference
     */
    public function addToConsumptionReportReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReportReference $consumptionReportReference)
    {
        $this->consumptionReportReference[] = $consumptionReportReference;
        return $this;
    }

    /**
     * isset consumptionReportReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionReportReference($index)
    {
        return isset($this->consumptionReportReference[$index]);
    }

    /**
     * unset consumptionReportReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionReportReference($index)
    {
        unset($this->consumptionReportReference[$index]);
    }

    /**
     * Gets as consumptionReportReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReportReference[]
     */
    public function getConsumptionReportReference()
    {
        return $this->consumptionReportReference;
    }

    /**
     * Sets a new consumptionReportReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionReportReference[] $consumptionReportReference
     * @return self
     */
    public function setConsumptionReportReference(?array $consumptionReportReference = null)
    {
        $this->consumptionReportReference = $consumptionReportReference;
        return $this;
    }

    /**
     * Adds as consumptionHistory
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionHistory $consumptionHistory
     */
    public function addToConsumptionHistory(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionHistory $consumptionHistory)
    {
        $this->consumptionHistory[] = $consumptionHistory;
        return $this;
    }

    /**
     * isset consumptionHistory
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionHistory($index)
    {
        return isset($this->consumptionHistory[$index]);
    }

    /**
     * unset consumptionHistory
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionHistory($index)
    {
        unset($this->consumptionHistory[$index]);
    }

    /**
     * Gets as consumptionHistory
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionHistory[]
     */
    public function getConsumptionHistory()
    {
        return $this->consumptionHistory;
    }

    /**
     * Sets a new consumptionHistory
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ConsumptionHistory[] $consumptionHistory
     * @return self
     */
    public function setConsumptionHistory(?array $consumptionHistory = null)
    {
        $this->consumptionHistory = $consumptionHistory;
        return $this;
    }
}

