<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MarturiiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarturiiRepository::class)]
#[ApiResource]
class Marturii
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $prenume;

    #[ORM\Column(type: 'string', length: 255)]
    private $continut;

    #[ORM\Column(type: 'date', nullable: true)]
    private $data;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenume(): ?string
    {
        return $this->prenume;
    }

    public function setPrenume(string $prenume): self
    {
        $this->prenume = $prenume;

        return $this;
    }

    public function getContinut(): ?string
    {
        return $this->continut;
    }

    public function setContinut(string $continut): self
    {
        $this->continut = $continut;

        return $this;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(?\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }
}
