<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ShipmentType
 *
 *
 * XSD Type: ShipmentType
 */
class ShipmentType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingCode $handlingCode
     */
    private $handlingCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HandlingInstructions $handlingInstructions
     */
    private $handlingInstructions = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalGoodsItemQuantity $totalGoodsItemQuantity
     */
    private $totalGoodsItemQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity
     */
    private $totalTransportHandlingUnitQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\InsuranceValueAmount $insuranceValueAmount
     */
    private $insuranceValueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     */
    private $declaredCustomsValueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     */
    private $declaredForCarriageValueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     */
    private $declaredStatisticsValueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FreeOnBoardValueAmount $freeOnBoardValueAmount
     */
    private $freeOnBoardValueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecialInstructions[] $specialInstructions
     */
    private $specialInstructions = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\GoodsItem[] $goodsItem
     */
    private $goodsItem = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentStage[] $shipmentStage
     */
    private $shipmentStage = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Delivery $delivery
     */
    private $delivery = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportHandlingUnit[] $transportHandlingUnit
     */
    private $transportHandlingUnit = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReturnAddress $returnAddress
     */
    private $returnAddress = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation
     */
    private $firstArrivalPortLocation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LastExitPortLocation $lastExitPortLocation
     */
    private $lastExitPortLocation = null;

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
     * Gets as grossWeightMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure = null)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure = null)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure = null)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure = null)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
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
     * Gets as totalTransportHandlingUnitQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTransportHandlingUnitQuantity
     */
    public function getTotalTransportHandlingUnitQuantity()
    {
        return $this->totalTransportHandlingUnitQuantity;
    }

    /**
     * Sets a new totalTransportHandlingUnitQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity
     * @return self
     */
    public function setTotalTransportHandlingUnitQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity = null)
    {
        $this->totalTransportHandlingUnitQuantity = $totalTransportHandlingUnitQuantity;
        return $this;
    }

    /**
     * Gets as insuranceValueAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\InsuranceValueAmount
     */
    public function getInsuranceValueAmount()
    {
        return $this->insuranceValueAmount;
    }

    /**
     * Sets a new insuranceValueAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\InsuranceValueAmount $insuranceValueAmount
     * @return self
     */
    public function setInsuranceValueAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\InsuranceValueAmount $insuranceValueAmount = null)
    {
        $this->insuranceValueAmount = $insuranceValueAmount;
        return $this;
    }

    /**
     * Gets as declaredCustomsValueAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmount()
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * Sets a new declaredCustomsValueAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     * @return self
     */
    public function setDeclaredCustomsValueAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredCustomsValueAmount $declaredCustomsValueAmount = null)
    {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;
        return $this;
    }

    /**
     * Gets as declaredForCarriageValueAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredForCarriageValueAmount
     */
    public function getDeclaredForCarriageValueAmount()
    {
        return $this->declaredForCarriageValueAmount;
    }

    /**
     * Sets a new declaredForCarriageValueAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     * @return self
     */
    public function setDeclaredForCarriageValueAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount = null)
    {
        $this->declaredForCarriageValueAmount = $declaredForCarriageValueAmount;
        return $this;
    }

    /**
     * Gets as declaredStatisticsValueAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredStatisticsValueAmount
     */
    public function getDeclaredStatisticsValueAmount()
    {
        return $this->declaredStatisticsValueAmount;
    }

    /**
     * Sets a new declaredStatisticsValueAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     * @return self
     */
    public function setDeclaredStatisticsValueAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount = null)
    {
        $this->declaredStatisticsValueAmount = $declaredStatisticsValueAmount;
        return $this;
    }

    /**
     * Gets as freeOnBoardValueAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FreeOnBoardValueAmount
     */
    public function getFreeOnBoardValueAmount()
    {
        return $this->freeOnBoardValueAmount;
    }

    /**
     * Sets a new freeOnBoardValueAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FreeOnBoardValueAmount $freeOnBoardValueAmount
     * @return self
     */
    public function setFreeOnBoardValueAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\FreeOnBoardValueAmount $freeOnBoardValueAmount = null)
    {
        $this->freeOnBoardValueAmount = $freeOnBoardValueAmount;
        return $this;
    }

    /**
     * Adds as specialInstructions
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecialInstructions $specialInstructions
     */
    public function addToSpecialInstructions(\FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecialInstructions $specialInstructions)
    {
        $this->specialInstructions[] = $specialInstructions;
        return $this;
    }

    /**
     * isset specialInstructions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialInstructions($index)
    {
        return isset($this->specialInstructions[$index]);
    }

    /**
     * unset specialInstructions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialInstructions($index)
    {
        unset($this->specialInstructions[$index]);
    }

    /**
     * Gets as specialInstructions
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecialInstructions[]
     */
    public function getSpecialInstructions()
    {
        return $this->specialInstructions;
    }

    /**
     * Sets a new specialInstructions
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SpecialInstructions[] $specialInstructions
     * @return self
     */
    public function setSpecialInstructions(?array $specialInstructions = null)
    {
        $this->specialInstructions = $specialInstructions;
        return $this;
    }

    /**
     * Adds as goodsItem
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\GoodsItem $goodsItem
     */
    public function addToGoodsItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\GoodsItem $goodsItem)
    {
        $this->goodsItem[] = $goodsItem;
        return $this;
    }

    /**
     * isset goodsItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItem($index)
    {
        return isset($this->goodsItem[$index]);
    }

    /**
     * unset goodsItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItem($index)
    {
        unset($this->goodsItem[$index]);
    }

    /**
     * Gets as goodsItem
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\GoodsItem[]
     */
    public function getGoodsItem()
    {
        return $this->goodsItem;
    }

    /**
     * Sets a new goodsItem
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\GoodsItem[] $goodsItem
     * @return self
     */
    public function setGoodsItem(?array $goodsItem = null)
    {
        $this->goodsItem = $goodsItem;
        return $this;
    }

    /**
     * Adds as shipmentStage
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentStage $shipmentStage
     */
    public function addToShipmentStage(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentStage $shipmentStage)
    {
        $this->shipmentStage[] = $shipmentStage;
        return $this;
    }

    /**
     * isset shipmentStage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentStage($index)
    {
        return isset($this->shipmentStage[$index]);
    }

    /**
     * unset shipmentStage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentStage($index)
    {
        unset($this->shipmentStage[$index]);
    }

    /**
     * Gets as shipmentStage
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentStage[]
     */
    public function getShipmentStage()
    {
        return $this->shipmentStage;
    }

    /**
     * Sets a new shipmentStage
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentStage[] $shipmentStage
     * @return self
     */
    public function setShipmentStage(?array $shipmentStage = null)
    {
        $this->shipmentStage = $shipmentStage;
        return $this;
    }

    /**
     * Gets as delivery
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Delivery $delivery
     * @return self
     */
    public function setDelivery(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Delivery $delivery = null)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Adds as transportHandlingUnit
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportHandlingUnit $transportHandlingUnit
     */
    public function addToTransportHandlingUnit(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportHandlingUnit $transportHandlingUnit)
    {
        $this->transportHandlingUnit[] = $transportHandlingUnit;
        return $this;
    }

    /**
     * isset transportHandlingUnit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportHandlingUnit($index)
    {
        return isset($this->transportHandlingUnit[$index]);
    }

    /**
     * unset transportHandlingUnit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportHandlingUnit($index)
    {
        unset($this->transportHandlingUnit[$index]);
    }

    /**
     * Gets as transportHandlingUnit
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportHandlingUnit[]
     */
    public function getTransportHandlingUnit()
    {
        return $this->transportHandlingUnit;
    }

    /**
     * Sets a new transportHandlingUnit
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportHandlingUnit[] $transportHandlingUnit
     * @return self
     */
    public function setTransportHandlingUnit(?array $transportHandlingUnit = null)
    {
        $this->transportHandlingUnit = $transportHandlingUnit;
        return $this;
    }

    /**
     * Gets as returnAddress
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReturnAddress
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }

    /**
     * Sets a new returnAddress
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReturnAddress $returnAddress
     * @return self
     */
    public function setReturnAddress(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReturnAddress $returnAddress = null)
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }

    /**
     * Gets as firstArrivalPortLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FirstArrivalPortLocation
     */
    public function getFirstArrivalPortLocation()
    {
        return $this->firstArrivalPortLocation;
    }

    /**
     * Sets a new firstArrivalPortLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation
     * @return self
     */
    public function setFirstArrivalPortLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation = null)
    {
        $this->firstArrivalPortLocation = $firstArrivalPortLocation;
        return $this;
    }

    /**
     * Gets as lastExitPortLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LastExitPortLocation
     */
    public function getLastExitPortLocation()
    {
        return $this->lastExitPortLocation;
    }

    /**
     * Sets a new lastExitPortLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LastExitPortLocation $lastExitPortLocation
     * @return self
     */
    public function setLastExitPortLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LastExitPortLocation $lastExitPortLocation = null)
    {
        $this->lastExitPortLocation = $lastExitPortLocation;
        return $this;
    }
}

