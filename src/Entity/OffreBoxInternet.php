<?php

namespace App\Entity;

use App\Repository\OffreBoxInternetRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Annotation\UploadableField;

/**
 * @ORM\Entity(repositoryClass=OffreBoxInternetRepository::class)
 */
class OffreBoxInternet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @UploadableField(property="image", path="uploads/box-internet")
     */
    private $imageFichier = null;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getImageFichier(): ?\Symfony\Component\HttpFoundation\File\File
    {
        return $this->imageFichier;
    }

    public function setImageFichier($imageFichier): self
    {
        $this->imageFichier = $imageFichier;

        return $this;
    }
}
