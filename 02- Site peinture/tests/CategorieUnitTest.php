<?php

namespace App\Tests;

use App\Entity\Categorie;
use App\Entity\Peinture;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $categorie = new Categorie();
        $peintures = new Peinture();

        $categorie->setNom('nom')
                  ->setDescription('description')
                  ->setSlug('slug')
                  ->addPeinture($peintures);

        $this->assertTrue($categorie->getNom() === 'nom');
        $this->assertTrue($categorie->__toString() === 'nom');
        $this->assertTrue($categorie->getDescription() === 'description');
        $this->assertTrue($categorie->getSlug() === 'slug');
        $this->assertContains($peintures, $categorie->getPeintures());
    }

    public function testIsFalse()
    {
        $categorie = new Categorie();
        $peintures = new Peinture();

        $categorie->setNom('nom')
                  ->setDescription('description')
                  ->setSlug('slug')
                  ->addPeinture($peintures);

        $this->assertFalse($categorie->getNom() === 'false');
        $this->assertFalse($categorie->__toString() === 'false');
        $this->assertFalse($categorie->getDescription() === 'false');
        $this->assertFalse($categorie->getSlug() === 'false');
        $this->assertNotContains(new Peinture, $categorie->getPeintures());
    }

    public function testIsEmpty()
    {
        $categorie = new Categorie();

        $this->assertEmpty($categorie->getId());
        $this->assertEmpty($categorie->getNom());
        $this->assertEmpty($categorie->getDescription());
        $this->assertEmpty($categorie->getSlug());
        $this->assertEmpty($categorie->getPeintures());
    }

    public function testAddGetRemovePeinture()
    {
        $categorie = new Categorie();
        $peinture = new Peinture();

        $this->assertEmpty($categorie->getPeintures());

        $categorie->addPeinture($peinture);
        $this->assertContains($peinture, $categorie->getPeintures());

        $categorie->removePeinture($peinture);
        $this->assertEmpty($categorie->getPeintures());
    }
}