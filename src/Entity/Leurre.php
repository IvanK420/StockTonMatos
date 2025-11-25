<?php

namespace App\Entity;

use App\Repository\LeurreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeurreRepository::class)]
class Leurre extends Materiel
{
    #[ORM\Column(length: 255)]
    private ?string $taille = null;

    #[ORM\Column]
    private ?int $poids = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): static
    {
        $this->poids = $poids;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
