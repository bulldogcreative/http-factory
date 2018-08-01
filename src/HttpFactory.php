<?php

namespace Bulldog\HttpFactory;

use Bulldog\HttpFactory\Factories\RequestFactory;
use Bulldog\HttpFactory\Factories\ResponseFactory;
use Bulldog\HttpFactory\Factories\ServerRequestFactory;
use Bulldog\HttpFactory\Factories\StreamFactory;
use Bulldog\HttpFactory\Factories\UploadedFileFactory;
use Bulldog\HttpFactory\Factories\UriFactory;

class HttpFactory implements HttpFactoryInterface
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
