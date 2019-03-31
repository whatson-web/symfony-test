<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="please give a date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="appointment")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="give a customer")
     */
    private $idCustomer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Place", inversedBy="appointment")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="give a place")
     */
    private $idPlace;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="appointment")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;


    public function setIdUser($idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    public function setIdCustomer(int $idCustomer): self
    {
        $this->idCustomer = $idCustomer;

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

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getIdPlace(): ?IdPlace
    {
        return $this->idPlace;
    }

    public function setIdPlace(?IdPlace $idPlace): self
    {
        $this->idPlace = $idPlace;

        return $this;
    }

    public function getIdUser(): ?IdUser
    {
        return $this->idUser;
    }

    public function seIdtUser(?IdUser $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }
}
