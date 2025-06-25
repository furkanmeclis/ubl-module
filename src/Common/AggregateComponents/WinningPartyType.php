<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing WinningPartyType
 *
 *
 * XSD Type: WinningPartyType
 */
class WinningPartyType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Rank $rank
     */
    private $rank = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * Gets as rank
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Rank
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Sets a new rank
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Rank $rank
     * @return self
     */
    public function setRank(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Rank $rank = null)
    {
        $this->rank = $rank;
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
    public function setParty(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }
}

