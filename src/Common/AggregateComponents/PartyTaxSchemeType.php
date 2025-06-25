<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PartyTaxSchemeType
 *
 *
 * XSD Type: PartyTaxSchemeType
 */
class PartyTaxSchemeType
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
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxScheme $taxScheme
     */
    private $taxScheme = null;

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
     * Gets as taxScheme
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }
}

