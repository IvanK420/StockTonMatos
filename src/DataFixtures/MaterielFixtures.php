<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Canne;
use App\Entity\Leurre;
use App\Entity\Fil;
use App\Entity\Category;

class UserFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $category = $manager->getRepository(Category::class)->find(47);
       $cannes = ['Canne 1', 'Canne 2', 'Canne 3'];
         foreach ($cannes as $nom) {
              $canne = new Canne();
              $canne->setNom($nom);
              $canne->setImage('https://placehold.co/150');
              $canne->setTaille('2.10m');
              $canne->setGrammage(30);
              $canne->setCategory($category);
              $canne->setMarque('Marque X');
              $canne->setMaterielDetail(null);
              $manager->persist($canne);
         }
        $manager->flush();
    }

    public static function getGroups(): array
    {
        // On donne un nom au groupe (souvent le nom de la classe)
        return ['materiel-group'];
    }
}