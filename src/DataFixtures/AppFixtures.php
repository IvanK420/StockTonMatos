<?php

namespace App\DataFixtures;

use App\Entity\CategoryCanne;
use App\Entity\CategoryFil;
use App\Entity\CategoryLeurre;
use App\Entity\CategoryMontage;
use App\Entity\CategoryMoulin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categoriesCannes = ['Casting', 'Spinning', 'Traîne', 'Télescopique'];

        foreach ($categoriesCannes as $nom) {
            // Crée une instance de l'entité fille
            $categoryCanne = new CategoryCanne();

            // Le nom est hérité de la classe mère Category
            $categoryCanne->setNom($nom);

            $manager->persist($categoryCanne);
        }

        $categoriesLeurre = ['leurre souple', 'Poisson nageur','Jig'];

        foreach ($categoriesLeurre as $nom) {
            // Crée une instance de l'entité fille
            $categoryLeurre = new CategoryLeurre();

            // Le nom est hérité de la classe mère Category
            $categoryLeurre->setNom($nom);

            $manager->persist($categoryLeurre);
        }

        $categoriesFil = ['Nylon','Tresse'];

        foreach ($categoriesFil as $nom) {
            // Crée une instance de l'entité fille
            $categoryFil = new CategoryFil();

            // Le nom est hérité de la classe mère Category
            $categoryFil->setNom($nom);

            $manager->persist($categoryFil);

        }

        $categoriesMoulin=['Spinning','Casting'];

        foreach ($categoriesMoulin as $nom) {
            // Crée une instance de l'entité fille
            $categoryMoulin = new CategoryMoulin();

            // Le nom est hérité de la classe mère Category
            $categoryMoulin->setNom($nom);

            $manager->persist($categoryMoulin);
        }

        $categoriesMontage=['Emerillon','Agraphe','Hameçon', 'Anneaux brisé'];

        foreach ($categoriesMontage as $nom) {
            // Crée une instance de l'entité fille
            $categoryMontage = new CategoryMontage();

            // Le nom est hérité de la classe mère Category
            $categoryMontage->setNom($nom);

            $manager->persist($categoryMontage);
        }

        $manager->flush();
    }
}
