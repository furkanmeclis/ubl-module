<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ShareholderPartyType
 *
 *
 * XSD Type: ShareholderPartyType
 */
class ShareholderPartyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartecipationPercent $partecipationPercent
     */
    private $partecipationPercent = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * Gets as partecipationPercent
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartecipationPercent
     */
    public function getPartecipationPercent()
    {
        return $this->partecipationPercent;
    }

    /**
     * Sets a new partecipationPercent
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PartecipationPercent $partecipationPercent
     * @return self
     */
    public function setPartecipationPercent(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PartecipationPercent $partecipationPercent = null)
    {
        $this->partecipationPercent = $partecipationPercent;
        return $this;
    }

    /**
     * Gets as party
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     * @return self
     */
    public function setParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party = null)
    {
        $this->party = $party;
        return $this;
    }
}

