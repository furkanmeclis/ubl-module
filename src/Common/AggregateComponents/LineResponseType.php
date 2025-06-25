<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing LineResponseType
 *
 *
 * XSD Type: LineResponseType
 */
class LineResponseType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineReference $lineReference
     */
    private $lineReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Response[] $response
     */
    private $response = [
        
    ];

    /**
     * Gets as lineReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineReference
     */
    public function getLineReference()
    {
        return $this->lineReference;
    }

    /**
     * Sets a new lineReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineReference $lineReference
     * @return self
     */
    public function setLineReference(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\LineReference $lineReference)
    {
        $this->lineReference = $lineReference;
        return $this;
    }

    /**
     * Adds as response
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Response $response
     */
    public function addToResponse(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Response $response)
    {
        $this->response[] = $response;
        return $this;
    }

    /**
     * isset response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponse($index)
    {
        return isset($this->response[$index]);
    }

    /**
     * unset response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponse($index)
    {
        unset($this->response[$index]);
    }

    /**
     * Gets as response
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Response[]
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Response[] $response
     * @return self
     */
    public function setResponse(array $response)
    {
        $this->response = $response;
        return $this;
    }
}

