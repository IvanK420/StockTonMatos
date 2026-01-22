<?php

namespace App\DataFixtures;

use App\Entity\CategoryCanne;
use App\Entity\CategoryFil;
use App\Entity\CategoryLeurre;
use App\Entity\CategoryMontage;
use App\Entity\CategoryMoulin;
use App\Entity\User;
use App\Entity\Canne;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private readonly UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $categoriesCannes = ['Cannes Casting', 'Cannes Spinning', 'Cannes Traîne', 'Cannes Télescopique'];

        foreach ($categoriesCannes as $nom) {
            // Crée une instance de l'entité fille
            $categoryCanne = new CategoryCanne();

            // Le nom est hérité de la classe mère Category
            $categoryCanne->setNom($nom);
            $categoryCanne->setImage('https://placehold.co/150');

            $manager->persist($categoryCanne);
        }

        $categoriesLeurre = ['leurre souple', 'Poisson nageur','Jig'];

        foreach ($categoriesLeurre as $nom) {
            // Crée une instance de l'entité fille
            $categoryLeurre = new CategoryLeurre();

            // Le nom est hérité de la classe mère Category
            $categoryLeurre->setNom($nom);
            $categoryLeurre->setImage('https://placehold.co/150');
            $manager->persist($categoryLeurre);
        }

        $categoriesFil = ['Nylon','Tresse'];

        foreach ($categoriesFil as $nom) {
            // Crée une instance de l'entité fille
            $categoryFil = new CategoryFil();

            // Le nom est hérité de la classe mère Category
            $categoryFil->setNom($nom);
            $categoryFil->setImage('https://placehold.co/150');
            $manager->persist($categoryFil);

        }

        $categoriesMoulin=['Moulins Spinning','Moulins Casting'];

        foreach ($categoriesMoulin as $nom) {
            // Crée une instance de l'entité fille
            $categoryMoulin = new CategoryMoulin();

            // Le nom est hérité de la classe mère Category
            $categoryMoulin->setNom($nom);
            $categoryMoulin->setImage('https://placehold.co/150');
            $manager->persist($categoryMoulin);
        }

        $categoriesMontage=['Emerillon','Agraphe','Hameçon', 'Anneaux brisé'];

        foreach ($categoriesMontage as $nom) {
            // Crée une instance de l'entité fille
            $categoryMontage = new CategoryMontage();

            // Le nom est hérité de la classe mère Category
            $categoryMontage->setNom($nom);
            $categoryMontage->setImage('https://placehold.co/150');
            $manager->persist($categoryMontage);
        }

        $emplacements = ['Garage', 'Cave', 'Placard', 'Boîte à pêche'];
        foreach ($emplacements as $nom) {
            $emplacement = new \App\Entity\Emplacement();
            $emplacement->setNom($nom);
            $emplacement->setImage('https://placehold.co/150');
            $emplacement->setQrCodeData('QR_'.$nom);
            $manager->persist($emplacement);
        }
        $emplacement = $manager->getRepository(\App\Entity\Emplacement::class)->findOneBy(['nom' => 'Garage']);
        $category = $manager->getRepository(Category::class)->findOneBy(['nom' => 'Cannes Spinning']);
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
    $userTest = new User();
    $userTest->setEmail('j@doe.test');
    $userTest->setPseudo('johndoe');
    // Hash du mot de passe via le hasher configuré (bcrypt/argon selon config)
    $hashedPassword = $this->passwordHasher->hashPassword($userTest, 'test');
    $userTest->setPassword($hashedPassword);
    $manager->persist($userTest);

        $manager->flush();
    }
}
