<?php

namespace Bulldog\HttpFactory\Interfaces;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

interface HttpFactoryInterface
{
    public function requestFactory(): RequestFactoryInterface;

    public function responseFactory(): ResponseFactoryInterface;

    public function serverRequestFactory(): ServerRequestFactoryInterface;

    public function streamFactory(): StreamFactoryInterface;

    public function uploadedFileFactory(): UploadedFileFactoryInterface;

    public function uriFactory(): UriFactoryInterface;
}
