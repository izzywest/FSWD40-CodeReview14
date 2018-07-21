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
     * @var string
     *
     * @ORM\Column(name="event_name", type="string", length=255)
     */
    private $eventName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_date", type="datetime")
     */
    private $eventDate;

    /**
     * @var string
     *
     * @ORM\Column(name="event_desc", type="string", length=255)
     */
    private $eventDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="event_img", type="string", length=255)
     */
    private $eventImg;

    /**
     * @var int
     *
     * @ORM\Column(name="event_capacity", type="integer")
     */
    private $eventCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="event_mail", type="string", length=255)
     */
    private $eventMail;

    /**
     * @var string
     *
     * @ORM\Column(name="event_phone", type="string", length=255)
     */
    private $eventPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="event_url", type="string", length=255)
     */
    private $eventUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="event_type", type="string", length=255)
     */
    private $eventType;

    /**
     * @var string
     *
     * @ORM\Column(name="event_street", type="string", length=255)
     */
    private $eventStreet;

    /**
     * @var int
     *
     * @ORM\Column(name="event_streetN", type="integer")
     */
    private $eventStreetN;

    /**
     * @var int
     *
     * @ORM\Column(name="event_zip", type="integer")
     */
    private $eventZip;

    /**
     * @var string
     *
     * @ORM\Column(name="event_city", type="string", length=255)
     */
    private $eventCity;


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
     * Set eventName
     *
     * @param string $eventName
     *
     * @return Event
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     *
     * @return Event
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set eventTime
     *
     * @param \DateTime $eventTime
     *
     * @return Event
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = $eventTime;

        return $this;
    }

    /**
     * Get eventTime
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Set eventDesc
     *
     * @param string $eventDesc
     *
     * @return Event
     */
    public function setEventDesc($eventDesc)
    {
        $this->eventDesc = $eventDesc;

        return $this;
    }

    /**
     * Get eventDesc
     *
     * @return string
     */
    public function getEventDesc()
    {
        return $this->eventDesc;
    }

    /**
     * Set eventImg
     *
     * @param string $eventImg
     *
     * @return Event
     */
    public function setEventImg($eventImg)
    {
        $this->eventImg = $eventImg;

        return $this;
    }

    /**
     * Get eventImg
     *
     * @return string
     */
    public function getEventImg()
    {
        return $this->eventImg;
    }

    /**
     * Set eventCapacity
     *
     * @param integer $eventCapacity
     *
     * @return Event
     */
    public function setEventCapacity($eventCapacity)
    {
        $this->eventCapacity = $eventCapacity;

        return $this;
    }

    /**
     * Get eventCapacity
     *
     * @return int
     */
    public function getEventCapacity()
    {
        return $this->eventCapacity;
    }

    /**
     * Set eventMail
     *
     * @param string $eventMail
     *
     * @return Event
     */
    public function setEventMail($eventMail)
    {
        $this->eventMail = $eventMail;

        return $this;
    }

    /**
     * Get eventMail
     *
     * @return string
     */
    public function getEventMail()
    {
        return $this->eventMail;
    }

    /**
     * Set eventPhone
     *
     * @param string $eventPhone
     *
     * @return Event
     */
    public function setEventPhone($eventPhone)
    {
        $this->eventPhone = $eventPhone;

        return $this;
    }

    /**
     * Get eventPhone
     *
     * @return string
     */
    public function getEventPhone()
    {
        return $this->eventPhone;
    }

    /**
     * Set eventUrl
     *
     * @param string $eventUrl
     *
     * @return Event
     */
    public function setEventUrl($eventUrl)
    {
        $this->eventUrl = $eventUrl;

        return $this;
    }

    /**
     * Get eventUrl
     *
     * @return string
     */
    public function getEventUrl()
    {
        return $this->eventUrl;
    }

    /**
     * Set eventType
     *
     * @param string $eventType
     *
     * @return Event
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set eventStreet
     *
     * @param string $eventStreet
     *
     * @return Event
     */
    public function setEventStreet($eventStreet)
    {
        $this->eventStreet = $eventStreet;

        return $this;
    }

    /**
     * Get eventStreet
     *
     * @return string
     */
    public function getEventStreet()
    {
        return $this->eventStreet;
    }

    /**
     * Set eventStreetN
     *
     * @param integer $eventStreetN
     *
     * @return Event
     */
    public function setEventStreetN($eventStreetN)
    {
        $this->eventStreetN = $eventStreetN;

        return $this;
    }

    /**
     * Get eventStreetN
     *
     * @return int
     */
    public function getEventStreetN()
    {
        return $this->eventStreetN;
    }

    /**
     * Set eventZip
     *
     * @param integer $eventZip
     *
     * @return Event
     */
    public function setEventZip($eventZip)
    {
        $this->eventZip = $eventZip;

        return $this;
    }

    /**
     * Get eventZip
     *
     * @return int
     */
    public function getEventZip()
    {
        return $this->eventZip;
    }

    /**
     * Set eventCity
     *
     * @param string $eventCity
     *
     * @return Event
     */
    public function setEventCity($eventCity)
    {
        $this->eventCity = $eventCity;

        return $this;
    }

    /**
     * Get eventCity
     *
     * @return string
     */
    public function getEventCity()
    {
        return $this->eventCity;
    }
}

