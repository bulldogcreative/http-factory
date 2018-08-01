<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UriInterface;
use Bulldog\HttpFactory\FactoryBuilder;

class UriFactoryTest extends TestCase
{
    public function testCreateUriGuzzle()
    {
        $uriFactory = (FactoryBuilder::get('guzzle'))->uriFactory();
        $r = $uriFactory->createUri('/');

        $this->assertInstanceOf(UriInterface::class, $r);
    }

    public function testCreateUriZend()
    {
        $uriFactory = (FactoryBuilder::get('zend'))->uriFactory();
        $r = $uriFactory->createUri('/');

        $this->assertInstanceOf(UriInterface::class, $r);
    }
}
