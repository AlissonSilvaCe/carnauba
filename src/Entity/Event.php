<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $name;

    /**
     * @ORM\Column(type="date")
     */
    private $initialDate;

    /**
     * @ORM\Column(type="date")
     */
    private $finalDate;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $local;

    /**
     * @ORM\Column(type="string")
     */
    private $organizerName;

    /**
     * @ORM\Column(type="string")
     */
    private $representantLocalName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;


    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getInitialDate()
    {
        return $this->initialDate;
    }

    public function getFinalDate()
    {
        return $this->finalDate;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function getOrganizerName()
    {
        return $this->organizerName;
    }

    public function getRepresentantLocalName()
    {
        return $this->representantLocalName;
    }
    
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setInitialDate($initialDate)
    {
        $this->initialDate = $initialDate;
    }

    public function setFinalDate($finalDate)
    {
        $this->finalDate = $finalDate;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function setLocal($local)
    {
        $this->local = $local;
    }

    public function setOrganizerName($organizerName)
    {
        $this->organizerName = $organizerName;
    }

    public function setRepresentantLocalName($representantLocalName)
    {
        $this->representantLocalName = $representantLocalName;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
