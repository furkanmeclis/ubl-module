<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ImmobilizedSecurityType
 *
 *
 * XSD Type: ImmobilizedSecurityType
 */
class ImmobilizedSecurityType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ImmobilizationCertificateID $immobilizationCertificateID
     */
    private $immobilizationCertificateID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SecurityID $securityID
     */
    private $securityID = null;

    /**
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FaceValueAmount $faceValueAmount
     */
    private $faceValueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MarketValueAmount $marketValueAmount
     */
    private $marketValueAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SharesNumberQuantity $sharesNumberQuantity
     */
    private $sharesNumberQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * Gets as immobilizationCertificateID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ImmobilizationCertificateID
     */
    public function getImmobilizationCertificateID()
    {
        return $this->immobilizationCertificateID;
    }

    /**
     * Sets a new immobilizationCertificateID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ImmobilizationCertificateID $immobilizationCertificateID
     * @return self
     */
    public function setImmobilizationCertificateID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ImmobilizationCertificateID $immobilizationCertificateID = null)
    {
        $this->immobilizationCertificateID = $immobilizationCertificateID;
        return $this;
    }

    /**
     * Gets as securityID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SecurityID
     */
    public function getSecurityID()
    {
        return $this->securityID;
    }

    /**
     * Sets a new securityID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SecurityID $securityID
     * @return self
     */
    public function setSecurityID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SecurityID $securityID = null)
    {
        $this->securityID = $securityID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(?\DateTime $issueDate = null)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as faceValueAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FaceValueAmount
     */
    public function getFaceValueAmount()
    {
        return $this->faceValueAmount;
    }

    /**
     * Sets a new faceValueAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FaceValueAmount $faceValueAmount
     * @return self
     */
    public function setFaceValueAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\FaceValueAmount $faceValueAmount = null)
    {
        $this->faceValueAmount = $faceValueAmount;
        return $this;
    }

    /**
     * Gets as marketValueAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MarketValueAmount
     */
    public function getMarketValueAmount()
    {
        return $this->marketValueAmount;
    }

    /**
     * Sets a new marketValueAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MarketValueAmount $marketValueAmount
     * @return self
     */
    public function setMarketValueAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MarketValueAmount $marketValueAmount = null)
    {
        $this->marketValueAmount = $marketValueAmount;
        return $this;
    }

    /**
     * Gets as sharesNumberQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SharesNumberQuantity
     */
    public function getSharesNumberQuantity()
    {
        return $this->sharesNumberQuantity;
    }

    /**
     * Sets a new sharesNumberQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SharesNumberQuantity $sharesNumberQuantity
     * @return self
     */
    public function setSharesNumberQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SharesNumberQuantity $sharesNumberQuantity = null)
    {
        $this->sharesNumberQuantity = $sharesNumberQuantity;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }
}

