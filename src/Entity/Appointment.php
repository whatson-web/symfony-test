<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as ASSERT;
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
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="appointments")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="appointments")
     * @ASSERT\NotBlank()
     */
    private $idCustomer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Place", inversedBy="appointments")
     * @ASSERT\NotBlank()
     */
    private $idPlace;

    /**
     * @ORM\Column(type="datetime")
     * @ASSERT\NotBlank()
     * @ASSERT\DateTime()
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
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
