<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\MaterielRepository;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: MaterielRepository::class)]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "discr", type: "string")]
#[ORM\DiscriminatorMap(["materiel" => "Materiel", "moulin" => "Moulin", "fil" => "Fil", "leurre" => "Leurre", "montage" => "Montage", "canne" => "Canne"])]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\ManyToOne(inversedBy: 'materiels')]
    private ?Category $category = null;

    #[ORM\ManyToOne(inversedBy: 'materiels')]
    private ?Emplacement $emplacement = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?MaterielDetail $materielDetail = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $Marque): static
    {
        $this->marque = $Marque;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $Nom): static
    {
        $this->nom = $Nom;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $Category): static
    {
        $this->category = $Category;

        return $this;
    }

    public function getEmplacement(): ?Emplacement
    {
        return $this->emplacement;
    }

    public function setEmplacement(?Emplacement $Emplacement): static
    {
        $this->emplacement = $Emplacement;

        return $this;
    }

    public function getMaterielDetail(): ?MaterielDetail
    {
        return $this->materielDetail;
    }

    public function setMaterielDetail(?MaterielDetail $MaterielDetail): static
    {
        $this->materielDetail = $MaterielDetail;

        return $this;
    }
}
