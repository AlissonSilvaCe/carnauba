<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CredentialRepository")
 */
class Credential
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $checkinDate;
    
    /**
     * @ORM\Column(type="time")
     */
    private $checkinTime;

    /**
     * @ORM\Column(type="integer")
     */
    private $eventId;

    /**
     * @ORM\Column(type="integer")
     */
    private $participantId;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function getCheckinDate()
    {
        return $this->checkinDate;
    }

    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    public function getEventId()
    {
        return $this->eventId;
    }

    public function getParticipantId()
    {
        return $this->participantId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setCheckinDate($checkinDate)
    {
        $this->checkinDate = $checkinDate;
    }

    public function setCheckinTime($checkinTime)
    {
        $this->checkinTime = $checkinTime;
    }

    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function setParticipantId($participantId)
    {
        $this->participantId = $participantId;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}
