<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AppointmentRepository")
 */
class Appointment
{
    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="appointments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="appointments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCustomer;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Place", inversedBy="appointments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idPlace;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    public function __construct($idUser, $idCustomer, $idPlace)
    {
        $this->idUser = $idUser;
        $this->idCustomer = $idCustomer;
        $this->idPlace = $idPlace;
    }

    public function getIdUser(): ?user
    {
        return $this->idUser;
    }

    public function setIdUser(?user $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdCustomer(): ?Customer
    {
        return $this->idCustomer;
    }

    public function setIdCustomer(?Customer $idCustomer): self
    {
        $this->idCustomer = $idCustomer;

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
