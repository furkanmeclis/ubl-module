<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TransportEquipmentType
 *
 *
 * XSD Type: TransportEquipmentType
 */
class TransportEquipmentType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEquipmentTypeCode $transportEquipmentTypeCode
     */
    private $transportEquipmentTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    private $description = null;

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
     * Gets as transportEquipmentTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEquipmentTypeCode
     */
    public function getTransportEquipmentTypeCode()
    {
        return $this->transportEquipmentTypeCode;
    }

    /**
     * Sets a new transportEquipmentTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEquipmentTypeCode $transportEquipmentTypeCode
     * @return self
     */
    public function setTransportEquipmentTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TransportEquipmentTypeCode $transportEquipmentTypeCode = null)
    {
        $this->transportEquipmentTypeCode = $transportEquipmentTypeCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     * @return self
     */
    public function setDescription(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

