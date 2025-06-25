<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CommunicationType
 *
 *
 * XSD Type: CommunicationType
 */
class CommunicationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChannelCode $channelCode
     */
    private $channelCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Channel $channel
     */
    private $channel = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Value $value
     */
    private $value = null;

    /**
     * Gets as channelCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChannelCode
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets a new channelCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ChannelCode $channelCode
     * @return self
     */
    public function setChannelCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ChannelCode $channelCode)
    {
        $this->channelCode = $channelCode;
        return $this;
    }

    /**
     * Gets as channel
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Channel $channel
     * @return self
     */
    public function setChannel(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Channel $channel = null)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Value $value
     * @return self
     */
    public function setValue(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Value $value)
    {
        $this->value = $value;
        return $this;
    }
}

