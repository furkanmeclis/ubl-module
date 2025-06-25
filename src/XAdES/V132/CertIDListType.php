<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing CertIDListType
 *
 *
 * XSD Type: CertIDListType
 */
class CertIDListType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\CertIDType[] $cert
     */
    private $cert = [
        
    ];

    /**
     * Adds as cert
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\CertIDType $cert
     */
    public function addToCert(\FurkanMeclis\GIB\UBL\XAdES\V132\CertIDType $cert)
    {
        $this->cert[] = $cert;
        return $this;
    }

    /**
     * isset cert
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCert($index)
    {
        return isset($this->cert[$index]);
    }

    /**
     * unset cert
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCert($index)
    {
        unset($this->cert[$index]);
    }

    /**
     * Gets as cert
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\CertIDType[]
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * Sets a new cert
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\CertIDType[] $cert
     * @return self
     */
    public function setCert(array $cert)
    {
        $this->cert = $cert;
        return $this;
    }
}

