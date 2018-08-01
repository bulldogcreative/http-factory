<?php

namespace Bulldog\HttpFactory\Factories\Zend;

use Zend\Diactoros\Uri;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\UriFactoryInterface;

class UriFactory implements UriFactoryInterface
{
    /**
     * Create a new URI.
     *
     * @param string $uri
     *
     * @return UriInterface
     *
     * @throws \InvalidArgumentException If the given URI cannot be parsed.
     */
    public function createUri(string $uri = ''): UriInterface
    {
        return new Uri($uri);
    }
}
