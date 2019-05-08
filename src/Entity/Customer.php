<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="date")
     */
    private $birthDate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Appointment", mappedBy="customer")
     */
    private $listAppointment;

    public function __construct()
    {
        $this->listAppointment = new ArrayCollection();
    } 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
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
            $listAppointment->setCustomer($this);
        }

        return $this;
    }

    public function removeListAppointment(Appointment $listAppointment): self
    {
        if ($this->listAppointment->contains($listAppointment)) {
            $this->listAppointment->removeElement($listAppointment);
            // set the owning side to null (unless already changed)
            if ($listAppointment->getCustomer() === $this) {
                $listAppointment->setCustomer(null);
            }
        }

        return $this;
    }

}
