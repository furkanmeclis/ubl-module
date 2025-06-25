<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing RegulationType
 *
 *
 * XSD Type: RegulationType
 */
class RegulationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LegalReference $legalReference
     */
    private $legalReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OntologyURI $ontologyURI
     */
    private $ontologyURI = null;

    /**
     * Gets as name
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as legalReference
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LegalReference
     */
    public function getLegalReference()
    {
        return $this->legalReference;
    }

    /**
     * Sets a new legalReference
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LegalReference $legalReference
     * @return self
     */
    public function setLegalReference(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LegalReference $legalReference = null)
    {
        $this->legalReference = $legalReference;
        return $this;
    }

    /**
     * Gets as ontologyURI
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OntologyURI
     */
    public function getOntologyURI()
    {
        return $this->ontologyURI;
    }

    /**
     * Sets a new ontologyURI
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OntologyURI $ontologyURI
     * @return self
     */
    public function setOntologyURI(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\OntologyURI $ontologyURI = null)
    {
        $this->ontologyURI = $ontologyURI;
        return $this;
    }
}

