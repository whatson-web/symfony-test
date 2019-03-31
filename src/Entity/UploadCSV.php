<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UploadCSVRepository")
 */
class UploadCSV
{

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Please, upload a CVS file.")
     * @Assert\File()
     */
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
