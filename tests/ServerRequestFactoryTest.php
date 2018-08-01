<?php

use PHPUnit\Framework\TestCase;
use Bulldog\HttpFactory\FactoryBuilder;

class ServerRequestFactoryTest extends TestCase
{
    public function testCreateServerGuzzleRequest()
    {
        $serverRequest = (FactoryBuilder::get('guzzle'))->serverRequestFactory();

        $params = ['name' => 'value'];

        $r = $serverRequest->createServerRequest('GET', '/', $params);
        $this->assertSame($params, $r->getServerParams());
    }

    public function testCreateServerZendRequest()
    {
        $serverRequest = (FactoryBuilder::get('zend'))->serverRequestFactory();

        $params = ['name' => 'value'];

        $r = $serverRequest->createServerRequest('GET', '/', $params);
        $this->assertSame($params, $r->getServerParams());
    }
}
