<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ResponseType
 *
 *
 * XSD Type: ResponseType
 */
class ResponseType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReferenceID $referenceID
     */
    private $referenceID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResponseCode $responseCode
     */
    private $responseCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as referenceID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReferenceID
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ReferenceID $referenceID
     * @return self
     */
    public function setReferenceID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ReferenceID $referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResponseCode
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ResponseCode $responseCode
     * @return self
     */
    public function setResponseCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ResponseCode $responseCode = null)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

