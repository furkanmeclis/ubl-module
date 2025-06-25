<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing AuctionTermsType
 *
 *
 * XSD Type: AuctionTermsType
 */
class AuctionTermsType
{
    /**
     * @var bool $auctionConstraintIndicator
     */
    private $auctionConstraintIndicator = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\JustificationDescription[] $justificationDescription
     */
    private $justificationDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessDescription[] $processDescription
     */
    private $processDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConditionsDescription[] $conditionsDescription
     */
    private $conditionsDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ElectronicDeviceDescription[] $electronicDeviceDescription
     */
    private $electronicDeviceDescription = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AuctionURI $auctionURI
     */
    private $auctionURI = null;

    /**
     * Gets as auctionConstraintIndicator
     *
     * @return bool
     */
    public function getAuctionConstraintIndicator()
    {
        return $this->auctionConstraintIndicator;
    }

    /**
     * Sets a new auctionConstraintIndicator
     *
     * @param bool $auctionConstraintIndicator
     * @return self
     */
    public function setAuctionConstraintIndicator($auctionConstraintIndicator)
    {
        $this->auctionConstraintIndicator = $auctionConstraintIndicator;
        return $this;
    }

    /**
     * Adds as justificationDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\JustificationDescription $justificationDescription
     */
    public function addToJustificationDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\JustificationDescription $justificationDescription)
    {
        $this->justificationDescription[] = $justificationDescription;
        return $this;
    }

    /**
     * isset justificationDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJustificationDescription($index)
    {
        return isset($this->justificationDescription[$index]);
    }

    /**
     * unset justificationDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJustificationDescription($index)
    {
        unset($this->justificationDescription[$index]);
    }

    /**
     * Gets as justificationDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\JustificationDescription[]
     */
    public function getJustificationDescription()
    {
        return $this->justificationDescription;
    }

    /**
     * Sets a new justificationDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\JustificationDescription[] $justificationDescription
     * @return self
     */
    public function setJustificationDescription(?array $justificationDescription = null)
    {
        $this->justificationDescription = $justificationDescription;
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

    /**
     * Adds as processDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessDescription $processDescription
     */
    public function addToProcessDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessDescription $processDescription)
    {
        $this->processDescription[] = $processDescription;
        return $this;
    }

    /**
     * isset processDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessDescription($index)
    {
        return isset($this->processDescription[$index]);
    }

    /**
     * unset processDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessDescription($index)
    {
        unset($this->processDescription[$index]);
    }

    /**
     * Gets as processDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessDescription[]
     */
    public function getProcessDescription()
    {
        return $this->processDescription;
    }

    /**
     * Sets a new processDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ProcessDescription[] $processDescription
     * @return self
     */
    public function setProcessDescription(?array $processDescription = null)
    {
        $this->processDescription = $processDescription;
        return $this;
    }

    /**
     * Adds as conditionsDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConditionsDescription $conditionsDescription
     */
    public function addToConditionsDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConditionsDescription $conditionsDescription)
    {
        $this->conditionsDescription[] = $conditionsDescription;
        return $this;
    }

    /**
     * isset conditionsDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditionsDescription($index)
    {
        return isset($this->conditionsDescription[$index]);
    }

    /**
     * unset conditionsDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditionsDescription($index)
    {
        unset($this->conditionsDescription[$index]);
    }

    /**
     * Gets as conditionsDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConditionsDescription[]
     */
    public function getConditionsDescription()
    {
        return $this->conditionsDescription;
    }

    /**
     * Sets a new conditionsDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConditionsDescription[] $conditionsDescription
     * @return self
     */
    public function setConditionsDescription(?array $conditionsDescription = null)
    {
        $this->conditionsDescription = $conditionsDescription;
        return $this;
    }

    /**
     * Adds as electronicDeviceDescription
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ElectronicDeviceDescription $electronicDeviceDescription
     */
    public function addToElectronicDeviceDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ElectronicDeviceDescription $electronicDeviceDescription)
    {
        $this->electronicDeviceDescription[] = $electronicDeviceDescription;
        return $this;
    }

    /**
     * isset electronicDeviceDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElectronicDeviceDescription($index)
    {
        return isset($this->electronicDeviceDescription[$index]);
    }

    /**
     * unset electronicDeviceDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElectronicDeviceDescription($index)
    {
        unset($this->electronicDeviceDescription[$index]);
    }

    /**
     * Gets as electronicDeviceDescription
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ElectronicDeviceDescription[]
     */
    public function getElectronicDeviceDescription()
    {
        return $this->electronicDeviceDescription;
    }

    /**
     * Sets a new electronicDeviceDescription
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ElectronicDeviceDescription[] $electronicDeviceDescription
     * @return self
     */
    public function setElectronicDeviceDescription(?array $electronicDeviceDescription = null)
    {
        $this->electronicDeviceDescription = $electronicDeviceDescription;
        return $this;
    }

    /**
     * Gets as auctionURI
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AuctionURI
     */
    public function getAuctionURI()
    {
        return $this->auctionURI;
    }

    /**
     * Sets a new auctionURI
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AuctionURI $auctionURI
     * @return self
     */
    public function setAuctionURI(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AuctionURI $auctionURI = null)
    {
        $this->auctionURI = $auctionURI;
        return $this;
    }
}

