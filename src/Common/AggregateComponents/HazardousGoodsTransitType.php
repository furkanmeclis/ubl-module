<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing HazardousGoodsTransitType
 *
 *
 * XSD Type: HazardousGoodsTransitType
 */
class HazardousGoodsTransitType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEmergencyCardCode $transportEmergencyCardCode
     */
    private $transportEmergencyCardCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackingCriteriaCode $packingCriteriaCode
     */
    private $packingCriteriaCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardousRegulationCode $hazardousRegulationCode
     */
    private $hazardousRegulationCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\InhalationToxicityZoneCode $inhalationToxicityZoneCode
     */
    private $inhalationToxicityZoneCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportAuthorizationCode $transportAuthorizationCode
     */
    private $transportAuthorizationCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * Gets as transportEmergencyCardCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEmergencyCardCode
     */
    public function getTransportEmergencyCardCode()
    {
        return $this->transportEmergencyCardCode;
    }

    /**
     * Sets a new transportEmergencyCardCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEmergencyCardCode $transportEmergencyCardCode
     * @return self
     */
    public function setTransportEmergencyCardCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEmergencyCardCode $transportEmergencyCardCode = null)
    {
        $this->transportEmergencyCardCode = $transportEmergencyCardCode;
        return $this;
    }

    /**
     * Gets as packingCriteriaCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackingCriteriaCode
     */
    public function getPackingCriteriaCode()
    {
        return $this->packingCriteriaCode;
    }

    /**
     * Sets a new packingCriteriaCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PackingCriteriaCode $packingCriteriaCode
     * @return self
     */
    public function setPackingCriteriaCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PackingCriteriaCode $packingCriteriaCode = null)
    {
        $this->packingCriteriaCode = $packingCriteriaCode;
        return $this;
    }

    /**
     * Gets as hazardousRegulationCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardousRegulationCode
     */
    public function getHazardousRegulationCode()
    {
        return $this->hazardousRegulationCode;
    }

    /**
     * Sets a new hazardousRegulationCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardousRegulationCode $hazardousRegulationCode
     * @return self
     */
    public function setHazardousRegulationCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardousRegulationCode $hazardousRegulationCode = null)
    {
        $this->hazardousRegulationCode = $hazardousRegulationCode;
        return $this;
    }

    /**
     * Gets as inhalationToxicityZoneCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\InhalationToxicityZoneCode
     */
    public function getInhalationToxicityZoneCode()
    {
        return $this->inhalationToxicityZoneCode;
    }

    /**
     * Sets a new inhalationToxicityZoneCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\InhalationToxicityZoneCode $inhalationToxicityZoneCode
     * @return self
     */
    public function setInhalationToxicityZoneCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\InhalationToxicityZoneCode $inhalationToxicityZoneCode = null)
    {
        $this->inhalationToxicityZoneCode = $inhalationToxicityZoneCode;
        return $this;
    }

    /**
     * Gets as transportAuthorizationCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportAuthorizationCode
     */
    public function getTransportAuthorizationCode()
    {
        return $this->transportAuthorizationCode;
    }

    /**
     * Sets a new transportAuthorizationCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportAuthorizationCode $transportAuthorizationCode
     * @return self
     */
    public function setTransportAuthorizationCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportAuthorizationCode $transportAuthorizationCode = null)
    {
        $this->transportAuthorizationCode = $transportAuthorizationCode;
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
}

