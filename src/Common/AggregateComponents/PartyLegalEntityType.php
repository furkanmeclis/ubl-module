<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PartyLegalEntityType
 *
 *
 * XSD Type: PartyLegalEntityType
 */
class PartyLegalEntityType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationName $registrationName
     */
    private $registrationName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * @var \DateTime $registrationDate
     */
    private $registrationDate = null;

    /**
     * @var bool $soleProprietorshipIndicator
     */
    private $soleProprietorshipIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorporateStockAmount $corporateStockAmount
     */
    private $corporateStockAmount = null;

    /**
     * @var bool $fullyPaidSharesIndicator
     */
    private $fullyPaidSharesIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CorporateRegistrationScheme $corporateRegistrationScheme
     */
    private $corporateRegistrationScheme = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HeadOfficeParty $headOfficeParty
     */
    private $headOfficeParty = null;

    /**
     * Gets as registrationName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationName
     */
    public function getRegistrationName()
    {
        return $this->registrationName;
    }

    /**
     * Sets a new registrationName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationName $registrationName
     * @return self
     */
    public function setRegistrationName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RegistrationName $registrationName = null)
    {
        $this->registrationName = $registrationName;
        return $this;
    }

    /**
     * Gets as companyID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyID
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * Sets a new companyID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyID $companyID
     * @return self
     */
    public function setCompanyID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CompanyID $companyID = null)
    {
        $this->companyID = $companyID;
        return $this;
    }

    /**
     * Gets as registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Sets a new registrationDate
     *
     * @param \DateTime $registrationDate
     * @return self
     */
    public function setRegistrationDate(?\DateTime $registrationDate = null)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     * Gets as soleProprietorshipIndicator
     *
     * @return bool
     */
    public function getSoleProprietorshipIndicator()
    {
        return $this->soleProprietorshipIndicator;
    }

    /**
     * Sets a new soleProprietorshipIndicator
     *
     * @param bool $soleProprietorshipIndicator
     * @return self
     */
    public function setSoleProprietorshipIndicator($soleProprietorshipIndicator)
    {
        $this->soleProprietorshipIndicator = $soleProprietorshipIndicator;
        return $this;
    }

    /**
     * Gets as corporateStockAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorporateStockAmount
     */
    public function getCorporateStockAmount()
    {
        return $this->corporateStockAmount;
    }

    /**
     * Sets a new corporateStockAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CorporateStockAmount $corporateStockAmount
     * @return self
     */
    public function setCorporateStockAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CorporateStockAmount $corporateStockAmount = null)
    {
        $this->corporateStockAmount = $corporateStockAmount;
        return $this;
    }

    /**
     * Gets as fullyPaidSharesIndicator
     *
     * @return bool
     */
    public function getFullyPaidSharesIndicator()
    {
        return $this->fullyPaidSharesIndicator;
    }

    /**
     * Sets a new fullyPaidSharesIndicator
     *
     * @param bool $fullyPaidSharesIndicator
     * @return self
     */
    public function setFullyPaidSharesIndicator($fullyPaidSharesIndicator)
    {
        $this->fullyPaidSharesIndicator = $fullyPaidSharesIndicator;
        return $this;
    }

    /**
     * Gets as corporateRegistrationScheme
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CorporateRegistrationScheme
     */
    public function getCorporateRegistrationScheme()
    {
        return $this->corporateRegistrationScheme;
    }

    /**
     * Sets a new corporateRegistrationScheme
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CorporateRegistrationScheme $corporateRegistrationScheme
     * @return self
     */
    public function setCorporateRegistrationScheme(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CorporateRegistrationScheme $corporateRegistrationScheme = null)
    {
        $this->corporateRegistrationScheme = $corporateRegistrationScheme;
        return $this;
    }

    /**
     * Gets as headOfficeParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HeadOfficeParty
     */
    public function getHeadOfficeParty()
    {
        return $this->headOfficeParty;
    }

    /**
     * Sets a new headOfficeParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HeadOfficeParty $headOfficeParty
     * @return self
     */
    public function setHeadOfficeParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\HeadOfficeParty $headOfficeParty = null)
    {
        $this->headOfficeParty = $headOfficeParty;
        return $this;
    }
}

