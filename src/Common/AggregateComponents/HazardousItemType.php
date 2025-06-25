<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing HazardousItemType
 *
 *
 * XSD Type: HazardousItemType
 */
class HazardousItemType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardNotation $placardNotation
     */
    private $placardNotation = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardEndorsement $placardEndorsement
     */
    private $placardEndorsement = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalInformation[] $additionalInformation
     */
    private $additionalInformation = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UNDGCode $uNDGCode
     */
    private $uNDGCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmergencyProceduresCode $emergencyProceduresCode
     */
    private $emergencyProceduresCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MedicalFirstAidGuideCode $medicalFirstAidGuideCode
     */
    private $medicalFirstAidGuideCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\TechnicalName $technicalName
     */
    private $technicalName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CategoryName $categoryName
     */
    private $categoryName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardousCategoryCode $hazardousCategoryCode
     */
    private $hazardousCategoryCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID
     */
    private $upperOrangeHazardPlacardID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID
     */
    private $lowerOrangeHazardPlacardID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\MarkingID $markingID
     */
    private $markingID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardClassID $hazardClassID
     */
    private $hazardClassID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContactParty $contactParty
     */
    private $contactParty = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SecondaryHazard[] $secondaryHazard
     */
    private $secondaryHazard = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit[] $hazardousGoodsTransit
     */
    private $hazardousGoodsTransit = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmergencyTemperature $emergencyTemperature
     */
    private $emergencyTemperature = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FlashpointTemperature $flashpointTemperature
     */
    private $flashpointTemperature = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalTemperature[] $additionalTemperature
     */
    private $additionalTemperature = [
        
    ];

    /**
     * Gets as iD
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     * @return self
     */
    public function setID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as placardNotation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardNotation
     */
    public function getPlacardNotation()
    {
        return $this->placardNotation;
    }

    /**
     * Sets a new placardNotation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardNotation $placardNotation
     * @return self
     */
    public function setPlacardNotation(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardNotation $placardNotation = null)
    {
        $this->placardNotation = $placardNotation;
        return $this;
    }

    /**
     * Gets as placardEndorsement
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardEndorsement
     */
    public function getPlacardEndorsement()
    {
        return $this->placardEndorsement;
    }

    /**
     * Sets a new placardEndorsement
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardEndorsement $placardEndorsement
     * @return self
     */
    public function setPlacardEndorsement(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PlacardEndorsement $placardEndorsement = null)
    {
        $this->placardEndorsement = $placardEndorsement;
        return $this;
    }

    /**
     * Adds as additionalInformation
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalInformation $additionalInformation
     */
    public function addToAdditionalInformation(\FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalInformation $additionalInformation)
    {
        $this->additionalInformation[] = $additionalInformation;
        return $this;
    }

    /**
     * isset additionalInformation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInformation($index)
    {
        return isset($this->additionalInformation[$index]);
    }

    /**
     * unset additionalInformation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInformation($index)
    {
        unset($this->additionalInformation[$index]);
    }

    /**
     * Gets as additionalInformation
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalInformation[]
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AdditionalInformation[] $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(?array $additionalInformation = null)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Gets as uNDGCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\UNDGCode
     */
    public function getUNDGCode()
    {
        return $this->uNDGCode;
    }

    /**
     * Sets a new uNDGCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\UNDGCode $uNDGCode
     * @return self
     */
    public function setUNDGCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\UNDGCode $uNDGCode = null)
    {
        $this->uNDGCode = $uNDGCode;
        return $this;
    }

    /**
     * Gets as emergencyProceduresCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmergencyProceduresCode
     */
    public function getEmergencyProceduresCode()
    {
        return $this->emergencyProceduresCode;
    }

    /**
     * Sets a new emergencyProceduresCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\EmergencyProceduresCode $emergencyProceduresCode
     * @return self
     */
    public function setEmergencyProceduresCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\EmergencyProceduresCode $emergencyProceduresCode = null)
    {
        $this->emergencyProceduresCode = $emergencyProceduresCode;
        return $this;
    }

    /**
     * Gets as medicalFirstAidGuideCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MedicalFirstAidGuideCode
     */
    public function getMedicalFirstAidGuideCode()
    {
        return $this->medicalFirstAidGuideCode;
    }

    /**
     * Sets a new medicalFirstAidGuideCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MedicalFirstAidGuideCode $medicalFirstAidGuideCode
     * @return self
     */
    public function setMedicalFirstAidGuideCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MedicalFirstAidGuideCode $medicalFirstAidGuideCode = null)
    {
        $this->medicalFirstAidGuideCode = $medicalFirstAidGuideCode;
        return $this;
    }

    /**
     * Gets as technicalName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\TechnicalName
     */
    public function getTechnicalName()
    {
        return $this->technicalName;
    }

    /**
     * Sets a new technicalName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\TechnicalName $technicalName
     * @return self
     */
    public function setTechnicalName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\TechnicalName $technicalName = null)
    {
        $this->technicalName = $technicalName;
        return $this;
    }

    /**
     * Gets as categoryName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CategoryName
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets a new categoryName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CategoryName $categoryName
     * @return self
     */
    public function setCategoryName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CategoryName $categoryName = null)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * Gets as hazardousCategoryCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardousCategoryCode
     */
    public function getHazardousCategoryCode()
    {
        return $this->hazardousCategoryCode;
    }

    /**
     * Sets a new hazardousCategoryCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardousCategoryCode $hazardousCategoryCode
     * @return self
     */
    public function setHazardousCategoryCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardousCategoryCode $hazardousCategoryCode = null)
    {
        $this->hazardousCategoryCode = $hazardousCategoryCode;
        return $this;
    }

    /**
     * Gets as upperOrangeHazardPlacardID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\UpperOrangeHazardPlacardID
     */
    public function getUpperOrangeHazardPlacardID()
    {
        return $this->upperOrangeHazardPlacardID;
    }

    /**
     * Sets a new upperOrangeHazardPlacardID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID
     * @return self
     */
    public function setUpperOrangeHazardPlacardID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID = null)
    {
        $this->upperOrangeHazardPlacardID = $upperOrangeHazardPlacardID;
        return $this;
    }

    /**
     * Gets as lowerOrangeHazardPlacardID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowerOrangeHazardPlacardID
     */
    public function getLowerOrangeHazardPlacardID()
    {
        return $this->lowerOrangeHazardPlacardID;
    }

    /**
     * Sets a new lowerOrangeHazardPlacardID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID
     * @return self
     */
    public function setLowerOrangeHazardPlacardID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID = null)
    {
        $this->lowerOrangeHazardPlacardID = $lowerOrangeHazardPlacardID;
        return $this;
    }

    /**
     * Gets as markingID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\MarkingID
     */
    public function getMarkingID()
    {
        return $this->markingID;
    }

    /**
     * Sets a new markingID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\MarkingID $markingID
     * @return self
     */
    public function setMarkingID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\MarkingID $markingID = null)
    {
        $this->markingID = $markingID;
        return $this;
    }

    /**
     * Gets as hazardClassID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardClassID
     */
    public function getHazardClassID()
    {
        return $this->hazardClassID;
    }

    /**
     * Sets a new hazardClassID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardClassID $hazardClassID
     * @return self
     */
    public function setHazardClassID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\HazardClassID $hazardClassID = null)
    {
        $this->hazardClassID = $hazardClassID;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\NetWeightMeasure $netWeightMeasure = null)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\NetVolumeMeasure $netVolumeMeasure = null)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as contactParty
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContactParty
     */
    public function getContactParty()
    {
        return $this->contactParty;
    }

    /**
     * Sets a new contactParty
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContactParty $contactParty
     * @return self
     */
    public function setContactParty(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ContactParty $contactParty = null)
    {
        $this->contactParty = $contactParty;
        return $this;
    }

    /**
     * Adds as secondaryHazard
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SecondaryHazard $secondaryHazard
     */
    public function addToSecondaryHazard(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\SecondaryHazard $secondaryHazard)
    {
        $this->secondaryHazard[] = $secondaryHazard;
        return $this;
    }

    /**
     * isset secondaryHazard
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecondaryHazard($index)
    {
        return isset($this->secondaryHazard[$index]);
    }

    /**
     * unset secondaryHazard
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecondaryHazard($index)
    {
        unset($this->secondaryHazard[$index]);
    }

    /**
     * Gets as secondaryHazard
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SecondaryHazard[]
     */
    public function getSecondaryHazard()
    {
        return $this->secondaryHazard;
    }

    /**
     * Sets a new secondaryHazard
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\SecondaryHazard[] $secondaryHazard
     * @return self
     */
    public function setSecondaryHazard(?array $secondaryHazard = null)
    {
        $this->secondaryHazard = $secondaryHazard;
        return $this;
    }

    /**
     * Adds as hazardousGoodsTransit
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit $hazardousGoodsTransit
     */
    public function addToHazardousGoodsTransit(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit[] = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * isset hazardousGoodsTransit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousGoodsTransit($index)
    {
        return isset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * unset hazardousGoodsTransit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousGoodsTransit($index)
    {
        unset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * Gets as hazardousGoodsTransit
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit[]
     */
    public function getHazardousGoodsTransit()
    {
        return $this->hazardousGoodsTransit;
    }

    /**
     * Sets a new hazardousGoodsTransit
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\HazardousGoodsTransit[] $hazardousGoodsTransit
     * @return self
     */
    public function setHazardousGoodsTransit(?array $hazardousGoodsTransit = null)
    {
        $this->hazardousGoodsTransit = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * Gets as emergencyTemperature
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmergencyTemperature
     */
    public function getEmergencyTemperature()
    {
        return $this->emergencyTemperature;
    }

    /**
     * Sets a new emergencyTemperature
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmergencyTemperature $emergencyTemperature
     * @return self
     */
    public function setEmergencyTemperature(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\EmergencyTemperature $emergencyTemperature = null)
    {
        $this->emergencyTemperature = $emergencyTemperature;
        return $this;
    }

    /**
     * Gets as flashpointTemperature
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FlashpointTemperature
     */
    public function getFlashpointTemperature()
    {
        return $this->flashpointTemperature;
    }

    /**
     * Sets a new flashpointTemperature
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\FlashpointTemperature $flashpointTemperature
     * @return self
     */
    public function setFlashpointTemperature(?\FurkanMeclis\GIB\UBL\Common\AggregateComponents\FlashpointTemperature $flashpointTemperature = null)
    {
        $this->flashpointTemperature = $flashpointTemperature;
        return $this;
    }

    /**
     * Adds as additionalTemperature
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalTemperature $additionalTemperature
     */
    public function addToAdditionalTemperature(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalTemperature $additionalTemperature)
    {
        $this->additionalTemperature[] = $additionalTemperature;
        return $this;
    }

    /**
     * isset additionalTemperature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalTemperature($index)
    {
        return isset($this->additionalTemperature[$index]);
    }

    /**
     * unset additionalTemperature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalTemperature($index)
    {
        unset($this->additionalTemperature[$index]);
    }

    /**
     * Gets as additionalTemperature
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalTemperature[]
     */
    public function getAdditionalTemperature()
    {
        return $this->additionalTemperature;
    }

    /**
     * Sets a new additionalTemperature
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\AdditionalTemperature[] $additionalTemperature
     * @return self
     */
    public function setAdditionalTemperature(?array $additionalTemperature = null)
    {
        $this->additionalTemperature = $additionalTemperature;
        return $this;
    }
}

