<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ev_id", type="integer")
     */
    private $evId;

    /**
     * @var string
     *
     * @ORM\Column(name="ev_name", type="string", length=255)
     */
    private $evName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ev_date", type="datetime")
     */
    private $evDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ev_time", type="time")
     */
    private $evTime;

    /**
     * @var string
     *
     * @ORM\Column(name="ev_desc", type="string", length=255)
     */
    private $evDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="ev_img", type="string", length=255)
     */
    private $evImg;

    /**
     * @var int
     *
     * @ORM\Column(name="ev_cap", type="integer")
     */
    private $evCap;

    /**
     * @var string
     *
     * @ORM\Column(name="ev_email", type="string", length=255)
     */
    private $evEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="ev_phone", type="string", length=255)
     */
    private $evPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="ev_url", type="string", length=255)
     */
    private $evUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="ev_type", type="string", length=255)
     */
    private $evType;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_ev_address", type="integer")
     */
    private $fkEvAddress;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set evId
     *
     * @param integer $evId
     *
     * @return Event
     */
    public function setEvId($evId)
    {
        $this->evId = $evId;

        return $this;
    }

    /**
     * Get evId
     *
     * @return int
     */
    public function getEvId()
    {
        return $this->evId;
    }

    /**
     * Set evName
     *
     * @param string $evName
     *
     * @return Event
     */
    public function setEvName($evName)
    {
        $this->evName = $evName;

        return $this;
    }

    /**
     * Get evName
     *
     * @return string
     */
    public function getEvName()
    {
        return $this->evName;
    }

    /**
     * Set evDate
     *
     * @param \DateTime $evDate
     *
     * @return Event
     */
    public function setEvDate($evDate)
    {
        $this->evDate = $evDate;

        return $this;
    }

    /**
     * Get evDate
     *
     * @return \DateTime
     */
    public function getEvDate()
    {
        return $this->evDate;
    }

    /**
     * Set evTime
     *
     * @param \DateTime $evTime
     *
     * @return Event
     */
    public function setEvTime($evTime)
    {
        $this->evTime = $evTime;

        return $this;
    }

    /**
     * Get evTime
     *
     * @return \DateTime
     */
    public function getEvTime()
    {
        return $this->evTime;
    }

    /**
     * Set evDesc
     *
     * @param string $evDesc
     *
     * @return Event
     */
    public function setEvDesc($evDesc)
    {
        $this->evDesc = $evDesc;

        return $this;
    }

    /**
     * Get evDesc
     *
     * @return string
     */
    public function getEvDesc()
    {
        return $this->evDesc;
    }

    /**
     * Set evImg
     *
     * @param string $evImg
     *
     * @return Event
     */
    public function setEvImg($evImg)
    {
        $this->evImg = $evImg;

        return $this;
    }

    /**
     * Get evImg
     *
     * @return string
     */
    public function getEvImg()
    {
        return $this->evImg;
    }

    /**
     * Set evCap
     *
     * @param integer $evCap
     *
     * @return Event
     */
    public function setEvCap($evCap)
    {
        $this->evCap = $evCap;

        return $this;
    }

    /**
     * Get evCap
     *
     * @return int
     */
    public function getEvCap()
    {
        return $this->evCap;
    }

    /**
     * Set evEmail
     *
     * @param string $evEmail
     *
     * @return Event
     */
    public function setEvEmail($evEmail)
    {
        $this->evEmail = $evEmail;

        return $this;
    }

    /**
     * Get evEmail
     *
     * @return string
     */
    public function getEvEmail()
    {
        return $this->evEmail;
    }

    /**
     * Set evPhone
     *
     * @param string $evPhone
     *
     * @return Event
     */
    public function setEvPhone($evPhone)
    {
        $this->evPhone = $evPhone;

        return $this;
    }

    /**
     * Get evPhone
     *
     * @return string
     */
    public function getEvPhone()
    {
        return $this->evPhone;
    }

    /**
     * Set evUrl
     *
     * @param string $evUrl
     *
     * @return Event
     */
    public function setEvUrl($evUrl)
    {
        $this->evUrl = $evUrl;

        return $this;
    }

    /**
     * Get evUrl
     *
     * @return string
     */
    public function getEvUrl()
    {
        return $this->evUrl;
    }

    /**
     * Set evType
     *
     * @param string $evType
     *
     * @return Event
     */
    public function setEvType($evType)
    {
        $this->evType = $evType;

        return $this;
    }

    /**
     * Get evType
     *
     * @return string
     */
    public function getEvType()
    {
        return $this->evType;
    }

    /**
     * Set fkEvAddress
     *
     * @param integer $fkEvAddress
     *
     * @return Event
     */
    public function setFkEvAddress($fkEvAddress)
    {
        $this->fkEvAddress = $fkEvAddress;

        return $this;
    }

    /**
     * Get fkEvAddress
     *
     * @return int
     */
    public function getFkEvAddress()
    {
        return $this->fkEvAddress;
    }
}

