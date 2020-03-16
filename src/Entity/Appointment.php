<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AppointmentRepository")
 */
class Appointment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="appointments")
     */
    private $idUser;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Customer", inversedBy="appointments")
     */
    private $idCustomer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Place", inversedBy="appointments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idPlace;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    public function __construct()
    {
        $this->idUser = new ArrayCollection();
        $this->idCustomer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|User[]
     */
    public function getIdUser(): Collection
    {
        return $this->idUser;
    }

    public function addIdUser(User $idUser): self
    {
        if (!$this->idUser->contains($idUser)) {
            $this->idUser[] = $idUser;
        }

        return $this;
    }

    public function removeIdUser(User $idUser): self
    {
        if ($this->idUser->contains($idUser)) {
            $this->idUser->removeElement($idUser);
        }

        return $this;
    }

    /**
     * @return Collection|Customer[]
     */
    public function getIdCustomer(): Collection
    {
        return $this->idCustomer;
    }

    public function addIdCustomer(Customer $idCustomer): self
    {
        if (!$this->idCustomer->contains($idCustomer)) {
            $this->idCustomer[] = $idCustomer;
        }

        return $this;
    }

    public function removeIdCustomer(Customer $idCustomer): self
    {
        if ($this->idCustomer->contains($idCustomer)) {
            $this->idCustomer->removeElement($idCustomer);
        }

        return $this;
    }

    public function getIdPlace(): ?Place
    {
        return $this->idPlace;
    }

    public function setIdPlace(?Place $idPlace): self
    {
        $this->idPlace = $idPlace;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
