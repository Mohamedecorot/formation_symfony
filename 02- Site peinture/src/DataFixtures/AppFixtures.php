<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Blogpost;
use App\Entity\Peinture;
use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @codeCoverageIgnore
 */
class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        // Utilisation de Faker
        $faker = Factory::create('fr_FR');

        //creation d'un utilisateur
        $user = new User();

        $user->setEmail('user@test.com')
             ->setPrenom($faker->firstName())
             ->setNom($faker->lastName())
             ->setTelephone($faker->phoneNumber())
             ->setAPropos($faker->text())
             ->setInstagram('instagram')
             ->setRoles(['ROLE_PEINTRE']);

        $password = $this->encoder->encodePassword($user, 'password');
        $user->setPassword($password);

        $manager->persist($user);

        // Création de 10 blogpost
        for($i=0; $i<10; $i++ ){
            $blogpost = new Blogpost();

            $blogpost->setTitre($faker->words(3, true))
                     ->setCreatedAt($faker->dateTimeBetween('-6 month', 'now'))
                     ->setContenu($faker->text(350))
                     ->setUser($user)
                     ->setSlug($faker->slug(3));

            $manager->persist($blogpost);
        }

        // Création d'un blogpost pour les tests
        $blogpost = new Blogpost();

        $blogpost->setTitre('Blogpost test')
        ->setCreatedAt($faker->dateTimeBetween('-6 month', 'now'))
        ->setContenu($faker->text(350))
        ->setUser($user)
        ->setSlug('blogpost-test');

        $manager->persist($blogpost);

        // Création de 5 catégories
        for($k=0; $k<5; $k++){
            $categorie = new Categorie();

            $categorie->setNom($faker->word())
                      ->setDescription($faker->words(10, true))
                      ->setSlug($faker->slug());

            $manager->persist($categorie);


            // Création de 2 peintures/catégorie
            for($j=0; $j<2; $j++){
                $peinture = new Peinture();

                $peinture->setNom($faker->words(3, true))
                         ->setLargeur($faker->randomFloat(2, 20, 60))
                         ->setHauteur($faker->randomFloat(2, 20, 60))
                         ->setEnVente($faker->randomElement([true, false]))
                         ->setDateRealisation($faker->dateTimeBetween('-6 month', 'now'))
                         ->setCreatedAt($faker->dateTimeBetween('-6 month', 'now'))
                         ->setDescription($faker->text())
                         ->setPortfolio($faker->randomElement([true, false]))
                         ->setSlug($faker->slug())
                        //  ->setFile($faker->randomElement(['https://picsum.photos/200/200', 'https://loremflickr.com/200/200']))
                         ->setFile('placeholder.png')
                         ->addCategorie($categorie)
                         ->setPrix($faker->randomFloat(2, 100, 9999))
                         ->setUser($user);

                $manager->persist($peinture);
            }
        }

        // Catégorie de test
        $categorie = new Categorie();

        $categorie->setNom('categorie test')
                    ->setDescription($faker->words(10, true))
                    ->setSlug('categorie-test');

        $manager->persist($categorie);
        // peinture de test
        $peinture = new Peinture();

        $peinture->setNom('peinture test')
                ->setLargeur($faker->randomFloat(2, 20, 60))
                ->setHauteur($faker->randomFloat(2, 20, 60))
                ->setEnVente($faker->randomElement([true, false]))
                ->setDateRealisation($faker->dateTimeBetween('-6 month', 'now'))
                ->setCreatedAt($faker->dateTimeBetween('-6 month', 'now'))
                ->setDescription($faker->text())
                ->setPortfolio($faker->randomElement([true, false]))
                ->setSlug('peinture-test')
            //  ->setFile($faker->randomElement(['https://picsum.photos/200/200', 'https://loremflickr.com/200/200']))
                ->setFile('placeholder.png')
                ->addCategorie($categorie)
                ->setPrix($faker->randomFloat(2, 100, 9999))
                ->setUser($user);

        $manager->persist($peinture);

        $manager->flush();
    }
}
