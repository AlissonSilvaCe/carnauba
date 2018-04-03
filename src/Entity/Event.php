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
    private $initial_date;

    /**
     * @ORM\Column(type="date")
     */
    private $final_date;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $local;

    /**
     * @ORM\Column(type="string")
     */
    private $organizer_name;

    /**
     * @ORM\Column(type="string")
     */
    private $representant_local_name;

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

    public function getInitial_date()
    {
        return $this->initial_date;
    }

    public function getFinal_date()
    {
        return $this->final_date;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function getOrganizer_name()
    {
        return $this->organizer_name;
    }

    public function getRepresentant_local_name()
    {
        return $this->representant_local_name;
    }
    
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setInitial_date($initial_date)
    {
        $this->initial_date = $initial_date;
    }

    public function setFinal_date($final_date)
    {
        $this->final_date = $final_date;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function setLocal($local)
    {
        $this->local = $local;
    }

    public function setOrganizer_name($organizer_name)
    {
        $this->organizer_name = $organizer_name;
    }

    public function setRepresentant_local_name($representant_local_name)
    {
        $this->representant_local_name = $representant_local_name;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createAt = $createAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
