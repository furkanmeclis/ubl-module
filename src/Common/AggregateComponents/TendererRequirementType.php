<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TendererRequirementType
 *
 *
 * XSD Type: TendererRequirementType
 */
class TendererRequirementType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TendererRequirementTypeCode $tendererRequirementTypeCode
     */
    private $tendererRequirementTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LegalReference $legalReference
     */
    private $legalReference = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence[] $suggestedEvidence
     */
    private $suggestedEvidence = [
        
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
     * Gets as tendererRequirementTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TendererRequirementTypeCode
     */
    public function getTendererRequirementTypeCode()
    {
        return $this->tendererRequirementTypeCode;
    }

    /**
     * Sets a new tendererRequirementTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TendererRequirementTypeCode $tendererRequirementTypeCode
     * @return self
     */
    public function setTendererRequirementTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TendererRequirementTypeCode $tendererRequirementTypeCode = null)
    {
        $this->tendererRequirementTypeCode = $tendererRequirementTypeCode;
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
     * Adds as suggestedEvidence
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence $suggestedEvidence
     */
    public function addToSuggestedEvidence(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence $suggestedEvidence)
    {
        $this->suggestedEvidence[] = $suggestedEvidence;
        return $this;
    }

    /**
     * isset suggestedEvidence
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuggestedEvidence($index)
    {
        return isset($this->suggestedEvidence[$index]);
    }

    /**
     * unset suggestedEvidence
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuggestedEvidence($index)
    {
        unset($this->suggestedEvidence[$index]);
    }

    /**
     * Gets as suggestedEvidence
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence[]
     */
    public function getSuggestedEvidence()
    {
        return $this->suggestedEvidence;
    }

    /**
     * Sets a new suggestedEvidence
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SuggestedEvidence[] $suggestedEvidence
     * @return self
     */
    public function setSuggestedEvidence(?array $suggestedEvidence = null)
    {
        $this->suggestedEvidence = $suggestedEvidence;
        return $this;
    }
}

