<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DeclarationType
 *
 *
 * XSD Type: DeclarationType
 */
class DeclarationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclarationTypeCode $declarationTypeCode
     */
    private $declarationTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied[] $evidenceSupplied
     */
    private $evidenceSupplied = [
        
    ];

    /**
     * Adds as name
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    public function addToName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name[] $name
     * @return self
     */
    public function setName(?array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as declarationTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclarationTypeCode
     */
    public function getDeclarationTypeCode()
    {
        return $this->declarationTypeCode;
    }

    /**
     * Sets a new declarationTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclarationTypeCode $declarationTypeCode
     * @return self
     */
    public function setDeclarationTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DeclarationTypeCode $declarationTypeCode = null)
    {
        $this->declarationTypeCode = $declarationTypeCode;
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

    /**
     * Adds as evidenceSupplied
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied $evidenceSupplied
     */
    public function addToEvidenceSupplied(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied $evidenceSupplied)
    {
        $this->evidenceSupplied[] = $evidenceSupplied;
        return $this;
    }

    /**
     * isset evidenceSupplied
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceSupplied($index)
    {
        return isset($this->evidenceSupplied[$index]);
    }

    /**
     * unset evidenceSupplied
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceSupplied($index)
    {
        unset($this->evidenceSupplied[$index]);
    }

    /**
     * Gets as evidenceSupplied
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied[]
     */
    public function getEvidenceSupplied()
    {
        return $this->evidenceSupplied;
    }

    /**
     * Sets a new evidenceSupplied
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EvidenceSupplied[] $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(?array $evidenceSupplied = null)
    {
        $this->evidenceSupplied = $evidenceSupplied;
        return $this;
    }
}

