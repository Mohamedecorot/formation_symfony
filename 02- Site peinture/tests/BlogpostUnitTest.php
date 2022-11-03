<?php

namespace App\Tests;

use App\Entity\Blogpost;
use App\Entity\Commentaire;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class BlogpostUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();
        $user = new User();
        $commentaire = new Commentaire();

        $blogpost->setTitre('titre')
                 ->setCreatedAt($datetime)
                 ->setContenu('contenu')
                 ->setSlug('slug')
                 ->setUser($user)
                 ->addCommentaire($commentaire);

        $this->assertTrue($blogpost->getTitre() === 'titre');
        $this->assertTrue($blogpost->getCreatedAt() === $datetime);
        $this->assertTrue($blogpost->getContenu() === 'contenu');
        $this->assertTrue($blogpost->getSlug() === 'slug');
        $this->assertTrue($blogpost->getUser() === $user);
        $this->assertContains($commentaire, $blogpost->getCommentaires());
    }

    public function testIsFalse()
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();
        $user = new User();
        $commentaire = new Commentaire();

        $blogpost->setTitre('titre')
                 ->setCreatedAt($datetime)
                 ->setContenu('contenu')
                 ->setSlug('slug')
                 ->setUser(new User())
                 ->addCommentaire($commentaire);

        $this->assertFalse($blogpost->getTitre() === 'false');
        $this->assertFalse($blogpost->getCreatedAt() === new DateTime());
        $this->assertFalse($blogpost->getContenu() === 'false');
        $this->assertFalse($blogpost->getSlug() === 'false');
        $this->assertFalse($blogpost->getSlug() === $user);
        $this->assertFalse($blogpost->getUser() === new User());
        $this->assertNotContains(new Commentaire, $blogpost->getCommentaires());
    }

    public function testIsEmpty()
    {
        $blogpost = new Blogpost();

        $this->assertEmpty($blogpost->getId());
        $this->assertEmpty($blogpost->getTitre());
        $this->assertEmpty($blogpost->getCreatedAt());
        $this->assertEmpty($blogpost->getContenu());
        $this->assertEmpty($blogpost->getSlug());
        $this->assertEmpty($blogpost->getUser());
        $this->assertEmpty($blogpost->getCommentaires());
    }

    public function testAddGetRemoveCommentaire()
    {
        $blogpost = new Blogpost();
        $commentaire = new Commentaire();

        $this->assertEmpty($blogpost->getCommentaires());

        $blogpost->addCommentaire($commentaire);
        $this->assertContains($commentaire, $blogpost->getCommentaires());

        $blogpost->removeCommentaire($commentaire);
        $this->assertEmpty($blogpost->getCommentaires());
    }
}
