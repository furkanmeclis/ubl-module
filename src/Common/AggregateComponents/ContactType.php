<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ContactType
 *
 *
 * XSD Type: ContactType
 */
class ContactType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Telephone $telephone
     */
    private $telephone = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Telefax $telefax
     */
    private $telefax = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ElectronicMail $electronicMail
     */
    private $electronicMail = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note
     */
    private $note = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OtherCommunication[] $otherCommunication
     */
    private $otherCommunication = [
        
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
     * Gets as telephone
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Telephone $telephone
     * @return self
     */
    public function setTelephone(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Telephone $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as telefax
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Telefax
     */
    public function getTelefax()
    {
        return $this->telefax;
    }

    /**
     * Sets a new telefax
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Telefax $telefax
     * @return self
     */
    public function setTelefax(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Telefax $telefax = null)
    {
        $this->telefax = $telefax;
        return $this;
    }

    /**
     * Gets as electronicMail
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ElectronicMail
     */
    public function getElectronicMail()
    {
        return $this->electronicMail;
    }

    /**
     * Sets a new electronicMail
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ElectronicMail $electronicMail
     * @return self
     */
    public function setElectronicMail(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ElectronicMail $electronicMail = null)
    {
        $this->electronicMail = $electronicMail;
        return $this;
    }

    /**
     * Gets as note
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note
     * @return self
     */
    public function setNote(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as otherCommunication
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OtherCommunication $otherCommunication
     */
    public function addToOtherCommunication(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OtherCommunication $otherCommunication)
    {
        $this->otherCommunication[] = $otherCommunication;
        return $this;
    }

    /**
     * isset otherCommunication
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCommunication($index)
    {
        return isset($this->otherCommunication[$index]);
    }

    /**
     * unset otherCommunication
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCommunication($index)
    {
        unset($this->otherCommunication[$index]);
    }

    /**
     * Gets as otherCommunication
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OtherCommunication[]
     */
    public function getOtherCommunication()
    {
        return $this->otherCommunication;
    }

    /**
     * Sets a new otherCommunication
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OtherCommunication[] $otherCommunication
     * @return self
     */
    public function setOtherCommunication(?array $otherCommunication = null)
    {
        $this->otherCommunication = $otherCommunication;
        return $this;
    }
}

