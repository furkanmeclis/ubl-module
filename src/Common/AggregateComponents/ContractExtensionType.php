<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ContractExtensionType
 *
 *
 * XSD Type: ContractExtensionType
 */
class ContractExtensionType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\OptionsDescription[] $optionsDescription
     */
    private $optionsDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumNumberNumeric $minimumNumberNumeric
     */
    private $minimumNumberNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumNumberNumeric $maximumNumberNumeric
     */
    private $maximumNumberNumeric = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OptionValidityPeriod $optionValidityPeriod
     */
    private $optionValidityPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Renewal[] $renewal
     */
    private $renewal = [
        
    ];

    /**
     * Adds as optionsDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OptionsDescription $optionsDescription
     */
    public function addToOptionsDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\OptionsDescription $optionsDescription)
    {
        $this->optionsDescription[] = $optionsDescription;
        return $this;
    }

    /**
     * isset optionsDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOptionsDescription($index)
    {
        return isset($this->optionsDescription[$index]);
    }

    /**
     * unset optionsDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOptionsDescription($index)
    {
        unset($this->optionsDescription[$index]);
    }

    /**
     * Gets as optionsDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\OptionsDescription[]
     */
    public function getOptionsDescription()
    {
        return $this->optionsDescription;
    }

    /**
     * Sets a new optionsDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\OptionsDescription[] $optionsDescription
     * @return self
     */
    public function setOptionsDescription(?array $optionsDescription = null)
    {
        $this->optionsDescription = $optionsDescription;
        return $this;
    }

    /**
     * Gets as minimumNumberNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumNumberNumeric
     */
    public function getMinimumNumberNumeric()
    {
        return $this->minimumNumberNumeric;
    }

    /**
     * Sets a new minimumNumberNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumNumberNumeric $minimumNumberNumeric
     * @return self
     */
    public function setMinimumNumberNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MinimumNumberNumeric $minimumNumberNumeric = null)
    {
        $this->minimumNumberNumeric = $minimumNumberNumeric;
        return $this;
    }

    /**
     * Gets as maximumNumberNumeric
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumNumberNumeric
     */
    public function getMaximumNumberNumeric()
    {
        return $this->maximumNumberNumeric;
    }

    /**
     * Sets a new maximumNumberNumeric
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumNumberNumeric $maximumNumberNumeric
     * @return self
     */
    public function setMaximumNumberNumeric(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MaximumNumberNumeric $maximumNumberNumeric = null)
    {
        $this->maximumNumberNumeric = $maximumNumberNumeric;
        return $this;
    }

    /**
     * Gets as optionValidityPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OptionValidityPeriod
     */
    public function getOptionValidityPeriod()
    {
        return $this->optionValidityPeriod;
    }

    /**
     * Sets a new optionValidityPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OptionValidityPeriod $optionValidityPeriod
     * @return self
     */
    public function setOptionValidityPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OptionValidityPeriod $optionValidityPeriod = null)
    {
        $this->optionValidityPeriod = $optionValidityPeriod;
        return $this;
    }

    /**
     * Adds as renewal
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Renewal $renewal
     */
    public function addToRenewal(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\Renewal $renewal)
    {
        $this->renewal[] = $renewal;
        return $this;
    }

    /**
     * isset renewal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRenewal($index)
    {
        return isset($this->renewal[$index]);
    }

    /**
     * unset renewal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRenewal($index)
    {
        unset($this->renewal[$index]);
    }

    /**
     * Gets as renewal
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Renewal[]
     */
    public function getRenewal()
    {
        return $this->renewal;
    }

    /**
     * Sets a new renewal
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\Renewal[] $renewal
     * @return self
     */
    public function setRenewal(?array $renewal = null)
    {
        $this->renewal = $renewal;
        return $this;
    }
}

