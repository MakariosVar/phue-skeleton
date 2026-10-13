<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

final class HomeTest extends TestCase
{
    public function testHomePageReturnsOk(): void
    {
        $response = $this->get('/');

        $this->assertSame(200, $response->getStatusCode());
    }
}
