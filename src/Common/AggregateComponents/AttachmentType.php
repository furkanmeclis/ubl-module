<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing AttachmentType
 *
 *
 * XSD Type: AttachmentType
 */
class AttachmentType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     */
    private $embeddedDocumentBinaryObject = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExternalReference $externalReference
     */
    private $externalReference = null;

    /**
     * Gets as embeddedDocumentBinaryObject
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmbeddedDocumentBinaryObject
     */
    public function getEmbeddedDocumentBinaryObject()
    {
        return $this->embeddedDocumentBinaryObject;
    }

    /**
     * Sets a new embeddedDocumentBinaryObject
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     * @return self
     */
    public function setEmbeddedDocumentBinaryObject(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject = null)
    {
        $this->embeddedDocumentBinaryObject = $embeddedDocumentBinaryObject;
        return $this;
    }

    /**
     * Gets as externalReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExternalReference
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Sets a new externalReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExternalReference $externalReference
     * @return self
     */
    public function setExternalReference(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ExternalReference $externalReference = null)
    {
        $this->externalReference = $externalReference;
        return $this;
    }
}

