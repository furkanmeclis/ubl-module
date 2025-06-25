<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ResultOfVerificationType
 *
 *
 * XSD Type: ResultOfVerificationType
 */
class ResultOfVerificationType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidatorID $validatorID
     */
    private $validatorID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidationResultCode $validationResultCode
     */
    private $validationResultCode = null;

    /**
     * @var \DateTime $validationDate
     */
    private $validationDate = null;

    /**
     * @var \DateTime $validationTime
     */
    private $validationTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateProcess $validateProcess
     */
    private $validateProcess = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateTool $validateTool
     */
    private $validateTool = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateToolVersion $validateToolVersion
     */
    private $validateToolVersion = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryParty $signatoryParty
     */
    private $signatoryParty = null;

    /**
     * Gets as validatorID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidatorID
     */
    public function getValidatorID()
    {
        return $this->validatorID;
    }

    /**
     * Sets a new validatorID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidatorID $validatorID
     * @return self
     */
    public function setValidatorID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidatorID $validatorID = null)
    {
        $this->validatorID = $validatorID;
        return $this;
    }

    /**
     * Gets as validationResultCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidationResultCode
     */
    public function getValidationResultCode()
    {
        return $this->validationResultCode;
    }

    /**
     * Sets a new validationResultCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidationResultCode $validationResultCode
     * @return self
     */
    public function setValidationResultCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidationResultCode $validationResultCode = null)
    {
        $this->validationResultCode = $validationResultCode;
        return $this;
    }

    /**
     * Gets as validationDate
     *
     * @return \DateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Sets a new validationDate
     *
     * @param \DateTime $validationDate
     * @return self
     */
    public function setValidationDate(?\DateTime $validationDate = null)
    {
        $this->validationDate = $validationDate;
        return $this;
    }

    /**
     * Gets as validationTime
     *
     * @return \DateTime
     */
    public function getValidationTime()
    {
        return $this->validationTime;
    }

    /**
     * Sets a new validationTime
     *
     * @param \DateTime $validationTime
     * @return self
     */
    public function setValidationTime(?\DateTime $validationTime = null)
    {
        $this->validationTime = $validationTime;
        return $this;
    }

    /**
     * Gets as validateProcess
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateProcess
     */
    public function getValidateProcess()
    {
        return $this->validateProcess;
    }

    /**
     * Sets a new validateProcess
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateProcess $validateProcess
     * @return self
     */
    public function setValidateProcess(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateProcess $validateProcess = null)
    {
        $this->validateProcess = $validateProcess;
        return $this;
    }

    /**
     * Gets as validateTool
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateTool
     */
    public function getValidateTool()
    {
        return $this->validateTool;
    }

    /**
     * Sets a new validateTool
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateTool $validateTool
     * @return self
     */
    public function setValidateTool(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateTool $validateTool = null)
    {
        $this->validateTool = $validateTool;
        return $this;
    }

    /**
     * Gets as validateToolVersion
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateToolVersion
     */
    public function getValidateToolVersion()
    {
        return $this->validateToolVersion;
    }

    /**
     * Sets a new validateToolVersion
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateToolVersion $validateToolVersion
     * @return self
     */
    public function setValidateToolVersion(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ValidateToolVersion $validateToolVersion = null)
    {
        $this->validateToolVersion = $validateToolVersion;
        return $this;
    }

    /**
     * Gets as signatoryParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryParty
     */
    public function getSignatoryParty()
    {
        return $this->signatoryParty;
    }

    /**
     * Sets a new signatoryParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryParty $signatoryParty
     * @return self
     */
    public function setSignatoryParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SignatoryParty $signatoryParty = null)
    {
        $this->signatoryParty = $signatoryParty;
        return $this;
    }
}

