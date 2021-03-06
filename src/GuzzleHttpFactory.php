<?php

namespace Bulldog\HttpFactory;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Bulldog\HttpFactory\Factories\Guzzle\RequestFactory;
use Bulldog\HttpFactory\Factories\Guzzle\ResponseFactory;
use Bulldog\HttpFactory\Factories\Guzzle\ServerRequestFactory;
use Bulldog\HttpFactory\Factories\Guzzle\StreamFactory;
use Bulldog\HttpFactory\Factories\Guzzle\UploadedFileFactory;
use Bulldog\HttpFactory\Factories\Guzzle\UriFactory;
use Bulldog\HttpFactory\Interfaces\HttpFactoryInterface;

class GuzzleHttpFactory implements HttpFactoryInterface
{
    /**
     * @return RequestFactory
     */
    public function requestFactory(): RequestFactoryInterface
    {
        return new RequestFactory();
    }

    /**
     * @return ResponseFactory
     */
    public function responseFactory(): ResponseFactoryInterface
    {
        return new ResponseFactory();
    }

    /**
     * @return ServerRequestFactory
     */
    public function serverRequestFactory(): ServerRequestFactoryInterface
    {
        return new ServerRequestFactory();
    }

    /**
     * @return StreamFactory
     */
    public function streamFactory(): StreamFactoryInterface
    {
        return new StreamFactory();
    }

    /**
     * @return UploadedFileFactory
     */
    public function uploadedFileFactory(): UploadedFileFactoryInterface
    {
        return new UploadedFileFactory();
    }

    /**
     * @return UriFactory
     */
    public function uriFactory(): UriFactoryInterface
    {
        return new UriFactory();
    }
}
