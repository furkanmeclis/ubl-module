<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CardAccountType
 *
 *
 * XSD Type: CardAccountType
 */
class CardAccountType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrimaryAccountNumberID $primaryAccountNumberID
     */
    private $primaryAccountNumberID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetworkID $networkID
     */
    private $networkID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CardTypeCode $cardTypeCode
     */
    private $cardTypeCode = null;

    /**
     * @var \DateTime $validityStartDate
     */
    private $validityStartDate = null;

    /**
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\IssuerID $issuerID
     */
    private $issuerID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\IssueNumberID $issueNumberID
     */
    private $issueNumberID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CV2ID $cV2ID
     */
    private $cV2ID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CardChipCode $cardChipCode
     */
    private $cardChipCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChipApplicationID $chipApplicationID
     */
    private $chipApplicationID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HolderName $holderName
     */
    private $holderName = null;

    /**
     * Gets as primaryAccountNumberID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrimaryAccountNumberID
     */
    public function getPrimaryAccountNumberID()
    {
        return $this->primaryAccountNumberID;
    }

    /**
     * Sets a new primaryAccountNumberID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrimaryAccountNumberID $primaryAccountNumberID
     * @return self
     */
    public function setPrimaryAccountNumberID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PrimaryAccountNumberID $primaryAccountNumberID)
    {
        $this->primaryAccountNumberID = $primaryAccountNumberID;
        return $this;
    }

    /**
     * Gets as networkID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetworkID
     */
    public function getNetworkID()
    {
        return $this->networkID;
    }

    /**
     * Sets a new networkID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetworkID $networkID
     * @return self
     */
    public function setNetworkID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\NetworkID $networkID)
    {
        $this->networkID = $networkID;
        return $this;
    }

    /**
     * Gets as cardTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CardTypeCode
     */
    public function getCardTypeCode()
    {
        return $this->cardTypeCode;
    }

    /**
     * Sets a new cardTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CardTypeCode $cardTypeCode
     * @return self
     */
    public function setCardTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CardTypeCode $cardTypeCode = null)
    {
        $this->cardTypeCode = $cardTypeCode;
        return $this;
    }

    /**
     * Gets as validityStartDate
     *
     * @return \DateTime
     */
    public function getValidityStartDate()
    {
        return $this->validityStartDate;
    }

    /**
     * Sets a new validityStartDate
     *
     * @param \DateTime $validityStartDate
     * @return self
     */
    public function setValidityStartDate(?\DateTime $validityStartDate = null)
    {
        $this->validityStartDate = $validityStartDate;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(?\DateTime $expiryDate = null)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Gets as issuerID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\IssuerID
     */
    public function getIssuerID()
    {
        return $this->issuerID;
    }

    /**
     * Sets a new issuerID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\IssuerID $issuerID
     * @return self
     */
    public function setIssuerID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\IssuerID $issuerID = null)
    {
        $this->issuerID = $issuerID;
        return $this;
    }

    /**
     * Gets as issueNumberID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\IssueNumberID
     */
    public function getIssueNumberID()
    {
        return $this->issueNumberID;
    }

    /**
     * Sets a new issueNumberID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\IssueNumberID $issueNumberID
     * @return self
     */
    public function setIssueNumberID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\IssueNumberID $issueNumberID = null)
    {
        $this->issueNumberID = $issueNumberID;
        return $this;
    }

    /**
     * Gets as cV2ID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CV2ID
     */
    public function getCV2ID()
    {
        return $this->cV2ID;
    }

    /**
     * Sets a new cV2ID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CV2ID $cV2ID
     * @return self
     */
    public function setCV2ID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CV2ID $cV2ID = null)
    {
        $this->cV2ID = $cV2ID;
        return $this;
    }

    /**
     * Gets as cardChipCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CardChipCode
     */
    public function getCardChipCode()
    {
        return $this->cardChipCode;
    }

    /**
     * Sets a new cardChipCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CardChipCode $cardChipCode
     * @return self
     */
    public function setCardChipCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CardChipCode $cardChipCode = null)
    {
        $this->cardChipCode = $cardChipCode;
        return $this;
    }

    /**
     * Gets as chipApplicationID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChipApplicationID
     */
    public function getChipApplicationID()
    {
        return $this->chipApplicationID;
    }

    /**
     * Sets a new chipApplicationID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChipApplicationID $chipApplicationID
     * @return self
     */
    public function setChipApplicationID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ChipApplicationID $chipApplicationID = null)
    {
        $this->chipApplicationID = $chipApplicationID;
        return $this;
    }

    /**
     * Gets as holderName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\HolderName
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * Sets a new holderName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\HolderName $holderName
     * @return self
     */
    public function setHolderName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\HolderName $holderName = null)
    {
        $this->holderName = $holderName;
        return $this;
    }
}

