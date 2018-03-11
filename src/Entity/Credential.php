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
    private $checkin_date;
    
    /**
     * @ORM\Column(type="timestamp")
     */
    private $checkin_time;

    /**
     * @ORM\Column(type="integer")
     */
    private $event_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $participant_id;

    /**
     * @ORM\Column(type="integer", default="0")
     */
    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function getCheckin_date()
    {
        return $this->checkin_date;
    }

    public function getCheckin_time()
    {
        return $this->checkin_time;
    }

    public function getEvent_id()
    {
        return $this->event_id;
    }

    public function getParticipant_id()
    {
        return $this->participant_id;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setCheckin_date($checkin_date)
    {
        $this->checkin_date = $checkin_date;
    }

    public function setCheckin_time($checkin_time)
    {
        $this->checkin_time = $checkin_time;
    }

    public function setEvent_id($event_id)
    {
        $this->event_id = $event_id;
    }

    public function setParticipant_id($participant_id)
    {
        $this->participant_id = $participant_id;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}
