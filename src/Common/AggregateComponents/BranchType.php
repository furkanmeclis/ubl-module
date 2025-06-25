<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing BranchType
 *
 *
 * XSD Type: BranchType
 */
class BranchType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialInstitution $financialInstitution
     */
    private $financialInstitution = null;

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
     * Gets as financialInstitution
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialInstitution
     */
    public function getFinancialInstitution()
    {
        return $this->financialInstitution;
    }

    /**
     * Sets a new financialInstitution
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialInstitution $financialInstitution
     * @return self
     */
    public function setFinancialInstitution(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FinancialInstitution $financialInstitution = null)
    {
        $this->financialInstitution = $financialInstitution;
        return $this;
    }
}

