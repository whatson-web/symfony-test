<?php
// src/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Appointment", mappedBy="user")
     */
    private $listAppointment;  

    public function __construct()
    {
        parent::__construct();
        $this->listAppointment = new ArrayCollection();
        // your own logic
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Appointment[]
     */
    public function getListAppointment(): Collection
    {
        return $this->listAppointment;
    }

    public function addListAppointment(Appointment $listAppointment): self
    {
        if (!$this->listAppointment->contains($listAppointment)) {
            $this->listAppointment[] = $listAppointment;
            $listAppointment->setUser($this);
        }

        return $this;
    }

    public function removeListAppointment(Appointment $listAppointment): self
    {
        if ($this->listAppointment->contains($listAppointment)) {
            $this->listAppointment->removeElement($listAppointment);
            // set the owning side to null (unless already changed)
            if ($listAppointment->getUser() === $this) {
                $listAppointment->setUser(null);
            }
        }

        return $this;
    }
}