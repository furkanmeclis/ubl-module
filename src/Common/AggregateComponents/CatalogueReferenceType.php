<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing CatalogueReferenceType
 *
 *
 * XSD Type: CatalogueReferenceType
 */
class CatalogueReferenceType
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
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * @var \DateTime $revisionDate
     */
    private $revisionDate = null;

    /**
     * @var \DateTime $revisionTime
     */
    private $revisionTime = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousVersionID $previousVersionID
     */
    private $previousVersionID = null;

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
    public function setIssueDate(?\DateTime $issueDate = null)
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
     * Gets as revisionDate
     *
     * @return \DateTime
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * Sets a new revisionDate
     *
     * @param \DateTime $revisionDate
     * @return self
     */
    public function setRevisionDate(?\DateTime $revisionDate = null)
    {
        $this->revisionDate = $revisionDate;
        return $this;
    }

    /**
     * Gets as revisionTime
     *
     * @return \DateTime
     */
    public function getRevisionTime()
    {
        return $this->revisionTime;
    }

    /**
     * Sets a new revisionTime
     *
     * @param \DateTime $revisionTime
     * @return self
     */
    public function setRevisionTime(?\DateTime $revisionTime = null)
    {
        $this->revisionTime = $revisionTime;
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
     * Gets as previousVersionID
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousVersionID
     */
    public function getPreviousVersionID()
    {
        return $this->previousVersionID;
    }

    /**
     * Sets a new previousVersionID
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousVersionID $previousVersionID
     * @return self
     */
    public function setPreviousVersionID(?\FurkanMeclis\GIB\UBL\Common\BasicComponents\PreviousVersionID $previousVersionID = null)
    {
        $this->previousVersionID = $previousVersionID;
        return $this;
    }
}

