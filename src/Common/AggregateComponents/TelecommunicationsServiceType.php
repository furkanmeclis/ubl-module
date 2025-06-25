<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TelecommunicationsServiceType
 *
 *
 * XSD Type: TelecommunicationsServiceType
 */
class TelecommunicationsServiceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \DateTime $callDate
     */
    private $callDate = null;

    /**
     * @var \DateTime $callTime
     */
    private $callTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceNumberCalled $serviceNumberCalled
     */
    private $serviceNumberCalled = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCategory $telecommunicationsServiceCategory
     */
    private $telecommunicationsServiceCategory = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode
     */
    private $telecommunicationsServiceCategoryCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MovieTitle $movieTitle
     */
    private $movieTitle = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoamingPartnerName $roamingPartnerName
     */
    private $roamingPartnerName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PayPerView $payPerView
     */
    private $payPerView = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCall $telecommunicationsServiceCall
     */
    private $telecommunicationsServiceCall = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode
     */
    private $telecommunicationsServiceCallCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CallBaseAmount $callBaseAmount
     */
    private $callBaseAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CallExtensionAmount $callExtensionAmount
     */
    private $callExtensionAmount = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Price $price
     */
    private $price = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Country $country
     */
    private $country = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExchangeRate[] $exchangeRate
     */
    private $exchangeRate = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallDuty[] $callDuty
     */
    private $callDuty = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TimeDuty[] $timeDuty
     */
    private $timeDuty = [
        
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
     * Gets as callDate
     *
     * @return \DateTime
     */
    public function getCallDate()
    {
        return $this->callDate;
    }

    /**
     * Sets a new callDate
     *
     * @param \DateTime $callDate
     * @return self
     */
    public function setCallDate(\DateTime $callDate)
    {
        $this->callDate = $callDate;
        return $this;
    }

    /**
     * Gets as callTime
     *
     * @return \DateTime
     */
    public function getCallTime()
    {
        return $this->callTime;
    }

    /**
     * Sets a new callTime
     *
     * @param \DateTime $callTime
     * @return self
     */
    public function setCallTime(\DateTime $callTime)
    {
        $this->callTime = $callTime;
        return $this;
    }

    /**
     * Gets as serviceNumberCalled
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceNumberCalled
     */
    public function getServiceNumberCalled()
    {
        return $this->serviceNumberCalled;
    }

    /**
     * Sets a new serviceNumberCalled
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceNumberCalled $serviceNumberCalled
     * @return self
     */
    public function setServiceNumberCalled(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ServiceNumberCalled $serviceNumberCalled)
    {
        $this->serviceNumberCalled = $serviceNumberCalled;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCategory
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCategory
     */
    public function getTelecommunicationsServiceCategory()
    {
        return $this->telecommunicationsServiceCategory;
    }

    /**
     * Sets a new telecommunicationsServiceCategory
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCategory $telecommunicationsServiceCategory
     * @return self
     */
    public function setTelecommunicationsServiceCategory(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCategory $telecommunicationsServiceCategory = null)
    {
        $this->telecommunicationsServiceCategory = $telecommunicationsServiceCategory;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCategoryCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCategoryCode
     */
    public function getTelecommunicationsServiceCategoryCode()
    {
        return $this->telecommunicationsServiceCategoryCode;
    }

    /**
     * Sets a new telecommunicationsServiceCategoryCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode
     * @return self
     */
    public function setTelecommunicationsServiceCategoryCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode = null)
    {
        $this->telecommunicationsServiceCategoryCode = $telecommunicationsServiceCategoryCode;
        return $this;
    }

    /**
     * Gets as movieTitle
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MovieTitle
     */
    public function getMovieTitle()
    {
        return $this->movieTitle;
    }

    /**
     * Sets a new movieTitle
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MovieTitle $movieTitle
     * @return self
     */
    public function setMovieTitle(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MovieTitle $movieTitle = null)
    {
        $this->movieTitle = $movieTitle;
        return $this;
    }

    /**
     * Gets as roamingPartnerName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoamingPartnerName
     */
    public function getRoamingPartnerName()
    {
        return $this->roamingPartnerName;
    }

    /**
     * Sets a new roamingPartnerName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoamingPartnerName $roamingPartnerName
     * @return self
     */
    public function setRoamingPartnerName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RoamingPartnerName $roamingPartnerName = null)
    {
        $this->roamingPartnerName = $roamingPartnerName;
        return $this;
    }

    /**
     * Gets as payPerView
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PayPerView
     */
    public function getPayPerView()
    {
        return $this->payPerView;
    }

    /**
     * Sets a new payPerView
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PayPerView $payPerView
     * @return self
     */
    public function setPayPerView(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PayPerView $payPerView = null)
    {
        $this->payPerView = $payPerView;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCall
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCall
     */
    public function getTelecommunicationsServiceCall()
    {
        return $this->telecommunicationsServiceCall;
    }

    /**
     * Sets a new telecommunicationsServiceCall
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCall $telecommunicationsServiceCall
     * @return self
     */
    public function setTelecommunicationsServiceCall(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCall $telecommunicationsServiceCall = null)
    {
        $this->telecommunicationsServiceCall = $telecommunicationsServiceCall;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCallCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCallCode
     */
    public function getTelecommunicationsServiceCallCode()
    {
        return $this->telecommunicationsServiceCallCode;
    }

    /**
     * Sets a new telecommunicationsServiceCallCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode
     * @return self
     */
    public function setTelecommunicationsServiceCallCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode = null)
    {
        $this->telecommunicationsServiceCallCode = $telecommunicationsServiceCallCode;
        return $this;
    }

    /**
     * Gets as callBaseAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CallBaseAmount
     */
    public function getCallBaseAmount()
    {
        return $this->callBaseAmount;
    }

    /**
     * Sets a new callBaseAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CallBaseAmount $callBaseAmount
     * @return self
     */
    public function setCallBaseAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CallBaseAmount $callBaseAmount = null)
    {
        $this->callBaseAmount = $callBaseAmount;
        return $this;
    }

    /**
     * Gets as callExtensionAmount
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CallExtensionAmount
     */
    public function getCallExtensionAmount()
    {
        return $this->callExtensionAmount;
    }

    /**
     * Sets a new callExtensionAmount
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CallExtensionAmount $callExtensionAmount
     * @return self
     */
    public function setCallExtensionAmount(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CallExtensionAmount $callExtensionAmount = null)
    {
        $this->callExtensionAmount = $callExtensionAmount;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Price $price
     * @return self
     */
    public function setPrice(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Price $price = null)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Country $country
     * @return self
     */
    public function setCountry(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Country $country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Adds as exchangeRate
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExchangeRate $exchangeRate
     */
    public function addToExchangeRate(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate[] = $exchangeRate;
        return $this;
    }

    /**
     * isset exchangeRate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExchangeRate($index)
    {
        return isset($this->exchangeRate[$index]);
    }

    /**
     * unset exchangeRate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExchangeRate($index)
    {
        unset($this->exchangeRate[$index]);
    }

    /**
     * Gets as exchangeRate
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExchangeRate[]
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExchangeRate[] $exchangeRate
     * @return self
     */
    public function setExchangeRate(?array $exchangeRate = null)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as callDuty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallDuty $callDuty
     */
    public function addToCallDuty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallDuty $callDuty)
    {
        $this->callDuty[] = $callDuty;
        return $this;
    }

    /**
     * isset callDuty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCallDuty($index)
    {
        return isset($this->callDuty[$index]);
    }

    /**
     * unset callDuty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCallDuty($index)
    {
        unset($this->callDuty[$index]);
    }

    /**
     * Gets as callDuty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallDuty[]
     */
    public function getCallDuty()
    {
        return $this->callDuty;
    }

    /**
     * Sets a new callDuty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CallDuty[] $callDuty
     * @return self
     */
    public function setCallDuty(?array $callDuty = null)
    {
        $this->callDuty = $callDuty;
        return $this;
    }

    /**
     * Adds as timeDuty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TimeDuty $timeDuty
     */
    public function addToTimeDuty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TimeDuty $timeDuty)
    {
        $this->timeDuty[] = $timeDuty;
        return $this;
    }

    /**
     * isset timeDuty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimeDuty($index)
    {
        return isset($this->timeDuty[$index]);
    }

    /**
     * unset timeDuty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimeDuty($index)
    {
        unset($this->timeDuty[$index]);
    }

    /**
     * Gets as timeDuty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TimeDuty[]
     */
    public function getTimeDuty()
    {
        return $this->timeDuty;
    }

    /**
     * Sets a new timeDuty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TimeDuty[] $timeDuty
     * @return self
     */
    public function setTimeDuty(?array $timeDuty = null)
    {
        $this->timeDuty = $timeDuty;
        return $this;
    }
}

