<?php

use PHPUnit\Framework\TestCase;
use Bulldog\HttpFactory\GuzzleHttpFactory;

class StreamFactoryTest extends TestCase
{
    public function testCreateStream()
    {
        $streamFactory = (new GuzzleHttpFactory)->streamFactory();
        $r = $streamFactory->createStream('php://temp');
        $this->assertFalse(is_resource($r));
    }
}
