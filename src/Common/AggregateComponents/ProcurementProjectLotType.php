<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ProcurementProjectLotType
 *
 *
 * XSD Type: ProcurementProjectLotType
 */
class ProcurementProjectLotType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderingTerms $tenderingTerms
     */
    private $tenderingTerms = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProject $procurementProject
     */
    private $procurementProject = null;

    /**
     * Gets as iD
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     * @return self
     */
    public function setID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as tenderingTerms
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderingTerms
     */
    public function getTenderingTerms()
    {
        return $this->tenderingTerms;
    }

    /**
     * Sets a new tenderingTerms
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderingTerms $tenderingTerms
     * @return self
     */
    public function setTenderingTerms(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\TenderingTerms $tenderingTerms = null)
    {
        $this->tenderingTerms = $tenderingTerms;
        return $this;
    }

    /**
     * Gets as procurementProject
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProject
     */
    public function getProcurementProject()
    {
        return $this->procurementProject;
    }

    /**
     * Sets a new procurementProject
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProject $procurementProject
     * @return self
     */
    public function setProcurementProject(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProject $procurementProject = null)
    {
        $this->procurementProject = $procurementProject;
        return $this;
    }
}

