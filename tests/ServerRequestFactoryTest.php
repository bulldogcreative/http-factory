<?php

use PHPUnit\Framework\TestCase;
use Bulldog\HttpFactory\GuzzleHttpFactory;

class ServerRequestFactoryTest extends TestCase
{
    public function testCreateServerRequest()
    {
        $serverRequest = (new GuzzleHttpFactory)->serverRequestFactory();

        $params = ['name' => 'value'];

        $r = $serverRequest->createServerRequest('GET', '/', $params);
        $this->assertSame($params, $r->getServerParams());
    }
}
