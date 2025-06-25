<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing DocumentDistributionType
 *
 *
 * XSD Type: DocumentDistributionType
 */
class DocumentDistributionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrintQualifier $printQualifier
     */
    private $printQualifier = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumCopiesNumeric $maximumCopiesNumeric
     */
    private $maximumCopiesNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Party $party
     */
    private $party = null;

    /**
     * Gets as printQualifier
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrintQualifier
     */
    public function getPrintQualifier()
    {
        return $this->printQualifier;
    }

    /**
     * Sets a new printQualifier
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PrintQualifier $printQualifier
     * @return self
     */
    public function setPrintQualifier(\FurkanMeclis\GIB\UBL\Common\BasicComponents\PrintQualifier $printQualifier)
    {
        $this->printQualifier = $printQualifier;
        return $this;
    }

    /**
     * Gets as maximumCopiesNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumCopiesNumeric
     */
    public function getMaximumCopiesNumeric()
    {
        return $this->maximumCopiesNumeric;
    }

    /**
     * Sets a new maximumCopiesNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumCopiesNumeric $maximumCopiesNumeric
     * @return self
     */
    public function setMaximumCopiesNumeric(\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumCopiesNumeric $maximumCopiesNumeric)
    {
        $this->maximumCopiesNumeric = $maximumCopiesNumeric;
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

