<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

class PlaceFile
{
 
    /**
     * @Assert\File(
     *     maxSize = "1024k",
     *     mimeTypes = {"application/csv"},
     *     mimeTypesMessage = "Seul l'importation de fichier csv est autorisée"
     * )
     */
    private $file;


    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }
}
