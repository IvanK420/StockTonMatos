<?php

namespace App\Entity;

use App\Repository\MaterielRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MaterielRepository::class)]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "discr", type: "string")]
#[ORM\DiscriminatorMap(["materiel" => "Materiel", "moulin" => "Moulin", "fil" => "Fil", "leurre" => "Leurre", "montage" => "Montage"])]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Marque = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\ManyToOne(inversedBy: 'materiels')]
    private ?Category $Category = null;

    #[ORM\ManyToOne(inversedBy: 'materiels')]
    private ?Emplacement $Emplacement = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?MaterielDetail $MaterielDetail = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(string $Marque): static
    {
        $this->Marque = $Marque;

        return $this;
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

    public function getCategory(): ?Category
    {
        return $this->Category;
    }

    public function setCategory(?Category $Category): static
    {
        $this->Category = $Category;

        return $this;
    }

    public function getEmplacement(): ?Emplacement
    {
        return $this->Emplacement;
    }

    public function setEmplacement(?Emplacement $Emplacement): static
    {
        $this->Emplacement = $Emplacement;

        return $this;
    }

    public function getMaterielDetail(): ?MaterielDetail
    {
        return $this->MaterielDetail;
    }

    public function setMaterielDetail(?MaterielDetail $MaterielDetail): static
    {
        $this->MaterielDetail = $MaterielDetail;

        return $this;
    }
}
