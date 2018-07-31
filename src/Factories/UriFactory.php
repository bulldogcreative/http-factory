<?php

namespace Bulldog\HttpFactory\Factories;

use Psr\Http\Message\UriInterface;
use Psr\Http\Message\UriFactoryInterface;

class UriFactory implements UriFactoryInterface
{
    /**
     * Create a new URI.
     *
     * @param string $uri The URI to parse.
     *
     * @throws \InvalidArgumentException If the given URI cannot be parsed.
     */
    public function createUri(string $uri = ''): UriInterface
    {

    }
}
