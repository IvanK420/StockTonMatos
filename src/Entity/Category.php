<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;

#[ApiResource(
    // operations: [
    //     new Get(normalizationContext: ['groups' => ['read:category']]),
    //     new GetCollection(normalizationContext: ['groups' => ['read:category']])
    // ]
    normalizationContext: ['groups' => ['read:category']],
    forceEager: false,
)]
#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ORM\InheritanceType('SINGLE_TABLE')]

#[ORM\DiscriminatorMap([
    'base' => Category::class,
    'canne' => CategoryCanne::class,
    'moulin' => CategoryMoulin::class,
    'fil' => CategoryFil::class,
    'leurre' => CategoryLeurre::class,
    'montage' => CategoryMontage::class,
])]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
     #[Groups(['read:category'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
     #[Groups(['read:category'])]
    private ?string $nom = null;

    /**
     * @var Collection<int, Materiel>
     */
    #[ORM\OneToMany(targetEntity: Materiel::class, mappedBy: 'category')]
    #[Groups(['read:category'])]
    private Collection $materiels;

    #[ORM\Column(length: 255)]
     #[Groups(['read:category'])]
    private ?string $image = null;

    public function __construct()
    {
        $this->materiels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Materiel>
     */
    public function getMateriels(): Collection
    {
        return $this->materiels;
    }

    public function addMateriel(Materiel $materiel): static
    {
        if (!$this->materiels->contains($materiel)) {
            $this->materiels->add($materiel);
            $materiel->setCategory($this);
        }

        return $this;
    }

    public function removeMateriel(Materiel $materiel): static
    {
        if ($this->materiels->removeElement($materiel)) {
            // set the owning side to null (unless already changed)
            if ($materiel->getCategory() === $this) {
                $materiel->setCategory(null);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
