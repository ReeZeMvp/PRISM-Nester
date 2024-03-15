<?php

namespace App\Entity;

use App\Repository\HarvestersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HarvestersRepository::class)]
class Harvesters
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $AdresseIPpriv = null;

    #[ORM\Column(length: 255)]
    private ?string $AdresseIPpub = null;

    #[ORM\Column(length: 255)]
    private ?string $AdresseMAC = null;

    #[ORM\Column(length: 255)]
    private ?string $Gateway = null;

    #[ORM\Column(length: 255)]
    private ?string $DNS = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getAdresseIPpriv(): ?string
    {
        return $this->AdresseIPpriv;
    }

    public function setAdresseIPpriv(string $AdresseIPpriv): static
    {
        $this->AdresseIPpriv = $AdresseIPpriv;

        return $this;
    }

    public function getAdresseIPpub(): ?string
    {
        return $this->AdresseIPpub;
    }

    public function setAdresseIPpub(string $AdresseIPpub): static
    {
        $this->AdresseIPpub = $AdresseIPpub;

        return $this;
    }

    public function getAdresseMAC(): ?string
    {
        return $this->AdresseMAC;
    }

    public function setAdresseMAC(string $AdresseMAC): static
    {
        $this->AdresseMAC = $AdresseMAC;

        return $this;
    }

    public function getGateway(): ?string
    {
        return $this->Gateway;
    }

    public function setGateway(string $Gateway): static
    {
        $this->Gateway = $Gateway;

        return $this;
    }

    public function getDNS(): ?string
    {
        return $this->DNS;
    }

    public function setDNS(string $DNS): static
    {
        $this->DNS = $DNS;

        return $this;
    }
}
