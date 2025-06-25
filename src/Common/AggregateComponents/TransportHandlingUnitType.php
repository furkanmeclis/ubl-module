<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TransportHandlingUnitType
 *
 *
 * XSD Type: TransportHandlingUnitType
 */
class TransportHandlingUnitType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportHandlingUnitTypeCode $transportHandlingUnitTypeCode
     */
    private $transportHandlingUnitTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingCode $handlingCode
     */
    private $handlingCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingInstructions $handlingInstructions
     */
    private $handlingInstructions = null;

    /**
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity
     */
    private $totalGoodsItemQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalPackageQuantity $totalPackageQuantity
     */
    private $totalPackageQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DamageRemarks[] $damageRemarks
     */
    private $damageRemarks = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TraceID $traceID
     */
    private $traceID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualPackage[] $actualPackage
     */
    private $actualPackage = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEquipment[] $transportEquipment
     */
    private $transportEquipment = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportMeans[] $transportMeans
     */
    private $transportMeans = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit[] $hazardousGoodsTransit
     */
    private $hazardousGoodsTransit = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FloorSpaceMeasurementDimension $floorSpaceMeasurementDimension
     */
    private $floorSpaceMeasurementDimension = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PalletSpaceMeasurementDimension $palletSpaceMeasurementDimension
     */
    private $palletSpaceMeasurementDimension = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentDocumentReference[] $shipmentDocumentReference
     */
    private $shipmentDocumentReference = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CustomsDeclaration[] $customsDeclaration
     */
    private $customsDeclaration = [
        
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
    public function setID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as transportHandlingUnitTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportHandlingUnitTypeCode
     */
    public function getTransportHandlingUnitTypeCode()
    {
        return $this->transportHandlingUnitTypeCode;
    }

    /**
     * Sets a new transportHandlingUnitTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportHandlingUnitTypeCode $transportHandlingUnitTypeCode
     * @return self
     */
    public function setTransportHandlingUnitTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportHandlingUnitTypeCode $transportHandlingUnitTypeCode = null)
    {
        $this->transportHandlingUnitTypeCode = $transportHandlingUnitTypeCode;
        return $this;
    }

    /**
     * Gets as handlingCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingCode
     */
    public function getHandlingCode()
    {
        return $this->handlingCode;
    }

    /**
     * Sets a new handlingCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingCode $handlingCode
     * @return self
     */
    public function setHandlingCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingCode $handlingCode = null)
    {
        $this->handlingCode = $handlingCode;
        return $this;
    }

    /**
     * Gets as handlingInstructions
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingInstructions
     */
    public function getHandlingInstructions()
    {
        return $this->handlingInstructions;
    }

    /**
     * Sets a new handlingInstructions
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingInstructions $handlingInstructions
     * @return self
     */
    public function setHandlingInstructions(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingInstructions $handlingInstructions = null)
    {
        $this->handlingInstructions = $handlingInstructions;
        return $this;
    }

    /**
     * Gets as hazardousRiskIndicator
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }

    /**
     * Gets as totalGoodsItemQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalGoodsItemQuantity
     */
    public function getTotalGoodsItemQuantity()
    {
        return $this->totalGoodsItemQuantity;
    }

    /**
     * Sets a new totalGoodsItemQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity
     * @return self
     */
    public function setTotalGoodsItemQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity = null)
    {
        $this->totalGoodsItemQuantity = $totalGoodsItemQuantity;
        return $this;
    }

    /**
     * Gets as totalPackageQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalPackageQuantity
     */
    public function getTotalPackageQuantity()
    {
        return $this->totalPackageQuantity;
    }

    /**
     * Sets a new totalPackageQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalPackageQuantity $totalPackageQuantity
     * @return self
     */
    public function setTotalPackageQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalPackageQuantity $totalPackageQuantity = null)
    {
        $this->totalPackageQuantity = $totalPackageQuantity;
        return $this;
    }

    /**
     * Adds as damageRemarks
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DamageRemarks $damageRemarks
     */
    public function addToDamageRemarks(\FurkanMeclis\GIB\UBL\Common\BasicComponents\DamageRemarks $damageRemarks)
    {
        $this->damageRemarks[] = $damageRemarks;
        return $this;
    }

    /**
     * isset damageRemarks
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDamageRemarks($index)
    {
        return isset($this->damageRemarks[$index]);
    }

    /**
     * unset damageRemarks
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDamageRemarks($index)
    {
        unset($this->damageRemarks[$index]);
    }

    /**
     * Gets as damageRemarks
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DamageRemarks[]
     */
    public function getDamageRemarks()
    {
        return $this->damageRemarks;
    }

    /**
     * Sets a new damageRemarks
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DamageRemarks[] $damageRemarks
     * @return self
     */
    public function setDamageRemarks(?array $damageRemarks = null)
    {
        $this->damageRemarks = $damageRemarks;
        return $this;
    }

    /**
     * Gets as traceID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TraceID
     */
    public function getTraceID()
    {
        return $this->traceID;
    }

    /**
     * Sets a new traceID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TraceID $traceID
     * @return self
     */
    public function setTraceID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TraceID $traceID = null)
    {
        $this->traceID = $traceID;
        return $this;
    }

    /**
     * Adds as actualPackage
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualPackage $actualPackage
     */
    public function addToActualPackage(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualPackage $actualPackage)
    {
        $this->actualPackage[] = $actualPackage;
        return $this;
    }

    /**
     * isset actualPackage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActualPackage($index)
    {
        return isset($this->actualPackage[$index]);
    }

    /**
     * unset actualPackage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActualPackage($index)
    {
        unset($this->actualPackage[$index]);
    }

    /**
     * Gets as actualPackage
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualPackage[]
     */
    public function getActualPackage()
    {
        return $this->actualPackage;
    }

    /**
     * Sets a new actualPackage
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ActualPackage[] $actualPackage
     * @return self
     */
    public function setActualPackage(?array $actualPackage = null)
    {
        $this->actualPackage = $actualPackage;
        return $this;
    }

    /**
     * Adds as transportEquipment
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEquipment $transportEquipment
     */
    public function addToTransportEquipment(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEquipment $transportEquipment)
    {
        $this->transportEquipment[] = $transportEquipment;
        return $this;
    }

    /**
     * isset transportEquipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEquipment($index)
    {
        return isset($this->transportEquipment[$index]);
    }

    /**
     * unset transportEquipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEquipment($index)
    {
        unset($this->transportEquipment[$index]);
    }

    /**
     * Gets as transportEquipment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEquipment[]
     */
    public function getTransportEquipment()
    {
        return $this->transportEquipment;
    }

    /**
     * Sets a new transportEquipment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEquipment[] $transportEquipment
     * @return self
     */
    public function setTransportEquipment(?array $transportEquipment = null)
    {
        $this->transportEquipment = $transportEquipment;
        return $this;
    }

    /**
     * Adds as transportMeans
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportMeans $transportMeans
     */
    public function addToTransportMeans(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportMeans $transportMeans)
    {
        $this->transportMeans[] = $transportMeans;
        return $this;
    }

    /**
     * isset transportMeans
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportMeans($index)
    {
        return isset($this->transportMeans[$index]);
    }

    /**
     * unset transportMeans
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportMeans($index)
    {
        unset($this->transportMeans[$index]);
    }

    /**
     * Gets as transportMeans
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportMeans[]
     */
    public function getTransportMeans()
    {
        return $this->transportMeans;
    }

    /**
     * Sets a new transportMeans
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportMeans[] $transportMeans
     * @return self
     */
    public function setTransportMeans(?array $transportMeans = null)
    {
        $this->transportMeans = $transportMeans;
        return $this;
    }

    /**
     * Adds as hazardousGoodsTransit
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit $hazardousGoodsTransit
     */
    public function addToHazardousGoodsTransit(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit[] = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * isset hazardousGoodsTransit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousGoodsTransit($index)
    {
        return isset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * unset hazardousGoodsTransit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousGoodsTransit($index)
    {
        unset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * Gets as hazardousGoodsTransit
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit[]
     */
    public function getHazardousGoodsTransit()
    {
        return $this->hazardousGoodsTransit;
    }

    /**
     * Sets a new hazardousGoodsTransit
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit[] $hazardousGoodsTransit
     * @return self
     */
    public function setHazardousGoodsTransit(?array $hazardousGoodsTransit = null)
    {
        $this->hazardousGoodsTransit = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(?array $measurementDimension = null)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }

    /**
     * Gets as minimumTemperature
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MinimumTemperature
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature = null)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MaximumTemperature
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature = null)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }

    /**
     * Gets as floorSpaceMeasurementDimension
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FloorSpaceMeasurementDimension
     */
    public function getFloorSpaceMeasurementDimension()
    {
        return $this->floorSpaceMeasurementDimension;
    }

    /**
     * Sets a new floorSpaceMeasurementDimension
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FloorSpaceMeasurementDimension $floorSpaceMeasurementDimension
     * @return self
     */
    public function setFloorSpaceMeasurementDimension(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FloorSpaceMeasurementDimension $floorSpaceMeasurementDimension = null)
    {
        $this->floorSpaceMeasurementDimension = $floorSpaceMeasurementDimension;
        return $this;
    }

    /**
     * Gets as palletSpaceMeasurementDimension
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PalletSpaceMeasurementDimension
     */
    public function getPalletSpaceMeasurementDimension()
    {
        return $this->palletSpaceMeasurementDimension;
    }

    /**
     * Sets a new palletSpaceMeasurementDimension
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PalletSpaceMeasurementDimension $palletSpaceMeasurementDimension
     * @return self
     */
    public function setPalletSpaceMeasurementDimension(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PalletSpaceMeasurementDimension $palletSpaceMeasurementDimension = null)
    {
        $this->palletSpaceMeasurementDimension = $palletSpaceMeasurementDimension;
        return $this;
    }

    /**
     * Adds as shipmentDocumentReference
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentDocumentReference $shipmentDocumentReference
     */
    public function addToShipmentDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentDocumentReference $shipmentDocumentReference)
    {
        $this->shipmentDocumentReference[] = $shipmentDocumentReference;
        return $this;
    }

    /**
     * isset shipmentDocumentReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentDocumentReference($index)
    {
        return isset($this->shipmentDocumentReference[$index]);
    }

    /**
     * unset shipmentDocumentReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentDocumentReference($index)
    {
        unset($this->shipmentDocumentReference[$index]);
    }

    /**
     * Gets as shipmentDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentDocumentReference[]
     */
    public function getShipmentDocumentReference()
    {
        return $this->shipmentDocumentReference;
    }

    /**
     * Sets a new shipmentDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentDocumentReference[] $shipmentDocumentReference
     * @return self
     */
    public function setShipmentDocumentReference(?array $shipmentDocumentReference = null)
    {
        $this->shipmentDocumentReference = $shipmentDocumentReference;
        return $this;
    }

    /**
     * Adds as customsDeclaration
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CustomsDeclaration $customsDeclaration
     */
    public function addToCustomsDeclaration(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CustomsDeclaration $customsDeclaration)
    {
        $this->customsDeclaration[] = $customsDeclaration;
        return $this;
    }

    /**
     * isset customsDeclaration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomsDeclaration($index)
    {
        return isset($this->customsDeclaration[$index]);
    }

    /**
     * unset customsDeclaration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomsDeclaration($index)
    {
        unset($this->customsDeclaration[$index]);
    }

    /**
     * Gets as customsDeclaration
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CustomsDeclaration[]
     */
    public function getCustomsDeclaration()
    {
        return $this->customsDeclaration;
    }

    /**
     * Sets a new customsDeclaration
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CustomsDeclaration[] $customsDeclaration
     * @return self
     */
    public function setCustomsDeclaration(?array $customsDeclaration = null)
    {
        $this->customsDeclaration = $customsDeclaration;
        return $this;
    }
}

