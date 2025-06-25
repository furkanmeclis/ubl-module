<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ExternalReferenceType
 *
 *
 * XSD Type: ExternalReferenceType
 */
class ExternalReferenceType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * Gets as uRI
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\URI $uRI
     * @return self
     */
    public function setURI(\FurkanMeclis\GIB\UBL\Common\BasicComponents\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }
}

