<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Bulldog\HttpFactory\FactoryBuilder;

class RequestFactoryTest extends TestCase
{
    public function testCreateGuzzleRequest()
    {
        $requestFactory = (FactoryBuilder::get('guzzle'))->requestFactory();
        $result = $requestFactory->createRequest('GET', 'http://localhost');
        $this->assertInstanceOf(RequestInterface::class, $result);
        $this->assertEquals($result->getMethod(), 'GET');
        $this->assertEquals($result->getHeaders()['Host'][0], 'localhost');
    }

    public function testCreateZendRequest()
    {
        $requestFactory = (FactoryBuilder::get('zend'))->requestFactory();
        $result = $requestFactory->createRequest('GET', 'http://localhost');
        $this->assertInstanceOf(RequestInterface::class, $result);
        $this->assertEquals($result->getMethod(), 'GET');
        $this->assertEquals($result->getHeaders()['Host'][0], 'localhost');
    }
}
