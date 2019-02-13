<?php

namespace Nascom\TeamleaderApiClient\Model\TimeTracking;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedSubject;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class TimeTrackingBase
 * @package Nascom\TeamleaderApiClient\Model\TimeTracking
 */
abstract class TimeTrackingBase extends ModelBase
{
    /**
     * @var Account
     */
    private $user;

    /**
     * @var LinkedWorkType
     */
    private $workType;

    /**
     * @var string
     */
    private $startedOn;

    /**
     * @var \DateTime
     */
    private $startedAt;

    /**
     * @var \DateTime
     */
    private $endedAt;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var boolean
     */
    private $invoiceAble;

    /**
     * TimeTrackingBase constructor.
     * @param LinkedWorkType|null $workType
     * @param \DateTime|null $startedAt
     * @param \DateTime|null $endedAt
     * @param string|null $duration
     * @param string|null $description
     * @param LinkedSubject|null $subject
     */
    public function __construct
    (
        LinkedWorkType $workType = null,
        \DateTime $startedAt = null,
        \DateTime $endedAt = null,
        $duration = null,
        $description = null,
        LinkedSubject $subject = null
    ) {
        $this->workType = $workType;
        $this->startedAt = $startedAt;
        $this->endedAt = $endedAt;
        $this->duration = $duration;
        $this->description = $description;
        $this->subject = $subject;
    }

    /**
     * @return Account
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param Account $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return LinkedWorkType
     */
    public function getWorkType()
    {
        return $this->workType;
    }

    /**
     * @param LinkedWorkType $workType
     */
    public function setWorkType($workType)
    {
        $this->workType = $workType;
    }

    /**
     * @return string
     */
    public function getStartedOn()
    {
        return $this->startedOn;
    }

    /**
     * @param string $startedOn
     */
    public function setStartedOn($startedOn)
    {
        $this->startedOn = $startedOn;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param \DateTime $startedAt
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return \DateTime
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    /**
     * @param \DateTime $endedAt
     */
    public function setEndedAt($endedAt)
    {
        $this->endedAt = $endedAt;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return bool
     */
    public function getInvoiceAble()
    {
        return $this->invoiceAble;
    }

    /**
     * @param bool $invoiceAble
     */
    public function setInvoiceAble($invoiceAble)
    {
        $this->invoiceAble = $invoiceAble;
    }
}