<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ForecastExceptionCriterionLineType
 *
 *
 * XSD Type: ForecastExceptionCriterionLineType
 */
class ForecastExceptionCriterionLineType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastPurposeCode $forecastPurposeCode
     */
    private $forecastPurposeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparisonDataSourceCode $comparisonDataSourceCode
     */
    private $comparisonDataSourceCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DataSourceCode $dataSourceCode
     */
    private $dataSourceCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeDeltaDaysQuantity $timeDeltaDaysQuantity
     */
    private $timeDeltaDaysQuantity = null;

    /**
     * Gets as forecastPurposeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastPurposeCode
     */
    public function getForecastPurposeCode()
    {
        return $this->forecastPurposeCode;
    }

    /**
     * Sets a new forecastPurposeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastPurposeCode $forecastPurposeCode
     * @return self
     */
    public function setForecastPurposeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastPurposeCode $forecastPurposeCode)
    {
        $this->forecastPurposeCode = $forecastPurposeCode;
        return $this;
    }

    /**
     * Gets as forecastTypeCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode
     */
    public function getForecastTypeCode()
    {
        return $this->forecastTypeCode;
    }

    /**
     * Sets a new forecastTypeCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ForecastTypeCode $forecastTypeCode)
    {
        $this->forecastTypeCode = $forecastTypeCode;
        return $this;
    }

    /**
     * Gets as comparisonDataSourceCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparisonDataSourceCode
     */
    public function getComparisonDataSourceCode()
    {
        return $this->comparisonDataSourceCode;
    }

    /**
     * Sets a new comparisonDataSourceCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparisonDataSourceCode $comparisonDataSourceCode
     * @return self
     */
    public function setComparisonDataSourceCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparisonDataSourceCode $comparisonDataSourceCode = null)
    {
        $this->comparisonDataSourceCode = $comparisonDataSourceCode;
        return $this;
    }

    /**
     * Gets as dataSourceCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\DataSourceCode
     */
    public function getDataSourceCode()
    {
        return $this->dataSourceCode;
    }

    /**
     * Sets a new dataSourceCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\DataSourceCode $dataSourceCode
     * @return self
     */
    public function setDataSourceCode(\FurkanMeclis\GIB\UBL\Common\BasicComponents\DataSourceCode $dataSourceCode)
    {
        $this->dataSourceCode = $dataSourceCode;
        return $this;
    }

    /**
     * Gets as timeDeltaDaysQuantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeDeltaDaysQuantity
     */
    public function getTimeDeltaDaysQuantity()
    {
        return $this->timeDeltaDaysQuantity;
    }

    /**
     * Sets a new timeDeltaDaysQuantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeDeltaDaysQuantity $timeDeltaDaysQuantity
     * @return self
     */
    public function setTimeDeltaDaysQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TimeDeltaDaysQuantity $timeDeltaDaysQuantity = null)
    {
        $this->timeDeltaDaysQuantity = $timeDeltaDaysQuantity;
        return $this;
    }
}

