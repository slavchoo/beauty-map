<?php

namespace YourApp\Tests;

use Silex\WebTestCase;

class HomePageTest extends WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../../../app.php';
        $app['session.test'] = true;
        $app['debug'] = true;
        $app['exception_handler']->disable();

        return $app;
    }

    public function testIndexPage()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
    }
}
