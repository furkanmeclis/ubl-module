<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CreditAccountType
 *
 *
 * XSD Type: CreditAccountType
 */
class CreditAccountType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountID $accountID
     */
    private $accountID = null;

    /**
     * Gets as accountID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountID
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountID $accountID
     * @return self
     */
    public function setAccountID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\AccountID $accountID)
    {
        $this->accountID = $accountID;
        return $this;
    }
}

