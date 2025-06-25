<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing LocationCoordinateType
 *
 *
 * XSD Type: LocationCoordinateType
 */
class LocationCoordinateType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\CoordinateSystemCode $coordinateSystemCode
     */
    private $coordinateSystemCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeDegreesMeasure $latitudeDegreesMeasure
     */
    private $latitudeDegreesMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeMinutesMeasure $latitudeMinutesMeasure
     */
    private $latitudeMinutesMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeDirectionCode $latitudeDirectionCode
     */
    private $latitudeDirectionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeDegreesMeasure $longitudeDegreesMeasure
     */
    private $longitudeDegreesMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeMinutesMeasure $longitudeMinutesMeasure
     */
    private $longitudeMinutesMeasure = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeDirectionCode $longitudeDirectionCode
     */
    private $longitudeDirectionCode = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AltitudeMeasure $altitudeMeasure
     */
    private $altitudeMeasure = null;

    /**
     * Gets as coordinateSystemCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\CoordinateSystemCode
     */
    public function getCoordinateSystemCode()
    {
        return $this->coordinateSystemCode;
    }

    /**
     * Sets a new coordinateSystemCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\CoordinateSystemCode $coordinateSystemCode
     * @return self
     */
    public function setCoordinateSystemCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\CoordinateSystemCode $coordinateSystemCode = null)
    {
        $this->coordinateSystemCode = $coordinateSystemCode;
        return $this;
    }

    /**
     * Gets as latitudeDegreesMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeDegreesMeasure
     */
    public function getLatitudeDegreesMeasure()
    {
        return $this->latitudeDegreesMeasure;
    }

    /**
     * Sets a new latitudeDegreesMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeDegreesMeasure $latitudeDegreesMeasure
     * @return self
     */
    public function setLatitudeDegreesMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeDegreesMeasure $latitudeDegreesMeasure = null)
    {
        $this->latitudeDegreesMeasure = $latitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeMinutesMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeMinutesMeasure
     */
    public function getLatitudeMinutesMeasure()
    {
        return $this->latitudeMinutesMeasure;
    }

    /**
     * Sets a new latitudeMinutesMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeMinutesMeasure $latitudeMinutesMeasure
     * @return self
     */
    public function setLatitudeMinutesMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeMinutesMeasure $latitudeMinutesMeasure = null)
    {
        $this->latitudeMinutesMeasure = $latitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeDirectionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeDirectionCode
     */
    public function getLatitudeDirectionCode()
    {
        return $this->latitudeDirectionCode;
    }

    /**
     * Sets a new latitudeDirectionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeDirectionCode $latitudeDirectionCode
     * @return self
     */
    public function setLatitudeDirectionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LatitudeDirectionCode $latitudeDirectionCode = null)
    {
        $this->latitudeDirectionCode = $latitudeDirectionCode;
        return $this;
    }

    /**
     * Gets as longitudeDegreesMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeDegreesMeasure
     */
    public function getLongitudeDegreesMeasure()
    {
        return $this->longitudeDegreesMeasure;
    }

    /**
     * Sets a new longitudeDegreesMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeDegreesMeasure $longitudeDegreesMeasure
     * @return self
     */
    public function setLongitudeDegreesMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeDegreesMeasure $longitudeDegreesMeasure = null)
    {
        $this->longitudeDegreesMeasure = $longitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeMinutesMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeMinutesMeasure
     */
    public function getLongitudeMinutesMeasure()
    {
        return $this->longitudeMinutesMeasure;
    }

    /**
     * Sets a new longitudeMinutesMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeMinutesMeasure $longitudeMinutesMeasure
     * @return self
     */
    public function setLongitudeMinutesMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeMinutesMeasure $longitudeMinutesMeasure = null)
    {
        $this->longitudeMinutesMeasure = $longitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeDirectionCode
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeDirectionCode
     */
    public function getLongitudeDirectionCode()
    {
        return $this->longitudeDirectionCode;
    }

    /**
     * Sets a new longitudeDirectionCode
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeDirectionCode $longitudeDirectionCode
     * @return self
     */
    public function setLongitudeDirectionCode(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LongitudeDirectionCode $longitudeDirectionCode = null)
    {
        $this->longitudeDirectionCode = $longitudeDirectionCode;
        return $this;
    }

    /**
     * Gets as altitudeMeasure
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AltitudeMeasure
     */
    public function getAltitudeMeasure()
    {
        return $this->altitudeMeasure;
    }

    /**
     * Sets a new altitudeMeasure
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AltitudeMeasure $altitudeMeasure
     * @return self
     */
    public function setAltitudeMeasure(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AltitudeMeasure $altitudeMeasure = null)
    {
        $this->altitudeMeasure = $altitudeMeasure;
        return $this;
    }
}

