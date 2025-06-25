<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EventTacticEnumerationType
 *
 *
 * XSD Type: EventTacticEnumerationType
 */
class EventTacticEnumerationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode
     */
    private $consumerIncentiveTacticTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DisplayTacticTypeCode $displayTacticTypeCode
     */
    private $displayTacticTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeatureTacticTypeCode $featureTacticTypeCode
     */
    private $featureTacticTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode
     */
    private $tradeItemPackingLabelingTypeCode = null;

    /**
     * Gets as consumerIncentiveTacticTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumerIncentiveTacticTypeCode
     */
    public function getConsumerIncentiveTacticTypeCode()
    {
        return $this->consumerIncentiveTacticTypeCode;
    }

    /**
     * Sets a new consumerIncentiveTacticTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode
     * @return self
     */
    public function setConsumerIncentiveTacticTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode = null)
    {
        $this->consumerIncentiveTacticTypeCode = $consumerIncentiveTacticTypeCode;
        return $this;
    }

    /**
     * Gets as displayTacticTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DisplayTacticTypeCode
     */
    public function getDisplayTacticTypeCode()
    {
        return $this->displayTacticTypeCode;
    }

    /**
     * Sets a new displayTacticTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DisplayTacticTypeCode $displayTacticTypeCode
     * @return self
     */
    public function setDisplayTacticTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\DisplayTacticTypeCode $displayTacticTypeCode = null)
    {
        $this->displayTacticTypeCode = $displayTacticTypeCode;
        return $this;
    }

    /**
     * Gets as featureTacticTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeatureTacticTypeCode
     */
    public function getFeatureTacticTypeCode()
    {
        return $this->featureTacticTypeCode;
    }

    /**
     * Sets a new featureTacticTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\FeatureTacticTypeCode $featureTacticTypeCode
     * @return self
     */
    public function setFeatureTacticTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\FeatureTacticTypeCode $featureTacticTypeCode = null)
    {
        $this->featureTacticTypeCode = $featureTacticTypeCode;
        return $this;
    }

    /**
     * Gets as tradeItemPackingLabelingTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TradeItemPackingLabelingTypeCode
     */
    public function getTradeItemPackingLabelingTypeCode()
    {
        return $this->tradeItemPackingLabelingTypeCode;
    }

    /**
     * Sets a new tradeItemPackingLabelingTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode
     * @return self
     */
    public function setTradeItemPackingLabelingTypeCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode = null)
    {
        $this->tradeItemPackingLabelingTypeCode = $tradeItemPackingLabelingTypeCode;
        return $this;
    }
}

