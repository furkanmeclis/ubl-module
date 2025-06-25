<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing GoodsItemType
 *
 *
 * XSD Type: GoodsItemType
 */
class GoodsItemType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

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
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\InsuranceValueAmount $insuranceValueAmount
     */
    private $insuranceValueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValueAmount $valueAmount
     */
    private $valueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeableWeightMeasure $chargeableWeightMeasure
     */
    private $chargeableWeightMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RequiredCustomsID $requiredCustomsID
     */
    private $requiredCustomsID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomsStatusCode $customsStatusCode
     */
    private $customsStatusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomsTariffQuantity $customsTariffQuantity
     */
    private $customsTariffQuantity = null;

    /**
     * @var bool $customsImportClassifiedIndicator
     */
    private $customsImportClassifiedIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeableQuantity $chargeableQuantity
     */
    private $chargeableQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReturnableQuantity $returnableQuantity
     */
    private $returnableQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TraceID $traceID
     */
    private $traceID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item[] $item
     */
    private $item = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     */
    private $freightAllowanceCharge = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoiceLine[] $invoiceLine
     */
    private $invoiceLine = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Temperature[] $temperature
     */
    private $temperature = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginAddress $originAddress
     */
    private $originAddress = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
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
     * Gets as chargeableWeightMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeableWeightMeasure
     */
    public function getChargeableWeightMeasure()
    {
        return $this->chargeableWeightMeasure;
    }

    /**
     * Sets a new chargeableWeightMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeableWeightMeasure $chargeableWeightMeasure
     * @return self
     */
    public function setChargeableWeightMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeableWeightMeasure $chargeableWeightMeasure = null)
    {
        $this->chargeableWeightMeasure = $chargeableWeightMeasure;
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
     * Gets as quantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as requiredCustomsID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RequiredCustomsID
     */
    public function getRequiredCustomsID()
    {
        return $this->requiredCustomsID;
    }

    /**
     * Sets a new requiredCustomsID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RequiredCustomsID $requiredCustomsID
     * @return self
     */
    public function setRequiredCustomsID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RequiredCustomsID $requiredCustomsID = null)
    {
        $this->requiredCustomsID = $requiredCustomsID;
        return $this;
    }

    /**
     * Gets as customsStatusCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomsStatusCode
     */
    public function getCustomsStatusCode()
    {
        return $this->customsStatusCode;
    }

    /**
     * Sets a new customsStatusCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomsStatusCode $customsStatusCode
     * @return self
     */
    public function setCustomsStatusCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomsStatusCode $customsStatusCode = null)
    {
        $this->customsStatusCode = $customsStatusCode;
        return $this;
    }

    /**
     * Gets as customsTariffQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomsTariffQuantity
     */
    public function getCustomsTariffQuantity()
    {
        return $this->customsTariffQuantity;
    }

    /**
     * Sets a new customsTariffQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomsTariffQuantity $customsTariffQuantity
     * @return self
     */
    public function setCustomsTariffQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CustomsTariffQuantity $customsTariffQuantity = null)
    {
        $this->customsTariffQuantity = $customsTariffQuantity;
        return $this;
    }

    /**
     * Gets as customsImportClassifiedIndicator
     *
     * @return bool
     */
    public function getCustomsImportClassifiedIndicator()
    {
        return $this->customsImportClassifiedIndicator;
    }

    /**
     * Sets a new customsImportClassifiedIndicator
     *
     * @param bool $customsImportClassifiedIndicator
     * @return self
     */
    public function setCustomsImportClassifiedIndicator($customsImportClassifiedIndicator)
    {
        $this->customsImportClassifiedIndicator = $customsImportClassifiedIndicator;
        return $this;
    }

    /**
     * Gets as chargeableQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeableQuantity
     */
    public function getChargeableQuantity()
    {
        return $this->chargeableQuantity;
    }

    /**
     * Sets a new chargeableQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeableQuantity $chargeableQuantity
     * @return self
     */
    public function setChargeableQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ChargeableQuantity $chargeableQuantity = null)
    {
        $this->chargeableQuantity = $chargeableQuantity;
        return $this;
    }

    /**
     * Gets as returnableQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReturnableQuantity
     */
    public function getReturnableQuantity()
    {
        return $this->returnableQuantity;
    }

    /**
     * Sets a new returnableQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReturnableQuantity $returnableQuantity
     * @return self
     */
    public function setReturnableQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReturnableQuantity $returnableQuantity = null)
    {
        $this->returnableQuantity = $returnableQuantity;
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
     * Adds as item
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item
     */
    public function addToItem(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Item[] $item
     * @return self
     */
    public function setItem(?array $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FreightAllowanceCharge $freightAllowanceCharge
     */
    public function addToFreightAllowanceCharge(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FreightAllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;
        return $this;
    }

    /**
     * isset freightAllowanceCharge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreightAllowanceCharge($index)
    {
        return isset($this->freightAllowanceCharge[$index]);
    }

    /**
     * unset freightAllowanceCharge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreightAllowanceCharge($index)
    {
        unset($this->freightAllowanceCharge[$index]);
    }

    /**
     * Gets as freightAllowanceCharge
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FreightAllowanceCharge[]
     */
    public function getFreightAllowanceCharge()
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * Sets a new freightAllowanceCharge
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(?array $freightAllowanceCharge = null)
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;
        return $this;
    }

    /**
     * Adds as invoiceLine
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoiceLine $invoiceLine
     */
    public function addToInvoiceLine(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoiceLine $invoiceLine)
    {
        $this->invoiceLine[] = $invoiceLine;
        return $this;
    }

    /**
     * isset invoiceLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceLine($index)
    {
        return isset($this->invoiceLine[$index]);
    }

    /**
     * unset invoiceLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceLine($index)
    {
        unset($this->invoiceLine[$index]);
    }

    /**
     * Gets as invoiceLine
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoiceLine[]
     */
    public function getInvoiceLine()
    {
        return $this->invoiceLine;
    }

    /**
     * Sets a new invoiceLine
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InvoiceLine[] $invoiceLine
     * @return self
     */
    public function setInvoiceLine(?array $invoiceLine = null)
    {
        $this->invoiceLine = $invoiceLine;
        return $this;
    }

    /**
     * Adds as temperature
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Temperature $temperature
     */
    public function addToTemperature(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Temperature $temperature)
    {
        $this->temperature[] = $temperature;
        return $this;
    }

    /**
     * isset temperature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTemperature($index)
    {
        return isset($this->temperature[$index]);
    }

    /**
     * unset temperature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTemperature($index)
    {
        unset($this->temperature[$index]);
    }

    /**
     * Gets as temperature
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Temperature[]
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Sets a new temperature
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Temperature[] $temperature
     * @return self
     */
    public function setTemperature(?array $temperature = null)
    {
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * Gets as originAddress
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginAddress
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * Sets a new originAddress
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginAddress $originAddress
     * @return self
     */
    public function setOriginAddress(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginAddress $originAddress = null)
    {
        $this->originAddress = $originAddress;
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
}

