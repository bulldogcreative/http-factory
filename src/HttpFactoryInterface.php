<?php

namespace Bulldog\HttpFactory;

interface HttpFactoryInterface
{
    public function requestFactory(): RequestInterface;

    public function responseFactory(): ResponseInterface;

    public function serverRequestFactory(): ServerRequestInterface;

    public function streamFactory(): StreamInterface;

    public function uploadedFileFactory(): UploadedFileInterface;

    public function uriFactory(): UriInterface;
}
