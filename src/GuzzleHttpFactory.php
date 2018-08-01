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
