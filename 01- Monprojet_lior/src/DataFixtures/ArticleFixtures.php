<?php

namespace App\DataFixtures;

use DateTime;
use Faker\Factory;
use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        //Créer 3 catégories fakées
        for ($i = 1; $i <= 3; $i++) {
            $category = new Category;
            $category->setTitle($faker->sentence())
                ->setDescription($faker->paragraph());

            $manager->persist($category);

            // Créer entre 4 et 6 articles
            for ($j = 1; $j <= mt_rand(4, 6); $j++) {
                $article = new Article();

                // $content = '<p>' . implode('</p><p>', $faker->paragraphs(5)) . '</p>';
                // $content = '<p>' . join('</p><p>', $faker->paragraphs(5)) . '</p>';

                $article->setTitle($faker->sentence())
                    ->setContent($faker->paragraph())
                    ->setImage($faker->imageUrl())
                    ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                    ->setCategory($category);

                $manager->persist($article);

                // On donne des commentaires à l'article
                for ($k = 1; $k <= mt_rand(4, 10); $k++) {
                    $comment = new Comment();

                    // $content = '<p>' . implode('</p><p>', $faker->paragraphs(2)) . '</p>';
                    // $content = '<p>' . join('</p><p>', $faker->paragraphs(2)) . '</p>';



                    // $now = new \DateTime();
                    // $interval = $now->diff($article->getCreatedAt());
                    // $days = $interval->days;
                    // $minimum = '-' . $days . ' days';

                    $days = (new \DateTime())->diff($article->getCreatedAt())->days;

                    $comment->setAuthor($faker->name)
                        ->setContent($faker->paragraph())
                        ->setCreatedAt($faker->dateTimeBetween('-' . $days . ' days'))
                        ->setArticle($article);

                    $manager->persist($comment);
                }
            }
        }

        $manager->flush();
    }
}
