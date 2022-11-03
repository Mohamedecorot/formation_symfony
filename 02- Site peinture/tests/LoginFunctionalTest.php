<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginFunctionalTest extends WebTestCase
{
    public function testShouldDisplayLoginPage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Ouvrir une session');
    }

    public function testVisitingWhileLoggedIn()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $buttonCrawlerNode = $crawler->selectButton('Ouvrir une session');
        $form = $buttonCrawlerNode->form();

        $form = $buttonCrawlerNode->form([
            'email' => 'user@test.com',
            'password' => 'password'
        ]);

        $client->submit($form);

        $crawler = $client->request('GET', '/login');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('div', 'You are logged in as user@test.com');
    }

    public function testShouldDisplayLogout(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/logout');

        $this->assertResponseIsSuccessful();
    }
}
