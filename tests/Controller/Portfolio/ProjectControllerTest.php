<?php

namespace App\Tests\Controller\Portfolio;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ProjectControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/portfolio/project');

        self::assertResponseIsSuccessful();
    }
}
