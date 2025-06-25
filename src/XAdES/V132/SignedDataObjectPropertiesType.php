<?php

namespace FurkanMeclis\GIB\UBL\XAdES\V132;

/**
 * Class representing SignedDataObjectPropertiesType
 *
 *
 * XSD Type: SignedDataObjectPropertiesType
 */
class SignedDataObjectPropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\DataObjectFormatType[] $dataObjectFormat
     */
    private $dataObjectFormat = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\CommitmentTypeIndicationType[] $commitmentTypeIndication
     */
    private $commitmentTypeIndication = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType[] $allDataObjectsTimeStamp
     */
    private $allDataObjectsTimeStamp = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType[] $individualDataObjectsTimeStamp
     */
    private $individualDataObjectsTimeStamp = [
        
    ];

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as dataObjectFormat
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\DataObjectFormatType $dataObjectFormat
     */
    public function addToDataObjectFormat(\FurkanMeclis\GIB\UBL\XAdES\V132\DataObjectFormatType $dataObjectFormat)
    {
        $this->dataObjectFormat[] = $dataObjectFormat;
        return $this;
    }

    /**
     * isset dataObjectFormat
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataObjectFormat($index)
    {
        return isset($this->dataObjectFormat[$index]);
    }

    /**
     * unset dataObjectFormat
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataObjectFormat($index)
    {
        unset($this->dataObjectFormat[$index]);
    }

    /**
     * Gets as dataObjectFormat
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\DataObjectFormatType[]
     */
    public function getDataObjectFormat()
    {
        return $this->dataObjectFormat;
    }

    /**
     * Sets a new dataObjectFormat
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\DataObjectFormatType[] $dataObjectFormat
     * @return self
     */
    public function setDataObjectFormat(?array $dataObjectFormat = null)
    {
        $this->dataObjectFormat = $dataObjectFormat;
        return $this;
    }

    /**
     * Adds as commitmentTypeIndication
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\CommitmentTypeIndicationType $commitmentTypeIndication
     */
    public function addToCommitmentTypeIndication(\FurkanMeclis\GIB\UBL\XAdES\V132\CommitmentTypeIndicationType $commitmentTypeIndication)
    {
        $this->commitmentTypeIndication[] = $commitmentTypeIndication;
        return $this;
    }

    /**
     * isset commitmentTypeIndication
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommitmentTypeIndication($index)
    {
        return isset($this->commitmentTypeIndication[$index]);
    }

    /**
     * unset commitmentTypeIndication
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommitmentTypeIndication($index)
    {
        unset($this->commitmentTypeIndication[$index]);
    }

    /**
     * Gets as commitmentTypeIndication
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\CommitmentTypeIndicationType[]
     */
    public function getCommitmentTypeIndication()
    {
        return $this->commitmentTypeIndication;
    }

    /**
     * Sets a new commitmentTypeIndication
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\CommitmentTypeIndicationType[] $commitmentTypeIndication
     * @return self
     */
    public function setCommitmentTypeIndication(?array $commitmentTypeIndication = null)
    {
        $this->commitmentTypeIndication = $commitmentTypeIndication;
        return $this;
    }

    /**
     * Adds as allDataObjectsTimeStamp
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType $allDataObjectsTimeStamp
     */
    public function addToAllDataObjectsTimeStamp(\FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType $allDataObjectsTimeStamp)
    {
        $this->allDataObjectsTimeStamp[] = $allDataObjectsTimeStamp;
        return $this;
    }

    /**
     * isset allDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllDataObjectsTimeStamp($index)
    {
        return isset($this->allDataObjectsTimeStamp[$index]);
    }

    /**
     * unset allDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllDataObjectsTimeStamp($index)
    {
        unset($this->allDataObjectsTimeStamp[$index]);
    }

    /**
     * Gets as allDataObjectsTimeStamp
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType[]
     */
    public function getAllDataObjectsTimeStamp()
    {
        return $this->allDataObjectsTimeStamp;
    }

    /**
     * Sets a new allDataObjectsTimeStamp
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType[] $allDataObjectsTimeStamp
     * @return self
     */
    public function setAllDataObjectsTimeStamp(?array $allDataObjectsTimeStamp = null)
    {
        $this->allDataObjectsTimeStamp = $allDataObjectsTimeStamp;
        return $this;
    }

    /**
     * Adds as individualDataObjectsTimeStamp
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType $individualDataObjectsTimeStamp
     */
    public function addToIndividualDataObjectsTimeStamp(\FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType $individualDataObjectsTimeStamp)
    {
        $this->individualDataObjectsTimeStamp[] = $individualDataObjectsTimeStamp;
        return $this;
    }

    /**
     * isset individualDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndividualDataObjectsTimeStamp($index)
    {
        return isset($this->individualDataObjectsTimeStamp[$index]);
    }

    /**
     * unset individualDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndividualDataObjectsTimeStamp($index)
    {
        unset($this->individualDataObjectsTimeStamp[$index]);
    }

    /**
     * Gets as individualDataObjectsTimeStamp
     *
     * @return \FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType[]
     */
    public function getIndividualDataObjectsTimeStamp()
    {
        return $this->individualDataObjectsTimeStamp;
    }

    /**
     * Sets a new individualDataObjectsTimeStamp
     *
     * @param \FurkanMeclis\GIB\UBL\XAdES\V132\XAdESTimeStampType[] $individualDataObjectsTimeStamp
     * @return self
     */
    public function setIndividualDataObjectsTimeStamp(?array $individualDataObjectsTimeStamp = null)
    {
        $this->individualDataObjectsTimeStamp = $individualDataObjectsTimeStamp;
        return $this;
    }
}

