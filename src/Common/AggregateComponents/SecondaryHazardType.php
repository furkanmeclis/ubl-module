<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing SecondaryHazardType
 *
 *
 * XSD Type: SecondaryHazardType
 */
class SecondaryHazardType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardNotation $placardNotation
     */
    private $placardNotation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardEndorsement $placardEndorsement
     */
    private $placardEndorsement = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmergencyProceduresCode $emergencyProceduresCode
     */
    private $emergencyProceduresCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Extension[] $extension
     */
    private $extension = [
        
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
     * Gets as placardNotation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardNotation
     */
    public function getPlacardNotation()
    {
        return $this->placardNotation;
    }

    /**
     * Sets a new placardNotation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardNotation $placardNotation
     * @return self
     */
    public function setPlacardNotation(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardNotation $placardNotation = null)
    {
        $this->placardNotation = $placardNotation;
        return $this;
    }

    /**
     * Gets as placardEndorsement
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardEndorsement
     */
    public function getPlacardEndorsement()
    {
        return $this->placardEndorsement;
    }

    /**
     * Sets a new placardEndorsement
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardEndorsement $placardEndorsement
     * @return self
     */
    public function setPlacardEndorsement(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardEndorsement $placardEndorsement = null)
    {
        $this->placardEndorsement = $placardEndorsement;
        return $this;
    }

    /**
     * Gets as emergencyProceduresCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmergencyProceduresCode
     */
    public function getEmergencyProceduresCode()
    {
        return $this->emergencyProceduresCode;
    }

    /**
     * Sets a new emergencyProceduresCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmergencyProceduresCode $emergencyProceduresCode
     * @return self
     */
    public function setEmergencyProceduresCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EmergencyProceduresCode $emergencyProceduresCode = null)
    {
        $this->emergencyProceduresCode = $emergencyProceduresCode;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Extension $extension
     */
    public function addToExtension(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Extension $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Extension[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Extension[] $extension
     * @return self
     */
    public function setExtension(?array $extension = null)
    {
        $this->extension = $extension;
        return $this;
    }
}

