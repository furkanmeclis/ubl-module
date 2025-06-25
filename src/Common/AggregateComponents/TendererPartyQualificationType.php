<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing TendererPartyQualificationType
 *
 *
 * XSD Type: TendererPartyQualificationType
 */
class TendererPartyQualificationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InterestedProcurementProjectLot[] $interestedProcurementProjectLot
     */
    private $interestedProcurementProjectLot = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainQualifyingParty $mainQualifyingParty
     */
    private $mainQualifyingParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalQualifyingParty[] $additionalQualifyingParty
     */
    private $additionalQualifyingParty = [
        
    ];

    /**
     * Adds as interestedProcurementProjectLot
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InterestedProcurementProjectLot $interestedProcurementProjectLot
     */
    public function addToInterestedProcurementProjectLot(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\InterestedProcurementProjectLot $interestedProcurementProjectLot)
    {
        $this->interestedProcurementProjectLot[] = $interestedProcurementProjectLot;
        return $this;
    }

    /**
     * isset interestedProcurementProjectLot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInterestedProcurementProjectLot($index)
    {
        return isset($this->interestedProcurementProjectLot[$index]);
    }

    /**
     * unset interestedProcurementProjectLot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInterestedProcurementProjectLot($index)
    {
        unset($this->interestedProcurementProjectLot[$index]);
    }

    /**
     * Gets as interestedProcurementProjectLot
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InterestedProcurementProjectLot[]
     */
    public function getInterestedProcurementProjectLot()
    {
        return $this->interestedProcurementProjectLot;
    }

    /**
     * Sets a new interestedProcurementProjectLot
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\InterestedProcurementProjectLot[] $interestedProcurementProjectLot
     * @return self
     */
    public function setInterestedProcurementProjectLot(?array $interestedProcurementProjectLot = null)
    {
        $this->interestedProcurementProjectLot = $interestedProcurementProjectLot;
        return $this;
    }

    /**
     * Gets as mainQualifyingParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainQualifyingParty
     */
    public function getMainQualifyingParty()
    {
        return $this->mainQualifyingParty;
    }

    /**
     * Sets a new mainQualifyingParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainQualifyingParty $mainQualifyingParty
     * @return self
     */
    public function setMainQualifyingParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MainQualifyingParty $mainQualifyingParty)
    {
        $this->mainQualifyingParty = $mainQualifyingParty;
        return $this;
    }

    /**
     * Adds as additionalQualifyingParty
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalQualifyingParty $additionalQualifyingParty
     */
    public function addToAdditionalQualifyingParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalQualifyingParty $additionalQualifyingParty)
    {
        $this->additionalQualifyingParty[] = $additionalQualifyingParty;
        return $this;
    }

    /**
     * isset additionalQualifyingParty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalQualifyingParty($index)
    {
        return isset($this->additionalQualifyingParty[$index]);
    }

    /**
     * unset additionalQualifyingParty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalQualifyingParty($index)
    {
        unset($this->additionalQualifyingParty[$index]);
    }

    /**
     * Gets as additionalQualifyingParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalQualifyingParty[]
     */
    public function getAdditionalQualifyingParty()
    {
        return $this->additionalQualifyingParty;
    }

    /**
     * Sets a new additionalQualifyingParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalQualifyingParty[] $additionalQualifyingParty
     * @return self
     */
    public function setAdditionalQualifyingParty(?array $additionalQualifyingParty = null)
    {
        $this->additionalQualifyingParty = $additionalQualifyingParty;
        return $this;
    }
}

