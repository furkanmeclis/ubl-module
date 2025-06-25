<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ContractExecutionRequirementType
 *
 *
 * XSD Type: ContractExecutionRequirementType
 */
class ContractExecutionRequirementType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExecutionRequirementCode $executionRequirementCode
     */
    private $executionRequirementCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
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
     * Gets as executionRequirementCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExecutionRequirementCode
     */
    public function getExecutionRequirementCode()
    {
        return $this->executionRequirementCode;
    }

    /**
     * Sets a new executionRequirementCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExecutionRequirementCode $executionRequirementCode
     * @return self
     */
    public function setExecutionRequirementCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ExecutionRequirementCode $executionRequirementCode = null)
    {
        $this->executionRequirementCode = $executionRequirementCode;
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

