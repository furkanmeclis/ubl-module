<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CommodityClassificationType
 *
 *
 * XSD Type: CommodityClassificationType
 */
class CommodityClassificationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ItemClassificationCode $itemClassificationCode
     */
    private $itemClassificationCode = null;

    /**
     * Gets as itemClassificationCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ItemClassificationCode
     */
    public function getItemClassificationCode()
    {
        return $this->itemClassificationCode;
    }

    /**
     * Sets a new itemClassificationCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ItemClassificationCode $itemClassificationCode
     * @return self
     */
    public function setItemClassificationCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ItemClassificationCode $itemClassificationCode)
    {
        $this->itemClassificationCode = $itemClassificationCode;
        return $this;
    }
}

