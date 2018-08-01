<?php

namespace Bulldog\HttpFactory;

use Bulldog\HttpFactory\Factories\Guzzle\RequestFactory;
use Bulldog\HttpFactory\Factories\Guzzle\ResponseFactory;
use Bulldog\HttpFactory\Factories\Guzzle\ServerRequestFactory;
use Bulldog\HttpFactory\Factories\Guzzle\StreamFactory;
use Bulldog\HttpFactory\Factories\Guzzle\UploadedFileFactory;
use Bulldog\HttpFactory\Factories\Guzzle\UriFactory;

class GuzzleHttpFactory implements HttpFactoryInterface
{
    /**
     * @return RequestFactory
     */
    public function requestFactory(): RequestInterface
    {
        return new RequestFactory();
    }

    /**
     * @return ResponseFactory
     */
    public function responseFactory(): ResponseInterface
    {
        return new ResponseFactory();
    }

    /**
     * @return ServerRequestFactory
     */
    public function serverRequestFactory(): ServerRequestInterface
    {
        return new ServerRequestFactory();
    }

    /**
     * @return StreamFactory
     */
    public function streamFactory(): StreamInterface
    {
        return new StreamFactory();
    }

    /**
     * @return UploadedFileFactory
     */
    public function uploadedFileFactory(): UploadedFileInterface
    {
        return new UploadedFileFactory();
    }

    /**
     * @return UriFactory
     */
    public function uriFactory(): UriInterface
    {
        return new UriFactory();
    }
}
