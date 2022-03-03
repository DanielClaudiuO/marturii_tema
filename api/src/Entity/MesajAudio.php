<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MesajAudioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MesajAudioRepository::class)]
#[ApiResource]
class MesajAudio
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nume;

    #[ORM\Column(type: 'string', length: 255)]
    private $titlu;

    #[ORM\Column(type: 'date', nullable: true)]
    private $data;

    #[ORM\Column(type: 'string', length: 255)]
    private $path;

    #[ORM\ManyToOne(targetEntity: Marturii::class, inversedBy: 'mesajAudioID')]
    private $marturiiID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNume(): ?string
    {
        return $this->nume;
    }

    public function setNume(string $nume): self
    {
        $this->nume = $nume;

        return $this;
    }

    public function getTitlu(): ?string
    {
        return $this->titlu;
    }

    public function setTitlu(string $titlu): self
    {
        $this->titlu = $titlu;

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

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getMarturiiID(): ?Marturii
    {
        return $this->marturiiID;
    }

    public function setMarturiiID(?Marturii $marturiiID): self
    {
        $this->marturiiID = $marturiiID;

        return $this;
    }
}
