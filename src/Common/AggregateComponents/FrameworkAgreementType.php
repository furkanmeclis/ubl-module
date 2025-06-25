<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing FrameworkAgreementType
 *
 *
 * XSD Type: FrameworkAgreementType
 */
class FrameworkAgreementType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpectedOperatorQuantity $expectedOperatorQuantity
     */
    private $expectedOperatorQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumOperatorQuantity $maximumOperatorQuantity
     */
    private $maximumOperatorQuantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Justification[] $justification
     */
    private $justification = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Frequency[] $frequency
     */
    private $frequency = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DurationPeriod $durationPeriod
     */
    private $durationPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     */
    private $subsequentProcessTenderRequirement = [
        
    ];

    /**
     * Gets as expectedOperatorQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpectedOperatorQuantity
     */
    public function getExpectedOperatorQuantity()
    {
        return $this->expectedOperatorQuantity;
    }

    /**
     * Sets a new expectedOperatorQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpectedOperatorQuantity $expectedOperatorQuantity
     * @return self
     */
    public function setExpectedOperatorQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ExpectedOperatorQuantity $expectedOperatorQuantity = null)
    {
        $this->expectedOperatorQuantity = $expectedOperatorQuantity;
        return $this;
    }

    /**
     * Gets as maximumOperatorQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumOperatorQuantity
     */
    public function getMaximumOperatorQuantity()
    {
        return $this->maximumOperatorQuantity;
    }

    /**
     * Sets a new maximumOperatorQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumOperatorQuantity $maximumOperatorQuantity
     * @return self
     */
    public function setMaximumOperatorQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumOperatorQuantity $maximumOperatorQuantity = null)
    {
        $this->maximumOperatorQuantity = $maximumOperatorQuantity;
        return $this;
    }

    /**
     * Adds as justification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Justification $justification
     */
    public function addToJustification(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Justification $justification)
    {
        $this->justification[] = $justification;
        return $this;
    }

    /**
     * isset justification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJustification($index)
    {
        return isset($this->justification[$index]);
    }

    /**
     * unset justification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJustification($index)
    {
        unset($this->justification[$index]);
    }

    /**
     * Gets as justification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Justification[]
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Sets a new justification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Justification[] $justification
     * @return self
     */
    public function setJustification(?array $justification = null)
    {
        $this->justification = $justification;
        return $this;
    }

    /**
     * Adds as frequency
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Frequency $frequency
     */
    public function addToFrequency(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Frequency $frequency)
    {
        $this->frequency[] = $frequency;
        return $this;
    }

    /**
     * isset frequency
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFrequency($index)
    {
        return isset($this->frequency[$index]);
    }

    /**
     * unset frequency
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFrequency($index)
    {
        unset($this->frequency[$index]);
    }

    /**
     * Gets as frequency
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Frequency[]
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Frequency[] $frequency
     * @return self
     */
    public function setFrequency(?array $frequency = null)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as durationPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DurationPeriod
     */
    public function getDurationPeriod()
    {
        return $this->durationPeriod;
    }

    /**
     * Sets a new durationPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\DurationPeriod $durationPeriod
     * @return self
     */
    public function setDurationPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\DurationPeriod $durationPeriod = null)
    {
        $this->durationPeriod = $durationPeriod;
        return $this;
    }

    /**
     * Adds as subsequentProcessTenderRequirement
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement
     */
    public function addToSubsequentProcessTenderRequirement(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement)
    {
        $this->subsequentProcessTenderRequirement[] = $subsequentProcessTenderRequirement;
        return $this;
    }

    /**
     * isset subsequentProcessTenderRequirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubsequentProcessTenderRequirement($index)
    {
        return isset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * unset subsequentProcessTenderRequirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubsequentProcessTenderRequirement($index)
    {
        unset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * Gets as subsequentProcessTenderRequirement
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubsequentProcessTenderRequirement[]
     */
    public function getSubsequentProcessTenderRequirement()
    {
        return $this->subsequentProcessTenderRequirement;
    }

    /**
     * Sets a new subsequentProcessTenderRequirement
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     * @return self
     */
    public function setSubsequentProcessTenderRequirement(?array $subsequentProcessTenderRequirement = null)
    {
        $this->subsequentProcessTenderRequirement = $subsequentProcessTenderRequirement;
        return $this;
    }
}

