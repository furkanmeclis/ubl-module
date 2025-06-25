<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EconomicOperatorRoleType
 *
 *
 * XSD Type: EconomicOperatorRoleType
 */
class EconomicOperatorRoleType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleCode $roleCode
     */
    private $roleCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleDescription[] $roleDescription
     */
    private $roleDescription = [
        
    ];

    /**
     * Gets as roleCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleCode
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }

    /**
     * Sets a new roleCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleCode $roleCode
     * @return self
     */
    public function setRoleCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleCode $roleCode = null)
    {
        $this->roleCode = $roleCode;
        return $this;
    }

    /**
     * Adds as roleDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleDescription $roleDescription
     */
    public function addToRoleDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleDescription $roleDescription)
    {
        $this->roleDescription[] = $roleDescription;
        return $this;
    }

    /**
     * isset roleDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoleDescription($index)
    {
        return isset($this->roleDescription[$index]);
    }

    /**
     * unset roleDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoleDescription($index)
    {
        unset($this->roleDescription[$index]);
    }

    /**
     * Gets as roleDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleDescription[]
     */
    public function getRoleDescription()
    {
        return $this->roleDescription;
    }

    /**
     * Sets a new roleDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\RoleDescription[] $roleDescription
     * @return self
     */
    public function setRoleDescription(?array $roleDescription = null)
    {
        $this->roleDescription = $roleDescription;
        return $this;
    }
}

