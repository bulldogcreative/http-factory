<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UriInterface;
use Bulldog\HttpFactory\GuzzleHttpFactory;

class UriFactoryTest extends TestCase
{
    public function testCreateUri()
    {
        $uriFactory = (new GuzzleHttpFactory)->uriFactory();
        $r = $uriFactory->createUri('/');

        $this->assertInstanceOf(UriInterface::class, $r);
    }
}
