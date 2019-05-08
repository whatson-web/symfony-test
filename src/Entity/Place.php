<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlaceRepository")
 */
class Place
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string")
     */
    private $ZipCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Appointment", mappedBy="place")
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->ZipCode;
    }

    public function setZipCode(string $ZipCode): self
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

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
            $listAppointment->setPlace($this);
        }

        return $this;
    }

    public function removeListAppointment(Appointment $listAppointment): self
    {
        if ($this->listAppointment->contains($listAppointment)) {
            $this->listAppointment->removeElement($listAppointment);
            // set the owning side to null (unless already changed)
            if ($listAppointment->getPlace() === $this) {
                $listAppointment->setPlace(null);
            }
        }

        return $this;
    }
}
