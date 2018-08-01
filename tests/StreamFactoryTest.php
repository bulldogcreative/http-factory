<?php

use PHPUnit\Framework\TestCase;
use Bulldog\HttpFactory\FactoryBuilder;

class StreamFactoryTest extends TestCase
{
    public function testCreateGuzzleStream()
    {
        $streamFactory = (FactoryBuilder::get('guzzle'))->streamFactory();
        $r = $streamFactory->createStream('php://temp');
        $this->assertFalse(is_resource($r));
    }
}
