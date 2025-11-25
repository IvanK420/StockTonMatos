<?php

namespace App\Entity;

use App\Repository\MoulinRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MoulinRepository::class)]
class Moulin extends Materiel
{
    #[ORM\Column]
    private ?int $taille = null;

    #[ORM\Column]
    private ?int $poids = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): static
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
