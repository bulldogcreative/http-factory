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
    public function requestFactory()
    {
        return new RequestFactory();
    }

    /**
     * @return ResponseFactory
     */
    public function responseFactory()
    {
        return new ResponseFactory();
    }

    /**
     * @return ServerRequestFactory
     */
    public function serverRequestFactory()
    {
        return new ServerRequestFactory();
    }

    /**
     * @return StreamFactory
     */
    public function streamFactory()
    {
        return new StreamFactory();
    }

    /**
     * @return UploadedFileFactory
     */
    public function uploadedFileFactory()
    {
        return new UploadedFileFactory();
    }

    /**
     * @return UriFactory
     */
    public function uriFactory()
    {
        return new UriFactory();
    }
}
