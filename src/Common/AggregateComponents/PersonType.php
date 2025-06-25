<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing PersonType
 *
 *
 * XSD Type: PersonType
 */
class PersonType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FirstName $firstName
     */
    private $firstName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FamilyName $familyName
     */
    private $familyName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Title $title
     */
    private $title = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MiddleName $middleName
     */
    private $middleName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NameSuffix $nameSuffix
     */
    private $nameSuffix = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NationalityID $nationalityID
     */
    private $nationalityID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialAccount $financialAccount
     */
    private $financialAccount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IdentityDocumentReference $identityDocumentReference
     */
    private $identityDocumentReference = null;

    /**
     * Gets as firstName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FirstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FirstName $firstName
     * @return self
     */
    public function setFirstName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\FirstName $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as familyName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FamilyName
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Sets a new familyName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FamilyName $familyName
     * @return self
     */
    public function setFamilyName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\FamilyName $familyName)
    {
        $this->familyName = $familyName;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Title $title
     * @return self
     */
    public function setTitle(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Title $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as middleName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MiddleName
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MiddleName $middleName
     * @return self
     */
    public function setMiddleName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MiddleName $middleName = null)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as nameSuffix
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NameSuffix
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Sets a new nameSuffix
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NameSuffix $nameSuffix
     * @return self
     */
    public function setNameSuffix(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\NameSuffix $nameSuffix = null)
    {
        $this->nameSuffix = $nameSuffix;
        return $this;
    }

    /**
     * Gets as nationalityID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NationalityID
     */
    public function getNationalityID()
    {
        return $this->nationalityID;
    }

    /**
     * Sets a new nationalityID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NationalityID $nationalityID
     * @return self
     */
    public function setNationalityID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\NationalityID $nationalityID = null)
    {
        $this->nationalityID = $nationalityID;
        return $this;
    }

    /**
     * Gets as financialAccount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialAccount
     */
    public function getFinancialAccount()
    {
        return $this->financialAccount;
    }

    /**
     * Sets a new financialAccount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialAccount $financialAccount
     * @return self
     */
    public function setFinancialAccount(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialAccount $financialAccount = null)
    {
        $this->financialAccount = $financialAccount;
        return $this;
    }

    /**
     * Gets as identityDocumentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IdentityDocumentReference
     */
    public function getIdentityDocumentReference()
    {
        return $this->identityDocumentReference;
    }

    /**
     * Sets a new identityDocumentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\IdentityDocumentReference $identityDocumentReference
     * @return self
     */
    public function setIdentityDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\IdentityDocumentReference $identityDocumentReference = null)
    {
        $this->identityDocumentReference = $identityDocumentReference;
        return $this;
    }
}

