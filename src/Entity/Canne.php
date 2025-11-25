<?php

namespace App\Entity;

use App\Entity\Materiel;
use Doctrine\ORM\Mapping as ORM;

class Canne extends Materiel
{
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $taille = null;

    #[ORM\Column(nullable: true)]
    private ?int $grammage = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(?string $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getGrammage(): ?int
    {
        return $this->grammage;
    }

    public function setGrammage(?int $grammage): static
    {
        $this->grammage = $grammage;

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
