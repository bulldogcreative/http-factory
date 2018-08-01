<?php

namespace Bulldog\HttpFactory;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
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
