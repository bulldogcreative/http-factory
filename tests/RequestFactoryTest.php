<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Bulldog\HttpFactory\GuzzleHttpFactory;

class RequestFactoryTest extends TestCase
{
    public function testCreateRequest()
    {
        $requestFactory = (new GuzzleHttpFactory)->requestFactory();
        $result = $requestFactory->createRequest('GET', 'http://localhost');
        $this->assertInstanceOf(RequestInterface::class, $result);
        $this->assertEquals($result->getMethod(), 'GET');
        $this->assertEquals($result->getHeaders()['Host'][0], 'localhost');
    }
}
