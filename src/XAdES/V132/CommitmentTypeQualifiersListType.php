<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing CommitmentTypeQualifiersListType
 *
 *
 * XSD Type: CommitmentTypeQualifiersListType
 */
class CommitmentTypeQualifiersListType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $commitmentTypeQualifier
     */
    private $commitmentTypeQualifier = [
        
    ];

    /**
     * Adds as commitmentTypeQualifier
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $commitmentTypeQualifier
     */
    public function addToCommitmentTypeQualifier(\FurkanMeclis\GIB\UBL\XAdES\V132\AnyType $commitmentTypeQualifier)
    {
        $this->commitmentTypeQualifier[] = $commitmentTypeQualifier;
        return $this;
    }

    /**
     * isset commitmentTypeQualifier
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommitmentTypeQualifier($index)
    {
        return isset($this->commitmentTypeQualifier[$index]);
    }

    /**
     * unset commitmentTypeQualifier
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommitmentTypeQualifier($index)
    {
        unset($this->commitmentTypeQualifier[$index]);
    }

    /**
     * Gets as commitmentTypeQualifier
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[]
     */
    public function getCommitmentTypeQualifier()
    {
        return $this->commitmentTypeQualifier;
    }

    /**
     * Sets a new commitmentTypeQualifier
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\AnyType[] $commitmentTypeQualifier
     * @return self
     */
    public function setCommitmentTypeQualifier(?array $commitmentTypeQualifier = null)
    {
        $this->commitmentTypeQualifier = $commitmentTypeQualifier;
        return $this;
    }
}

