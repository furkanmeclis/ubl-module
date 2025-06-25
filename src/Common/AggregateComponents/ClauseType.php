<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing ClauseType
 *
 *
 * XSD Type: ClauseType
 */
class ClauseType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Content[] $content
     */
    private $content = [
        
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
     * Adds as content
     *
     * @return self
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Content $content
     */
    public function addToContent(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Content $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Content[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Content[] $content
     * @return self
     */
    public function setContent(?array $content = null)
    {
        $this->content = $content;
        return $this;
    }
}

