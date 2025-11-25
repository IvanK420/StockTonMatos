<?php

namespace App\Entity;

use App\Repository\DetailAchatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailAchatRepository::class)]
class DetailAchat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $prixAchat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $DateAchat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixAchat(): ?float
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(float $prixAchat): static
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getDateAchat(): ?\DateTime
    {
        return $this->DateAchat;
    }

    public function setDateAchat(\DateTime $DateAchat): static
    {
        $this->DateAchat = $DateAchat;

        return $this;
    }
}
