<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Phue\Core\Application;
use Phue\Core\Request;
use Phue\Core\Response;

abstract class TestCase extends BaseTestCase
{
    /**
     * @var Application
     */
    protected Application $app;

    /**
     * Set up the test case.
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $basePath = dirname(__DIR__);
        $this->app = new Application($basePath);

        // load controllers of the application
        $this->app->getRouter()->scanControllers($basePath . '/App/Controllers', 'App\\Controllers');
    }

    /**
     * Send a GET request to the application.
     * @param string $uri
     * @return Response
     */
    protected function get(string $uri): Response
    {
        $request = new Request('GET', $uri);
        return $this->app->handle($request);
    }

    /**
     * Send a POST request to the application.
     * @param string $uri
     * @param array $body
     * @return Response
     */
    protected function post(string $uri, array $body = []): Response
    {
        $request = new Request('POST', $uri, $body);
        return $this->app->handle($request);
    }
}
