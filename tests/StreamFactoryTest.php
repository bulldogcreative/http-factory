<?php

use PHPUnit\Framework\TestCase;
use Bulldog\HttpFactory\Factories\StreamFactory;

class StreamFactoryTest extends TestCase
{
    public function testCreateStream()
    {
        $streamFactory = new StreamFactory();
        $r = $streamFactory->createStream('php://temp');
        $this->assertFalse(is_resource($r));
    }
}
