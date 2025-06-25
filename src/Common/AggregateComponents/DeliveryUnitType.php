<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DeliveryUnitType
 *
 *
 * XSD Type: DeliveryUnitType
 */
class DeliveryUnitType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BatchQuantity $batchQuantity
     */
    private $batchQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumerUnitQuantity $consumerUnitQuantity
     */
    private $consumerUnitQuantity = null;

    /**
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * Gets as batchQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BatchQuantity
     */
    public function getBatchQuantity()
    {
        return $this->batchQuantity;
    }

    /**
     * Sets a new batchQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BatchQuantity $batchQuantity
     * @return self
     */
    public function setBatchQuantity(\FurkanMeclis\GIB\UBL\Common\BasicComponents\BatchQuantity $batchQuantity)
    {
        $this->batchQuantity = $batchQuantity;
        return $this;
    }

    /**
     * Gets as consumerUnitQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumerUnitQuantity
     */
    public function getConsumerUnitQuantity()
    {
        return $this->consumerUnitQuantity;
    }

    /**
     * Sets a new consumerUnitQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumerUnitQuantity $consumerUnitQuantity
     * @return self
     */
    public function setConsumerUnitQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumerUnitQuantity $consumerUnitQuantity = null)
    {
        $this->consumerUnitQuantity = $consumerUnitQuantity;
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
}

