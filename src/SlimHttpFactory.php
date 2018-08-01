<?php

namespace Bulldog\HttpFactory;

use Bulldog\HttpFactory\Factories\Slim\RequestFactory;
use Bulldog\HttpFactory\Factories\Slim\ResponseFactory;
use Bulldog\HttpFactory\Factories\Slim\ServerRequestFactory;
use Bulldog\HttpFactory\Factories\Slim\StreamFactory;
use Bulldog\HttpFactory\Factories\Slim\UploadedFileFactory;
use Bulldog\HttpFactory\Factories\Slim\UriFactory;

class SlimHttpFactory implements HttpFactoryInterface
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
