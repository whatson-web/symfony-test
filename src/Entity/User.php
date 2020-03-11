<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 * fields={"username"},
 * message="Un utilisateur utilise déjà ce nom d'utilisateur")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez renseigner votre Nom")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Le prénom saisi est trop court, il doit faire {{ limit }} caractères au minimum",
     *      maxMessage = "Le prénom saisi est trop long, il doit faire {{ limit }} caractères au maximum")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez renseigner votre Nom")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Le nom saisi est trop court, il doit faire {{ limit }} caractères au minimum",
     *      maxMessage = "Le nom saisi est trop long, il doit faire {{ limit }} caractères au maximum"
     * )
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez renseigner un nom d'utilisateur")
     * @Assert\Length(
     *      min = 5,
     *      max = 25,
     *      minMessage = "Ce nom d'utilisateur est trop court, il doit faire {{ limit }} caratères minimum",
     *      maxMessage = "Ce nom d'utilisateur est trop long, il doit faire {{ limit }} caratères maximum"
     * )
     * @Assert\Type(
     *      type = "alnum",
     *      message="Le nom d'utlisateur doit être composé de lettres et/ou de chiffres, sans espace."
     * )
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez saisir un mot de passe")
     * @Assert\Length(min=8, minMessage="Votre mot de passse doit contenir 8 caracteres minimum")
     */
    private $pass;

    /**
     * @Assert\EqualTo(propertyPath="pass", message="Les mots de passe sont differents")
     *
     */
    public $passConfirm;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Appointment", mappedBy="user")
     */
    private $appointments;

    public function __construct()
    {
        $this->appointments = new ArrayCollection();
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    public function getRoles() {
        return array('ROLE_USER');
    }

    public function getPassword() {
        return $this->pass;
    }

    public function getSalt() {}
    
    public function eraseCredentials() {}

    /**
     * @return Collection|Appointment[]
     */
    public function getAppointments(): Collection
    {
        return $this->appointments;
    }

    public function addAppointment(Appointment $appointment): self
    {
        if (!$this->appointments->contains($appointment)) {
            $this->appointments[] = $appointment;
            $appointment->setUser($this);
        }

        return $this;
    }

    public function removeAppointment(Appointment $appointment): self
    {
        if ($this->appointments->contains($appointment)) {
            $this->appointments->removeElement($appointment);
            // set the owning side to null (unless already changed)
            if ($appointment->getUser() === $this) {
                $appointment->setUser(null);
            }
        }

        return $this;
    }
}
