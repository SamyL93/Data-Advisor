<?php

namespace App\Entity;

use App\Repository\CarteRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Annotation\UploadableField;


/**
 * @ORM\Entity(repositoryClass=CarteRepository::class)
 */
class Carte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $json;

    /**
     * @UploadableField(property="json", path="uploads/cartes")
     */
    private $jsonFile = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $identifier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJson(): ?string
    {
        return $this->json;
    }

    public function setJson(?string $json): self
    {
        $this->json = $json;
        return $this;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }
    public function getJsonFile(): ?\Symfony\Component\HttpFoundation\File\File
    {
        return $this->jsonFile;
    }

    public function setJsonFile($jsonFile): self
    {
        $this->jsonFile = $jsonFile;

        return $this;
    }
}
