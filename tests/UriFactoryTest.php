<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UriInterface;
use Bulldog\HttpFactory\FactoryBuilder;

class UriFactoryTest extends TestCase
{
    public function testCreateUri()
    {
        $uriFactory = (FactoryBuilder::get('guzzle'))->uriFactory();
        $r = $uriFactory->createUri('/');

        $this->assertInstanceOf(UriInterface::class, $r);
    }
}
