<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ForecastExceptionType
 *
 *
 * XSD Type: ForecastExceptionType
 */
class ForecastExceptionType
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
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\DataSourceCode $dataSourceCode
     */
    private $dataSourceCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparisonDataCode $comparisonDataCode
     */
    private $comparisonDataCode = null;

    /**
     * @var \DateTime $comparisonForecastIssueTime
     */
    private $comparisonForecastIssueTime = null;

    /**
     * @var \DateTime $comparisonForecastIssueDate
     */
    private $comparisonForecastIssueDate = null;

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
     * Gets as issueDate
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(?\DateTime $issueTime = null)
    {
        $this->issueTime = $issueTime;
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
     * Gets as comparisonDataCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparisonDataCode
     */
    public function getComparisonDataCode()
    {
        return $this->comparisonDataCode;
    }

    /**
     * Sets a new comparisonDataCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparisonDataCode $comparisonDataCode
     * @return self
     */
    public function setComparisonDataCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ComparisonDataCode $comparisonDataCode = null)
    {
        $this->comparisonDataCode = $comparisonDataCode;
        return $this;
    }

    /**
     * Gets as comparisonForecastIssueTime
     *
     * @return \DateTime
     */
    public function getComparisonForecastIssueTime()
    {
        return $this->comparisonForecastIssueTime;
    }

    /**
     * Sets a new comparisonForecastIssueTime
     *
     * @param \DateTime $comparisonForecastIssueTime
     * @return self
     */
    public function setComparisonForecastIssueTime(?\DateTime $comparisonForecastIssueTime = null)
    {
        $this->comparisonForecastIssueTime = $comparisonForecastIssueTime;
        return $this;
    }

    /**
     * Gets as comparisonForecastIssueDate
     *
     * @return \DateTime
     */
    public function getComparisonForecastIssueDate()
    {
        return $this->comparisonForecastIssueDate;
    }

    /**
     * Sets a new comparisonForecastIssueDate
     *
     * @param \DateTime $comparisonForecastIssueDate
     * @return self
     */
    public function setComparisonForecastIssueDate(?\DateTime $comparisonForecastIssueDate = null)
    {
        $this->comparisonForecastIssueDate = $comparisonForecastIssueDate;
        return $this;
    }
}

