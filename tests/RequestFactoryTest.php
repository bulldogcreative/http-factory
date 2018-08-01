<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Bulldog\HttpFactory\Factories\Guzzle\RequestFactory;

class RequestFactoryTest extends TestCase
{
    public function testCreateRequest()
    {
        $requestFactory = new RequestFactory();
        $result = $requestFactory->createRequest('GET', 'http://localhost');
        $this->assertInstanceOf(RequestInterface::class, $result);
        $this->assertEquals($result->getMethod(), 'GET');
        $this->assertEquals($result->getHeaders()['Host'][0], 'localhost');
    }
}
