<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ProcessJustificationType
 *
 *
 * XSD Type: ProcessJustificationType
 */
class ProcessJustificationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousCancellationReasonCode $previousCancellationReasonCode
     */
    private $previousCancellationReasonCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessReasonCode $processReasonCode
     */
    private $processReasonCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessReason[] $processReason
     */
    private $processReason = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as previousCancellationReasonCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousCancellationReasonCode
     */
    public function getPreviousCancellationReasonCode()
    {
        return $this->previousCancellationReasonCode;
    }

    /**
     * Sets a new previousCancellationReasonCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousCancellationReasonCode $previousCancellationReasonCode
     * @return self
     */
    public function setPreviousCancellationReasonCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousCancellationReasonCode $previousCancellationReasonCode = null)
    {
        $this->previousCancellationReasonCode = $previousCancellationReasonCode;
        return $this;
    }

    /**
     * Gets as processReasonCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessReasonCode
     */
    public function getProcessReasonCode()
    {
        return $this->processReasonCode;
    }

    /**
     * Sets a new processReasonCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessReasonCode $processReasonCode
     * @return self
     */
    public function setProcessReasonCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessReasonCode $processReasonCode = null)
    {
        $this->processReasonCode = $processReasonCode;
        return $this;
    }

    /**
     * Adds as processReason
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessReason $processReason
     */
    public function addToProcessReason(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessReason $processReason)
    {
        $this->processReason[] = $processReason;
        return $this;
    }

    /**
     * isset processReason
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessReason($index)
    {
        return isset($this->processReason[$index]);
    }

    /**
     * unset processReason
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessReason($index)
    {
        unset($this->processReason[$index]);
    }

    /**
     * Gets as processReason
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessReason[]
     */
    public function getProcessReason()
    {
        return $this->processReason;
    }

    /**
     * Sets a new processReason
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessReason[] $processReason
     * @return self
     */
    public function setProcessReason(?array $processReason = null)
    {
        $this->processReason = $processReason;
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

