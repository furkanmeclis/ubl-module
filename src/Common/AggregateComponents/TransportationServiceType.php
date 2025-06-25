<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TransportationServiceType
 *
 *
 * XSD Type: TransportationServiceType
 */
class TransportationServiceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportServiceCode $transportServiceCode
     */
    private $transportServiceCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TariffClassCode $tariffClassCode
     */
    private $tariffClassCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Priority $priority
     */
    private $priority = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FreightRateClassCode $freightRateClassCode
     */
    private $freightRateClassCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportationServiceDescription[] $transportationServiceDescription
     */
    private $transportationServiceDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportationServiceDetailsURI $transportationServiceDetailsURI
     */
    private $transportationServiceDetailsURI = null;

    /**
     * @var \DateTime $nominationDate
     */
    private $nominationDate = null;

    /**
     * @var \DateTime $nominationTime
     */
    private $nominationTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEquipment[] $transportEquipment
     */
    private $transportEquipment = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedTransportEquipment[] $supportedTransportEquipment
     */
    private $supportedTransportEquipment = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedTransportEquipment[] $unsupportedTransportEquipment
     */
    private $unsupportedTransportEquipment = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification[] $commodityClassification
     */
    private $commodityClassification = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedCommodityClassification[] $supportedCommodityClassification
     */
    private $supportedCommodityClassification = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedCommodityClassification[] $unsupportedCommodityClassification
     */
    private $unsupportedCommodityClassification = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TotalCapacityDimension $totalCapacityDimension
     */
    private $totalCapacityDimension = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentStage[] $shipmentStage
     */
    private $shipmentStage = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEvent[] $transportEvent
     */
    private $transportEvent = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ResponsibleTransportServiceProviderParty $responsibleTransportServiceProviderParty
     */
    private $responsibleTransportServiceProviderParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission[] $environmentalEmission
     */
    private $environmentalEmission = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDurationPeriod $estimatedDurationPeriod
     */
    private $estimatedDurationPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ScheduledServiceFrequency[] $scheduledServiceFrequency
     */
    private $scheduledServiceFrequency = [
        
    ];

    /**
     * Gets as transportServiceCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportServiceCode
     */
    public function getTransportServiceCode()
    {
        return $this->transportServiceCode;
    }

    /**
     * Sets a new transportServiceCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportServiceCode $transportServiceCode
     * @return self
     */
    public function setTransportServiceCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportServiceCode $transportServiceCode)
    {
        $this->transportServiceCode = $transportServiceCode;
        return $this;
    }

    /**
     * Gets as tariffClassCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TariffClassCode
     */
    public function getTariffClassCode()
    {
        return $this->tariffClassCode;
    }

    /**
     * Sets a new tariffClassCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TariffClassCode $tariffClassCode
     * @return self
     */
    public function setTariffClassCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TariffClassCode $tariffClassCode = null)
    {
        $this->tariffClassCode = $tariffClassCode;
        return $this;
    }

    /**
     * Gets as priority
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Priority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Priority $priority
     * @return self
     */
    public function setPriority(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Priority $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as freightRateClassCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FreightRateClassCode
     */
    public function getFreightRateClassCode()
    {
        return $this->freightRateClassCode;
    }

    /**
     * Sets a new freightRateClassCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FreightRateClassCode $freightRateClassCode
     * @return self
     */
    public function setFreightRateClassCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\FreightRateClassCode $freightRateClassCode = null)
    {
        $this->freightRateClassCode = $freightRateClassCode;
        return $this;
    }

    /**
     * Adds as transportationServiceDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportationServiceDescription $transportationServiceDescription
     */
    public function addToTransportationServiceDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportationServiceDescription $transportationServiceDescription)
    {
        $this->transportationServiceDescription[] = $transportationServiceDescription;
        return $this;
    }

    /**
     * isset transportationServiceDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportationServiceDescription($index)
    {
        return isset($this->transportationServiceDescription[$index]);
    }

    /**
     * unset transportationServiceDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportationServiceDescription($index)
    {
        unset($this->transportationServiceDescription[$index]);
    }

    /**
     * Gets as transportationServiceDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportationServiceDescription[]
     */
    public function getTransportationServiceDescription()
    {
        return $this->transportationServiceDescription;
    }

    /**
     * Sets a new transportationServiceDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportationServiceDescription[] $transportationServiceDescription
     * @return self
     */
    public function setTransportationServiceDescription(?array $transportationServiceDescription = null)
    {
        $this->transportationServiceDescription = $transportationServiceDescription;
        return $this;
    }

    /**
     * Gets as transportationServiceDetailsURI
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportationServiceDetailsURI
     */
    public function getTransportationServiceDetailsURI()
    {
        return $this->transportationServiceDetailsURI;
    }

    /**
     * Sets a new transportationServiceDetailsURI
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportationServiceDetailsURI $transportationServiceDetailsURI
     * @return self
     */
    public function setTransportationServiceDetailsURI(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportationServiceDetailsURI $transportationServiceDetailsURI = null)
    {
        $this->transportationServiceDetailsURI = $transportationServiceDetailsURI;
        return $this;
    }

    /**
     * Gets as nominationDate
     *
     * @return \DateTime
     */
    public function getNominationDate()
    {
        return $this->nominationDate;
    }

    /**
     * Sets a new nominationDate
     *
     * @param \DateTime $nominationDate
     * @return self
     */
    public function setNominationDate(?\DateTime $nominationDate = null)
    {
        $this->nominationDate = $nominationDate;
        return $this;
    }

    /**
     * Gets as nominationTime
     *
     * @return \DateTime
     */
    public function getNominationTime()
    {
        return $this->nominationTime;
    }

    /**
     * Sets a new nominationTime
     *
     * @param \DateTime $nominationTime
     * @return self
     */
    public function setNominationTime(?\DateTime $nominationTime = null)
    {
        $this->nominationTime = $nominationTime;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as sequenceNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric = null)
    {
        $this->sequenceNumeric = $sequenceNumeric;
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
     * Adds as supportedTransportEquipment
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedTransportEquipment $supportedTransportEquipment
     */
    public function addToSupportedTransportEquipment(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedTransportEquipment $supportedTransportEquipment)
    {
        $this->supportedTransportEquipment[] = $supportedTransportEquipment;
        return $this;
    }

    /**
     * isset supportedTransportEquipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedTransportEquipment($index)
    {
        return isset($this->supportedTransportEquipment[$index]);
    }

    /**
     * unset supportedTransportEquipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedTransportEquipment($index)
    {
        unset($this->supportedTransportEquipment[$index]);
    }

    /**
     * Gets as supportedTransportEquipment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedTransportEquipment[]
     */
    public function getSupportedTransportEquipment()
    {
        return $this->supportedTransportEquipment;
    }

    /**
     * Sets a new supportedTransportEquipment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedTransportEquipment[] $supportedTransportEquipment
     * @return self
     */
    public function setSupportedTransportEquipment(?array $supportedTransportEquipment = null)
    {
        $this->supportedTransportEquipment = $supportedTransportEquipment;
        return $this;
    }

    /**
     * Adds as unsupportedTransportEquipment
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedTransportEquipment $unsupportedTransportEquipment
     */
    public function addToUnsupportedTransportEquipment(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedTransportEquipment $unsupportedTransportEquipment)
    {
        $this->unsupportedTransportEquipment[] = $unsupportedTransportEquipment;
        return $this;
    }

    /**
     * isset unsupportedTransportEquipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnsupportedTransportEquipment($index)
    {
        return isset($this->unsupportedTransportEquipment[$index]);
    }

    /**
     * unset unsupportedTransportEquipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnsupportedTransportEquipment($index)
    {
        unset($this->unsupportedTransportEquipment[$index]);
    }

    /**
     * Gets as unsupportedTransportEquipment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedTransportEquipment[]
     */
    public function getUnsupportedTransportEquipment()
    {
        return $this->unsupportedTransportEquipment;
    }

    /**
     * Sets a new unsupportedTransportEquipment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedTransportEquipment[] $unsupportedTransportEquipment
     * @return self
     */
    public function setUnsupportedTransportEquipment(?array $unsupportedTransportEquipment = null)
    {
        $this->unsupportedTransportEquipment = $unsupportedTransportEquipment;
        return $this;
    }

    /**
     * Adds as commodityClassification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification $commodityClassification
     */
    public function addToCommodityClassification(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification $commodityClassification)
    {
        $this->commodityClassification[] = $commodityClassification;
        return $this;
    }

    /**
     * isset commodityClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommodityClassification($index)
    {
        return isset($this->commodityClassification[$index]);
    }

    /**
     * unset commodityClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommodityClassification($index)
    {
        unset($this->commodityClassification[$index]);
    }

    /**
     * Gets as commodityClassification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification[]
     */
    public function getCommodityClassification()
    {
        return $this->commodityClassification;
    }

    /**
     * Sets a new commodityClassification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification[] $commodityClassification
     * @return self
     */
    public function setCommodityClassification(?array $commodityClassification = null)
    {
        $this->commodityClassification = $commodityClassification;
        return $this;
    }

    /**
     * Adds as supportedCommodityClassification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedCommodityClassification $supportedCommodityClassification
     */
    public function addToSupportedCommodityClassification(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedCommodityClassification $supportedCommodityClassification)
    {
        $this->supportedCommodityClassification[] = $supportedCommodityClassification;
        return $this;
    }

    /**
     * isset supportedCommodityClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedCommodityClassification($index)
    {
        return isset($this->supportedCommodityClassification[$index]);
    }

    /**
     * unset supportedCommodityClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedCommodityClassification($index)
    {
        unset($this->supportedCommodityClassification[$index]);
    }

    /**
     * Gets as supportedCommodityClassification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedCommodityClassification[]
     */
    public function getSupportedCommodityClassification()
    {
        return $this->supportedCommodityClassification;
    }

    /**
     * Sets a new supportedCommodityClassification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SupportedCommodityClassification[] $supportedCommodityClassification
     * @return self
     */
    public function setSupportedCommodityClassification(?array $supportedCommodityClassification = null)
    {
        $this->supportedCommodityClassification = $supportedCommodityClassification;
        return $this;
    }

    /**
     * Adds as unsupportedCommodityClassification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedCommodityClassification $unsupportedCommodityClassification
     */
    public function addToUnsupportedCommodityClassification(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedCommodityClassification $unsupportedCommodityClassification)
    {
        $this->unsupportedCommodityClassification[] = $unsupportedCommodityClassification;
        return $this;
    }

    /**
     * isset unsupportedCommodityClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnsupportedCommodityClassification($index)
    {
        return isset($this->unsupportedCommodityClassification[$index]);
    }

    /**
     * unset unsupportedCommodityClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnsupportedCommodityClassification($index)
    {
        unset($this->unsupportedCommodityClassification[$index]);
    }

    /**
     * Gets as unsupportedCommodityClassification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedCommodityClassification[]
     */
    public function getUnsupportedCommodityClassification()
    {
        return $this->unsupportedCommodityClassification;
    }

    /**
     * Sets a new unsupportedCommodityClassification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\UnsupportedCommodityClassification[] $unsupportedCommodityClassification
     * @return self
     */
    public function setUnsupportedCommodityClassification(?array $unsupportedCommodityClassification = null)
    {
        $this->unsupportedCommodityClassification = $unsupportedCommodityClassification;
        return $this;
    }

    /**
     * Gets as totalCapacityDimension
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TotalCapacityDimension
     */
    public function getTotalCapacityDimension()
    {
        return $this->totalCapacityDimension;
    }

    /**
     * Sets a new totalCapacityDimension
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TotalCapacityDimension $totalCapacityDimension
     * @return self
     */
    public function setTotalCapacityDimension(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TotalCapacityDimension $totalCapacityDimension = null)
    {
        $this->totalCapacityDimension = $totalCapacityDimension;
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
     * Adds as transportEvent
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEvent $transportEvent
     */
    public function addToTransportEvent(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEvent $transportEvent)
    {
        $this->transportEvent[] = $transportEvent;
        return $this;
    }

    /**
     * isset transportEvent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEvent($index)
    {
        return isset($this->transportEvent[$index]);
    }

    /**
     * unset transportEvent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEvent($index)
    {
        unset($this->transportEvent[$index]);
    }

    /**
     * Gets as transportEvent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEvent[]
     */
    public function getTransportEvent()
    {
        return $this->transportEvent;
    }

    /**
     * Sets a new transportEvent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportEvent[] $transportEvent
     * @return self
     */
    public function setTransportEvent(?array $transportEvent = null)
    {
        $this->transportEvent = $transportEvent;
        return $this;
    }

    /**
     * Gets as responsibleTransportServiceProviderParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ResponsibleTransportServiceProviderParty
     */
    public function getResponsibleTransportServiceProviderParty()
    {
        return $this->responsibleTransportServiceProviderParty;
    }

    /**
     * Sets a new responsibleTransportServiceProviderParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ResponsibleTransportServiceProviderParty $responsibleTransportServiceProviderParty
     * @return self
     */
    public function setResponsibleTransportServiceProviderParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ResponsibleTransportServiceProviderParty $responsibleTransportServiceProviderParty = null)
    {
        $this->responsibleTransportServiceProviderParty = $responsibleTransportServiceProviderParty;
        return $this;
    }

    /**
     * Adds as environmentalEmission
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission $environmentalEmission
     */
    public function addToEnvironmentalEmission(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission $environmentalEmission)
    {
        $this->environmentalEmission[] = $environmentalEmission;
        return $this;
    }

    /**
     * isset environmentalEmission
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvironmentalEmission($index)
    {
        return isset($this->environmentalEmission[$index]);
    }

    /**
     * unset environmentalEmission
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvironmentalEmission($index)
    {
        unset($this->environmentalEmission[$index]);
    }

    /**
     * Gets as environmentalEmission
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission[]
     */
    public function getEnvironmentalEmission()
    {
        return $this->environmentalEmission;
    }

    /**
     * Sets a new environmentalEmission
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EnvironmentalEmission[] $environmentalEmission
     * @return self
     */
    public function setEnvironmentalEmission(?array $environmentalEmission = null)
    {
        $this->environmentalEmission = $environmentalEmission;
        return $this;
    }

    /**
     * Gets as estimatedDurationPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDurationPeriod
     */
    public function getEstimatedDurationPeriod()
    {
        return $this->estimatedDurationPeriod;
    }

    /**
     * Sets a new estimatedDurationPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDurationPeriod $estimatedDurationPeriod
     * @return self
     */
    public function setEstimatedDurationPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EstimatedDurationPeriod $estimatedDurationPeriod = null)
    {
        $this->estimatedDurationPeriod = $estimatedDurationPeriod;
        return $this;
    }

    /**
     * Adds as scheduledServiceFrequency
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ScheduledServiceFrequency $scheduledServiceFrequency
     */
    public function addToScheduledServiceFrequency(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ScheduledServiceFrequency $scheduledServiceFrequency)
    {
        $this->scheduledServiceFrequency[] = $scheduledServiceFrequency;
        return $this;
    }

    /**
     * isset scheduledServiceFrequency
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScheduledServiceFrequency($index)
    {
        return isset($this->scheduledServiceFrequency[$index]);
    }

    /**
     * unset scheduledServiceFrequency
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScheduledServiceFrequency($index)
    {
        unset($this->scheduledServiceFrequency[$index]);
    }

    /**
     * Gets as scheduledServiceFrequency
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ScheduledServiceFrequency[]
     */
    public function getScheduledServiceFrequency()
    {
        return $this->scheduledServiceFrequency;
    }

    /**
     * Sets a new scheduledServiceFrequency
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ScheduledServiceFrequency[] $scheduledServiceFrequency
     * @return self
     */
    public function setScheduledServiceFrequency(?array $scheduledServiceFrequency = null)
    {
        $this->scheduledServiceFrequency = $scheduledServiceFrequency;
        return $this;
    }
}

