<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ClassificationSchemeType
 *
 *
 * XSD Type: ClassificationSchemeType
 */
class ClassificationSchemeType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * @var \DateTime $lastRevisionDate
     */
    private $lastRevisionDate = null;

    /**
     * @var \DateTime $lastRevisionTime
     */
    private $lastRevisionTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name
     */
    private $name = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AgencyID $agencyID
     */
    private $agencyID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\AgencyName $agencyName
     */
    private $agencyName = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\SchemeURI $schemeURI
     */
    private $schemeURI = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\LanguageID $languageID
     */
    private $languageID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ClassificationCategory[] $classificationCategory
     */
    private $classificationCategory = [
        
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
    public function setID(\FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID
     * @return self
     */
    public function setUUID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as lastRevisionDate
     *
     * @return \DateTime
     */
    public function getLastRevisionDate()
    {
        return $this->lastRevisionDate;
    }

    /**
     * Sets a new lastRevisionDate
     *
     * @param \DateTime $lastRevisionDate
     * @return self
     */
    public function setLastRevisionDate(?\DateTime $lastRevisionDate = null)
    {
        $this->lastRevisionDate = $lastRevisionDate;
        return $this;
    }

    /**
     * Gets as lastRevisionTime
     *
     * @return \DateTime
     */
    public function getLastRevisionTime()
    {
        return $this->lastRevisionTime;
    }

    /**
     * Sets a new lastRevisionTime
     *
     * @param \DateTime $lastRevisionTime
     * @return self
     */
    public function setLastRevisionTime(?\DateTime $lastRevisionTime = null)
    {
        $this->lastRevisionTime = $lastRevisionTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note
     */
    public function addToNote(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
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
    public function setName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description
     */
    public function addToDescription(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as agencyID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AgencyID
     */
    public function getAgencyID()
    {
        return $this->agencyID;
    }

    /**
     * Sets a new agencyID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AgencyID $agencyID
     * @return self
     */
    public function setAgencyID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AgencyID $agencyID = null)
    {
        $this->agencyID = $agencyID;
        return $this;
    }

    /**
     * Gets as agencyName
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\AgencyName
     */
    public function getAgencyName()
    {
        return $this->agencyName;
    }

    /**
     * Sets a new agencyName
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\AgencyName $agencyName
     * @return self
     */
    public function setAgencyName(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\AgencyName $agencyName = null)
    {
        $this->agencyName = $agencyName;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\VersionID $versionID
     * @return self
     */
    public function setVersionID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\VersionID $versionID = null)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\URI $uRI
     * @return self
     */
    public function setURI(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\URI $uRI = null)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as schemeURI
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\SchemeURI
     */
    public function getSchemeURI()
    {
        return $this->schemeURI;
    }

    /**
     * Sets a new schemeURI
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\SchemeURI $schemeURI
     * @return self
     */
    public function setSchemeURI(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\SchemeURI $schemeURI = null)
    {
        $this->schemeURI = $schemeURI;
        return $this;
    }

    /**
     * Gets as languageID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\LanguageID
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\LanguageID $languageID
     * @return self
     */
    public function setLanguageID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\LanguageID $languageID = null)
    {
        $this->languageID = $languageID;
        return $this;
    }

    /**
     * Adds as classificationCategory
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ClassificationCategory $classificationCategory
     */
    public function addToClassificationCategory(\FurkanMeclis\GIB\UBL\Common\AggregateComponents\ClassificationCategory $classificationCategory)
    {
        $this->classificationCategory[] = $classificationCategory;
        return $this;
    }

    /**
     * isset classificationCategory
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassificationCategory($index)
    {
        return isset($this->classificationCategory[$index]);
    }

    /**
     * unset classificationCategory
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassificationCategory($index)
    {
        unset($this->classificationCategory[$index]);
    }

    /**
     * Gets as classificationCategory
     *
     * @return \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ClassificationCategory[]
     */
    public function getClassificationCategory()
    {
        return $this->classificationCategory;
    }

    /**
     * Sets a new classificationCategory
     *
     * @param \FurkanMeclis\GIB\UBL\Common\AggregateComponents\ClassificationCategory[] $classificationCategory
     * @return self
     */
    public function setClassificationCategory(array $classificationCategory)
    {
        $this->classificationCategory = $classificationCategory;
        return $this;
    }
}

