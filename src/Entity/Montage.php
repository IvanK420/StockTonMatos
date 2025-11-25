<?php

namespace App\Entity;

use App\Repository\MontageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MontageRepository::class)]
class Montage extends Materiel
{
    #[ORM\Column(length: 255)]
    private ?string $taille = null;

    #[ORM\Column]
    private ?int $quantite = null;

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): static
    {
        $this->taille = $taille;

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
}
