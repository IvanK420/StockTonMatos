<?php

namespace App\Repository;

use App\Entity\Canne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CanneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Canne::class);
    }

    // méthodes de requête personnalisées peuvent être ajoutées ici
}
