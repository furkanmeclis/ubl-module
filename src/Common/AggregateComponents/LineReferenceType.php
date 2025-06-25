<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing LineReferenceType
 *
 *
 * XSD Type: LineReferenceType
 */
class LineReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineID $lineID
     */
    private $lineID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * Gets as lineID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineID
     */
    public function getLineID()
    {
        return $this->lineID;
    }

    /**
     * Sets a new lineID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineID $lineID
     * @return self
     */
    public function setLineID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\LineID $lineID)
    {
        $this->lineID = $lineID;
        return $this;
    }

    /**
     * Gets as lineStatusCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LineStatusCode $lineStatusCode = null)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }
}

