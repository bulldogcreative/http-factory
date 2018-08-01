<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Bulldog\HttpFactory\GuzzleHttpFactory;
use Bulldog\HttpFactory\Factories\Guzzle\ResponseFactory;

class ResponseFactoryTest extends TestCase
{
    public function testCreateResponse()
    {
        $guzzleFactory = new GuzzleHttpFactory();
        $responseFactory = $guzzleFactory->responseFactory();
        $r = $responseFactory->createResponse(200, 'OK');
        $this->assertInstanceOf(ResponseInterface::class, $r);
        $this->assertSame(200, $r->getStatusCode());
        $this->assertSame('OK', $r->getReasonPhrase());
        $this->assertSame('1.1', $r->getProtocolVersion());
        $this->assertSame([], $r->getHeaders());
        $this->assertInstanceOf('Psr\Http\Message\StreamInterface', $r->getBody());
        $this->assertSame('', (string) $r->getBody());

        $streamFactory = $guzzleFactory->streamFactory();
        $resource = $streamFactory->createStream('hello world');
        $r = $r->withBody($resource);
        $this->assertSame('hello world', $r->getBody()->getContents());
    }

    public function testNotFoundResponse()
    {
        $guzzleFactory = new GuzzleHttpFactory();
        $responseFactory = $guzzleFactory->responseFactory();
        $r = $responseFactory->createResponse(404);
        $this->assertSame(404, $r->getStatusCode());
        $this->assertSame('Not Found', $r->getReasonPhrase());
    }
}
