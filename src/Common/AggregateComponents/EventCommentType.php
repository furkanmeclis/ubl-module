<?php

namespace FurkanMeclis\GIB\UBL\Common\AggregateComponents;

/**
 * Class representing EventCommentType
 *
 *
 * XSD Type: EventCommentType
 */
class EventCommentType
{
    /**
     * @var \FurkanMeclis\GIB\UBL\Common\BasicComponents\Comment $comment
     */
    private $comment = null;

    /**
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * Gets as comment
     *
     * @return \FurkanMeclis\GIB\UBL\Common\BasicComponents\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param \FurkanMeclis\GIB\UBL\Common\BasicComponents\Comment $comment
     * @return self
     */
    public function setComment(\FurkanMeclis\GIB\UBL\Common\BasicComponents\Comment $comment)
    {
        $this->comment = $comment;
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
}

