<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UriInterface;
use Bulldog\HttpFactory\Factories\UriFactory;

class UriFactoryTest extends TestCase
{
    public function testCreateUri()
    {
        $uriFactory = new UriFactory();
        $r = $uriFactory->createUri('/');
        
        $this->assertInstanceOf(UriInterface::class, $r);
    }
}
