<?php

namespace FurkanMeclis\GIB\UBL\DigitalSignature;

/**
 * Class representing KeyInfoType
 *
 *
 * XSD Type: KeyInfoType
 */
class KeyInfoType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string[] $keyName
     */
    private $keyName = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\KeyValue[] $keyValue
     */
    private $keyValue = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\RetrievalMethod[] $retrievalMethod
     */
    private $retrievalMethod = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\X509Data[] $x509Data
     */
    private $x509Data = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\PGPData[] $pGPData
     */
    private $pGPData = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\DigitalSignature\SPKIData[] $sPKIData
     */
    private $sPKIData = [
        
    ];

    /**
     * @var string[] $mgmtData
     */
    private $mgmtData = [
        
    ];

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as keyName
     *
     * @return self
     * @param string $keyName
     */
    public function addToKeyName($keyName)
    {
        $this->keyName[] = $keyName;
        return $this;
    }

    /**
     * isset keyName
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeyName($index)
    {
        return isset($this->keyName[$index]);
    }

    /**
     * unset keyName
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeyName($index)
    {
        unset($this->keyName[$index]);
    }

    /**
     * Gets as keyName
     *
     * @return string[]
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Sets a new keyName
     *
     * @param string[] $keyName
     * @return self
     */
    public function setKeyName(?array $keyName = null)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Adds as keyValue
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\KeyValue $keyValue
     */
    public function addToKeyValue(\FurkanMeclis\GIB\UBL\DigitalSignature\KeyValue $keyValue)
    {
        $this->keyValue[] = $keyValue;
        return $this;
    }

    /**
     * isset keyValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeyValue($index)
    {
        return isset($this->keyValue[$index]);
    }

    /**
     * unset keyValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeyValue($index)
    {
        unset($this->keyValue[$index]);
    }

    /**
     * Gets as keyValue
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\KeyValue[]
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }

    /**
     * Sets a new keyValue
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\KeyValue[] $keyValue
     * @return self
     */
    public function setKeyValue(?array $keyValue = null)
    {
        $this->keyValue = $keyValue;
        return $this;
    }

    /**
     * Adds as retrievalMethod
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\RetrievalMethod $retrievalMethod
     */
    public function addToRetrievalMethod(\FurkanMeclis\GIB\UBL\DigitalSignature\RetrievalMethod $retrievalMethod)
    {
        $this->retrievalMethod[] = $retrievalMethod;
        return $this;
    }

    /**
     * isset retrievalMethod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetrievalMethod($index)
    {
        return isset($this->retrievalMethod[$index]);
    }

    /**
     * unset retrievalMethod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetrievalMethod($index)
    {
        unset($this->retrievalMethod[$index]);
    }

    /**
     * Gets as retrievalMethod
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\RetrievalMethod[]
     */
    public function getRetrievalMethod()
    {
        return $this->retrievalMethod;
    }

    /**
     * Sets a new retrievalMethod
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\RetrievalMethod[] $retrievalMethod
     * @return self
     */
    public function setRetrievalMethod(?array $retrievalMethod = null)
    {
        $this->retrievalMethod = $retrievalMethod;
        return $this;
    }

    /**
     * Adds as x509Data
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\X509Data $x509Data
     */
    public function addToX509Data(\FurkanMeclis\GIB\UBL\DigitalSignature\X509Data $x509Data)
    {
        $this->x509Data[] = $x509Data;
        return $this;
    }

    /**
     * isset x509Data
     *
     * @param int|string $index
     * @return bool
     */
    public function issetX509Data($index)
    {
        return isset($this->x509Data[$index]);
    }

    /**
     * unset x509Data
     *
     * @param int|string $index
     * @return void
     */
    public function unsetX509Data($index)
    {
        unset($this->x509Data[$index]);
    }

    /**
     * Gets as x509Data
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\X509Data[]
     */
    public function getX509Data()
    {
        return $this->x509Data;
    }

    /**
     * Sets a new x509Data
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\X509Data[] $x509Data
     * @return self
     */
    public function setX509Data(?array $x509Data = null)
    {
        $this->x509Data = $x509Data;
        return $this;
    }

    /**
     * Adds as pGPData
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\PGPData $pGPData
     */
    public function addToPGPData(\FurkanMeclis\GIB\UBL\DigitalSignature\PGPData $pGPData)
    {
        $this->pGPData[] = $pGPData;
        return $this;
    }

    /**
     * isset pGPData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPGPData($index)
    {
        return isset($this->pGPData[$index]);
    }

    /**
     * unset pGPData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPGPData($index)
    {
        unset($this->pGPData[$index]);
    }

    /**
     * Gets as pGPData
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\PGPData[]
     */
    public function getPGPData()
    {
        return $this->pGPData;
    }

    /**
     * Sets a new pGPData
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\PGPData[] $pGPData
     * @return self
     */
    public function setPGPData(?array $pGPData = null)
    {
        $this->pGPData = $pGPData;
        return $this;
    }

    /**
     * Adds as sPKIData
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\SPKIData $sPKIData
     */
    public function addToSPKIData(\FurkanMeclis\GIB\UBL\DigitalSignature\SPKIData $sPKIData)
    {
        $this->sPKIData[] = $sPKIData;
        return $this;
    }

    /**
     * isset sPKIData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSPKIData($index)
    {
        return isset($this->sPKIData[$index]);
    }

    /**
     * unset sPKIData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSPKIData($index)
    {
        unset($this->sPKIData[$index]);
    }

    /**
     * Gets as sPKIData
     *
     * @return \FurkanMeclis\GIB\UBL\DigitalSignature\SPKIData[]
     */
    public function getSPKIData()
    {
        return $this->sPKIData;
    }

    /**
     * Sets a new sPKIData
     *
     * @param \FurkanMeclis\GIB\UBL\DigitalSignature\SPKIData[] $sPKIData
     * @return self
     */
    public function setSPKIData(?array $sPKIData = null)
    {
        $this->sPKIData = $sPKIData;
        return $this;
    }

    /**
     * Adds as mgmtData
     *
     * @return self
     * @param string $mgmtData
     */
    public function addToMgmtData($mgmtData)
    {
        $this->mgmtData[] = $mgmtData;
        return $this;
    }

    /**
     * isset mgmtData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMgmtData($index)
    {
        return isset($this->mgmtData[$index]);
    }

    /**
     * unset mgmtData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMgmtData($index)
    {
        unset($this->mgmtData[$index]);
    }

    /**
     * Gets as mgmtData
     *
     * @return string[]
     */
    public function getMgmtData()
    {
        return $this->mgmtData;
    }

    /**
     * Sets a new mgmtData
     *
     * @param string[] $mgmtData
     * @return self
     */
    public function setMgmtData(?array $mgmtData = null)
    {
        $this->mgmtData = $mgmtData;
        return $this;
    }
}

