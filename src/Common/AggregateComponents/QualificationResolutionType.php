<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing QualificationResolutionType
 *
 *
 * XSD Type: QualificationResolutionType
 */
class QualificationResolutionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdmissionCode $admissionCode
     */
    private $admissionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExclusionReason[] $exclusionReason
     */
    private $exclusionReason = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Resolution[] $resolution
     */
    private $resolution = [
        
    ];

    /**
     * @var \DateTime $resolutionDate
     */
    private $resolutionDate = null;

    /**
     * @var \DateTime $resolutionTime
     */
    private $resolutionTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot $procurementProjectLot
     */
    private $procurementProjectLot = null;

    /**
     * Gets as admissionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdmissionCode
     */
    public function getAdmissionCode()
    {
        return $this->admissionCode;
    }

    /**
     * Sets a new admissionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdmissionCode $admissionCode
     * @return self
     */
    public function setAdmissionCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\AdmissionCode $admissionCode)
    {
        $this->admissionCode = $admissionCode;
        return $this;
    }

    /**
     * Adds as exclusionReason
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExclusionReason $exclusionReason
     */
    public function addToExclusionReason(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ExclusionReason $exclusionReason)
    {
        $this->exclusionReason[] = $exclusionReason;
        return $this;
    }

    /**
     * isset exclusionReason
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExclusionReason($index)
    {
        return isset($this->exclusionReason[$index]);
    }

    /**
     * unset exclusionReason
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExclusionReason($index)
    {
        unset($this->exclusionReason[$index]);
    }

    /**
     * Gets as exclusionReason
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExclusionReason[]
     */
    public function getExclusionReason()
    {
        return $this->exclusionReason;
    }

    /**
     * Sets a new exclusionReason
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExclusionReason[] $exclusionReason
     * @return self
     */
    public function setExclusionReason(?array $exclusionReason = null)
    {
        $this->exclusionReason = $exclusionReason;
        return $this;
    }

    /**
     * Adds as resolution
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Resolution $resolution
     */
    public function addToResolution(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Resolution $resolution)
    {
        $this->resolution[] = $resolution;
        return $this;
    }

    /**
     * isset resolution
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResolution($index)
    {
        return isset($this->resolution[$index]);
    }

    /**
     * unset resolution
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResolution($index)
    {
        unset($this->resolution[$index]);
    }

    /**
     * Gets as resolution
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Resolution[]
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Resolution[] $resolution
     * @return self
     */
    public function setResolution(?array $resolution = null)
    {
        $this->resolution = $resolution;
        return $this;
    }

    /**
     * Gets as resolutionDate
     *
     * @return \DateTime
     */
    public function getResolutionDate()
    {
        return $this->resolutionDate;
    }

    /**
     * Sets a new resolutionDate
     *
     * @param \DateTime $resolutionDate
     * @return self
     */
    public function setResolutionDate(\DateTime $resolutionDate)
    {
        $this->resolutionDate = $resolutionDate;
        return $this;
    }

    /**
     * Gets as resolutionTime
     *
     * @return \DateTime
     */
    public function getResolutionTime()
    {
        return $this->resolutionTime;
    }

    /**
     * Sets a new resolutionTime
     *
     * @param \DateTime $resolutionTime
     * @return self
     */
    public function setResolutionTime(?\DateTime $resolutionTime = null)
    {
        $this->resolutionTime = $resolutionTime;
        return $this;
    }

    /**
     * Gets as procurementProjectLot
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ProcurementProjectLot $procurementProjectLot = null)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }
}

