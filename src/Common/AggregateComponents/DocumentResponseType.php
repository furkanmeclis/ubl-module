<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DocumentResponseType
 *
 *
 * XSD Type: DocumentResponseType
 */
class DocumentResponseType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Response $response
     */
    private $response = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineResponse[] $lineResponse
     */
    private $lineResponse = [
        
    ];

    /**
     * Gets as response
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Response $response
     * @return self
     */
    public function setResponse(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Response $response)
    {
        $this->response = $response;
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
    public function setDocumentReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as lineResponse
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineResponse $lineResponse
     */
    public function addToLineResponse(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineResponse $lineResponse)
    {
        $this->lineResponse[] = $lineResponse;
        return $this;
    }

    /**
     * isset lineResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineResponse($index)
    {
        return isset($this->lineResponse[$index]);
    }

    /**
     * unset lineResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineResponse($index)
    {
        unset($this->lineResponse[$index]);
    }

    /**
     * Gets as lineResponse
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineResponse[]
     */
    public function getLineResponse()
    {
        return $this->lineResponse;
    }

    /**
     * Sets a new lineResponse
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineResponse[] $lineResponse
     * @return self
     */
    public function setLineResponse(?array $lineResponse = null)
    {
        $this->lineResponse = $lineResponse;
        return $this;
    }
}

