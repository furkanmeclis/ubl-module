<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TransportationSegmentType
 *
 *
 * XSD Type: TransportationSegmentType
 */
class TransportationSegmentType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID
     */
    private $transportExecutionPlanReferenceID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportationService $transportationService
     */
    private $transportationService = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportServiceProviderParty $transportServiceProviderParty
     */
    private $transportServiceProviderParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReferencedConsignment $referencedConsignment
     */
    private $referencedConsignment = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ShipmentStage[] $shipmentStage
     */
    private $shipmentStage = [
        
    ];

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
    public function setSequenceNumeric(\FurkanMeclis\GIB\UBL\Common\BasicComponents\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as transportExecutionPlanReferenceID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportExecutionPlanReferenceID
     */
    public function getTransportExecutionPlanReferenceID()
    {
        return $this->transportExecutionPlanReferenceID;
    }

    /**
     * Sets a new transportExecutionPlanReferenceID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID
     * @return self
     */
    public function setTransportExecutionPlanReferenceID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID = null)
    {
        $this->transportExecutionPlanReferenceID = $transportExecutionPlanReferenceID;
        return $this;
    }

    /**
     * Gets as transportationService
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportationService
     */
    public function getTransportationService()
    {
        return $this->transportationService;
    }

    /**
     * Sets a new transportationService
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportationService $transportationService
     * @return self
     */
    public function setTransportationService(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportationService $transportationService)
    {
        $this->transportationService = $transportationService;
        return $this;
    }

    /**
     * Gets as transportServiceProviderParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportServiceProviderParty
     */
    public function getTransportServiceProviderParty()
    {
        return $this->transportServiceProviderParty;
    }

    /**
     * Sets a new transportServiceProviderParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportServiceProviderParty $transportServiceProviderParty
     * @return self
     */
    public function setTransportServiceProviderParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TransportServiceProviderParty $transportServiceProviderParty)
    {
        $this->transportServiceProviderParty = $transportServiceProviderParty;
        return $this;
    }

    /**
     * Gets as referencedConsignment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReferencedConsignment
     */
    public function getReferencedConsignment()
    {
        return $this->referencedConsignment;
    }

    /**
     * Sets a new referencedConsignment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReferencedConsignment $referencedConsignment
     * @return self
     */
    public function setReferencedConsignment(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ReferencedConsignment $referencedConsignment = null)
    {
        $this->referencedConsignment = $referencedConsignment;
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
}

