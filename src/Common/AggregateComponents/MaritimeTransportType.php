<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing MaritimeTransportType
 *
 *
 * XSD Type: MaritimeTransportType
 */
class MaritimeTransportType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\VesselID $vesselID
     */
    private $vesselID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\VesselName $vesselName
     */
    private $vesselName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RadioCallSignID $radioCallSignID
     */
    private $radioCallSignID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ShipsRequirements[] $shipsRequirements
     */
    private $shipsRequirements = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossTonnageMeasure $grossTonnageMeasure
     */
    private $grossTonnageMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetTonnageMeasure $netTonnageMeasure
     */
    private $netTonnageMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RegistryCertificateDocumentReference $registryCertificateDocumentReference
     */
    private $registryCertificateDocumentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RegistryPortLocation $registryPortLocation
     */
    private $registryPortLocation = null;

    /**
     * Gets as vesselID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\VesselID
     */
    public function getVesselID()
    {
        return $this->vesselID;
    }

    /**
     * Sets a new vesselID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\VesselID $vesselID
     * @return self
     */
    public function setVesselID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\VesselID $vesselID = null)
    {
        $this->vesselID = $vesselID;
        return $this;
    }

    /**
     * Gets as vesselName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\VesselName
     */
    public function getVesselName()
    {
        return $this->vesselName;
    }

    /**
     * Sets a new vesselName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\VesselName $vesselName
     * @return self
     */
    public function setVesselName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\VesselName $vesselName = null)
    {
        $this->vesselName = $vesselName;
        return $this;
    }

    /**
     * Gets as radioCallSignID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RadioCallSignID
     */
    public function getRadioCallSignID()
    {
        return $this->radioCallSignID;
    }

    /**
     * Sets a new radioCallSignID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RadioCallSignID $radioCallSignID
     * @return self
     */
    public function setRadioCallSignID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RadioCallSignID $radioCallSignID = null)
    {
        $this->radioCallSignID = $radioCallSignID;
        return $this;
    }

    /**
     * Adds as shipsRequirements
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ShipsRequirements $shipsRequirements
     */
    public function addToShipsRequirements(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ShipsRequirements $shipsRequirements)
    {
        $this->shipsRequirements[] = $shipsRequirements;
        return $this;
    }

    /**
     * isset shipsRequirements
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipsRequirements($index)
    {
        return isset($this->shipsRequirements[$index]);
    }

    /**
     * unset shipsRequirements
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipsRequirements($index)
    {
        unset($this->shipsRequirements[$index]);
    }

    /**
     * Gets as shipsRequirements
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ShipsRequirements[]
     */
    public function getShipsRequirements()
    {
        return $this->shipsRequirements;
    }

    /**
     * Sets a new shipsRequirements
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ShipsRequirements[] $shipsRequirements
     * @return self
     */
    public function setShipsRequirements(?array $shipsRequirements = null)
    {
        $this->shipsRequirements = $shipsRequirements;
        return $this;
    }

    /**
     * Gets as grossTonnageMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossTonnageMeasure
     */
    public function getGrossTonnageMeasure()
    {
        return $this->grossTonnageMeasure;
    }

    /**
     * Sets a new grossTonnageMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossTonnageMeasure $grossTonnageMeasure
     * @return self
     */
    public function setGrossTonnageMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\GrossTonnageMeasure $grossTonnageMeasure = null)
    {
        $this->grossTonnageMeasure = $grossTonnageMeasure;
        return $this;
    }

    /**
     * Gets as netTonnageMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetTonnageMeasure
     */
    public function getNetTonnageMeasure()
    {
        return $this->netTonnageMeasure;
    }

    /**
     * Sets a new netTonnageMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetTonnageMeasure $netTonnageMeasure
     * @return self
     */
    public function setNetTonnageMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\NetTonnageMeasure $netTonnageMeasure = null)
    {
        $this->netTonnageMeasure = $netTonnageMeasure;
        return $this;
    }

    /**
     * Gets as registryCertificateDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RegistryCertificateDocumentReference
     */
    public function getRegistryCertificateDocumentReference()
    {
        return $this->registryCertificateDocumentReference;
    }

    /**
     * Sets a new registryCertificateDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RegistryCertificateDocumentReference $registryCertificateDocumentReference
     * @return self
     */
    public function setRegistryCertificateDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RegistryCertificateDocumentReference $registryCertificateDocumentReference = null)
    {
        $this->registryCertificateDocumentReference = $registryCertificateDocumentReference;
        return $this;
    }

    /**
     * Gets as registryPortLocation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RegistryPortLocation
     */
    public function getRegistryPortLocation()
    {
        return $this->registryPortLocation;
    }

    /**
     * Sets a new registryPortLocation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\RegistryPortLocation $registryPortLocation
     * @return self
     */
    public function setRegistryPortLocation(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\RegistryPortLocation $registryPortLocation = null)
    {
        $this->registryPortLocation = $registryPortLocation;
        return $this;
    }
}

