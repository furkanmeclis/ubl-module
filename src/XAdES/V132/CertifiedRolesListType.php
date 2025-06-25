<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing CertifiedRolesListType
 *
 *
 * XSD Type: CertifiedRolesListType
 */
class CertifiedRolesListType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType[] $certifiedRole
     */
    private $certifiedRole = [
        
    ];

    /**
     * Adds as certifiedRole
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType $certifiedRole
     */
    public function addToCertifiedRole(\FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType $certifiedRole)
    {
        $this->certifiedRole[] = $certifiedRole;
        return $this;
    }

    /**
     * isset certifiedRole
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertifiedRole($index)
    {
        return isset($this->certifiedRole[$index]);
    }

    /**
     * unset certifiedRole
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertifiedRole($index)
    {
        unset($this->certifiedRole[$index]);
    }

    /**
     * Gets as certifiedRole
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType[]
     */
    public function getCertifiedRole()
    {
        return $this->certifiedRole;
    }

    /**
     * Sets a new certifiedRole
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\EncapsulatedPKIDataType[] $certifiedRole
     * @return self
     */
    public function setCertifiedRole(array $certifiedRole)
    {
        $this->certifiedRole = $certifiedRole;
        return $this;
    }
}

