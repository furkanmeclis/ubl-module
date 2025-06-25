<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ItemType
 *
 *
 * XSD Type: ItemType
 */
class ItemType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    private $description = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Keyword $keyword
     */
    private $keyword = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\BrandName $brandName
     */
    private $brandName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ModelName $modelName
     */
    private $modelName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyersItemIdentification $buyersItemIdentification
     */
    private $buyersItemIdentification = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellersItemIdentification $sellersItemIdentification
     */
    private $sellersItemIdentification = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ManufacturersItemIdentification $manufacturersItemIdentification
     */
    private $manufacturersItemIdentification = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemIdentification[] $additionalItemIdentification
     */
    private $additionalItemIdentification = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginCountry $originCountry
     */
    private $originCountry = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification[] $commodityClassification
     */
    private $commodityClassification = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemInstance[] $itemInstance
     */
    private $itemInstance = [
        
    ];

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     * @return self
     */
    public function setDescription(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     * @return self
     */
    public function setName(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as keyword
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Keyword
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Sets a new keyword
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Keyword $keyword
     * @return self
     */
    public function setKeyword(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Keyword $keyword = null)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Gets as brandName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\BrandName
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\BrandName $brandName
     * @return self
     */
    public function setBrandName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\BrandName $brandName = null)
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * Gets as modelName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ModelName
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Sets a new modelName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ModelName $modelName
     * @return self
     */
    public function setModelName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ModelName $modelName = null)
    {
        $this->modelName = $modelName;
        return $this;
    }

    /**
     * Gets as buyersItemIdentification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyersItemIdentification
     */
    public function getBuyersItemIdentification()
    {
        return $this->buyersItemIdentification;
    }

    /**
     * Sets a new buyersItemIdentification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyersItemIdentification $buyersItemIdentification
     * @return self
     */
    public function setBuyersItemIdentification(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\BuyersItemIdentification $buyersItemIdentification = null)
    {
        $this->buyersItemIdentification = $buyersItemIdentification;
        return $this;
    }

    /**
     * Gets as sellersItemIdentification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellersItemIdentification
     */
    public function getSellersItemIdentification()
    {
        return $this->sellersItemIdentification;
    }

    /**
     * Sets a new sellersItemIdentification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellersItemIdentification $sellersItemIdentification
     * @return self
     */
    public function setSellersItemIdentification(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SellersItemIdentification $sellersItemIdentification = null)
    {
        $this->sellersItemIdentification = $sellersItemIdentification;
        return $this;
    }

    /**
     * Gets as manufacturersItemIdentification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ManufacturersItemIdentification
     */
    public function getManufacturersItemIdentification()
    {
        return $this->manufacturersItemIdentification;
    }

    /**
     * Sets a new manufacturersItemIdentification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ManufacturersItemIdentification $manufacturersItemIdentification
     * @return self
     */
    public function setManufacturersItemIdentification(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ManufacturersItemIdentification $manufacturersItemIdentification = null)
    {
        $this->manufacturersItemIdentification = $manufacturersItemIdentification;
        return $this;
    }

    /**
     * Adds as additionalItemIdentification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemIdentification $additionalItemIdentification
     */
    public function addToAdditionalItemIdentification(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemIdentification $additionalItemIdentification)
    {
        $this->additionalItemIdentification[] = $additionalItemIdentification;
        return $this;
    }

    /**
     * isset additionalItemIdentification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalItemIdentification($index)
    {
        return isset($this->additionalItemIdentification[$index]);
    }

    /**
     * unset additionalItemIdentification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalItemIdentification($index)
    {
        unset($this->additionalItemIdentification[$index]);
    }

    /**
     * Gets as additionalItemIdentification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemIdentification[]
     */
    public function getAdditionalItemIdentification()
    {
        return $this->additionalItemIdentification;
    }

    /**
     * Sets a new additionalItemIdentification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalItemIdentification[] $additionalItemIdentification
     * @return self
     */
    public function setAdditionalItemIdentification(?array $additionalItemIdentification = null)
    {
        $this->additionalItemIdentification = $additionalItemIdentification;
        return $this;
    }

    /**
     * Gets as originCountry
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginCountry
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * Sets a new originCountry
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginCountry $originCountry
     * @return self
     */
    public function setOriginCountry(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\OriginCountry $originCountry = null)
    {
        $this->originCountry = $originCountry;
        return $this;
    }

    /**
     * Adds as commodityClassification
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification $commodityClassification
     */
    public function addToCommodityClassification(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification $commodityClassification)
    {
        $this->commodityClassification[] = $commodityClassification;
        return $this;
    }

    /**
     * isset commodityClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommodityClassification($index)
    {
        return isset($this->commodityClassification[$index]);
    }

    /**
     * unset commodityClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommodityClassification($index)
    {
        unset($this->commodityClassification[$index]);
    }

    /**
     * Gets as commodityClassification
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification[]
     */
    public function getCommodityClassification()
    {
        return $this->commodityClassification;
    }

    /**
     * Sets a new commodityClassification
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\CommodityClassification[] $commodityClassification
     * @return self
     */
    public function setCommodityClassification(?array $commodityClassification = null)
    {
        $this->commodityClassification = $commodityClassification;
        return $this;
    }

    /**
     * Adds as itemInstance
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemInstance $itemInstance
     */
    public function addToItemInstance(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemInstance $itemInstance)
    {
        $this->itemInstance[] = $itemInstance;
        return $this;
    }

    /**
     * isset itemInstance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemInstance($index)
    {
        return isset($this->itemInstance[$index]);
    }

    /**
     * unset itemInstance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemInstance($index)
    {
        unset($this->itemInstance[$index]);
    }

    /**
     * Gets as itemInstance
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemInstance[]
     */
    public function getItemInstance()
    {
        return $this->itemInstance;
    }

    /**
     * Sets a new itemInstance
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ItemInstance[] $itemInstance
     * @return self
     */
    public function setItemInstance(?array $itemInstance = null)
    {
        $this->itemInstance = $itemInstance;
        return $this;
    }
}

