<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing AppealTermsType
 *
 *
 * XSD Type: AppealTermsType
 */
class AppealTermsType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PresentationPeriod $presentationPeriod
     */
    private $presentationPeriod = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealInformationParty $appealInformationParty
     */
    private $appealInformationParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealReceiverParty $appealReceiverParty
     */
    private $appealReceiverParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MediationParty $mediationParty
     */
    private $mediationParty = null;

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
     * Gets as presentationPeriod
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PresentationPeriod
     */
    public function getPresentationPeriod()
    {
        return $this->presentationPeriod;
    }

    /**
     * Sets a new presentationPeriod
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\PresentationPeriod $presentationPeriod
     * @return self
     */
    public function setPresentationPeriod(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\PresentationPeriod $presentationPeriod = null)
    {
        $this->presentationPeriod = $presentationPeriod;
        return $this;
    }

    /**
     * Gets as appealInformationParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealInformationParty
     */
    public function getAppealInformationParty()
    {
        return $this->appealInformationParty;
    }

    /**
     * Sets a new appealInformationParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealInformationParty $appealInformationParty
     * @return self
     */
    public function setAppealInformationParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealInformationParty $appealInformationParty = null)
    {
        $this->appealInformationParty = $appealInformationParty;
        return $this;
    }

    /**
     * Gets as appealReceiverParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealReceiverParty
     */
    public function getAppealReceiverParty()
    {
        return $this->appealReceiverParty;
    }

    /**
     * Sets a new appealReceiverParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealReceiverParty $appealReceiverParty
     * @return self
     */
    public function setAppealReceiverParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AppealReceiverParty $appealReceiverParty = null)
    {
        $this->appealReceiverParty = $appealReceiverParty;
        return $this;
    }

    /**
     * Gets as mediationParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MediationParty
     */
    public function getMediationParty()
    {
        return $this->mediationParty;
    }

    /**
     * Sets a new mediationParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\MediationParty $mediationParty
     * @return self
     */
    public function setMediationParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\MediationParty $mediationParty = null)
    {
        $this->mediationParty = $mediationParty;
        return $this;
    }
}

