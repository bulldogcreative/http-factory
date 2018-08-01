<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Bulldog\HttpFactory\Factories\ServerRequestFactory;

class ServerRequestFactoryTest extends TestCase
{
    public function testCreateServerRequest()
    {
        $serverRequest = new ServerRequestFactory();
        
        $params = ['name' => 'value'];
        
        $r = $serverRequest->createServerRequest('GET', '/', $params);
        $this->assertSame($params, $r->getServerParams());
    }
}
