<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Bulldog\HttpFactory\FactoryBuilder;

class ResponseFactoryTest extends TestCase
{
    public function testCreateGuzzleResponse()
    {
        $guzzleFactory = FactoryBuilder::get('guzzle');
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

    public function testNotFoundGuzzleResponse()
    {
        $guzzleFactory = FactoryBuilder::get('guzzle');
        $responseFactory = $guzzleFactory->responseFactory();
        $r = $responseFactory->createResponse(404);
        $this->assertSame(404, $r->getStatusCode());
        $this->assertSame('Not Found', $r->getReasonPhrase());
    }
}
