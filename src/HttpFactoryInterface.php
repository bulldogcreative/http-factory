<?php

namespace Bulldog\HttpFactory;

interface HttpFactoryInterface
{
    public function requestFactory();

    public function responseFactory();

    public function serverRequestFactory();

    public function streamFactory();

    public function uploadedFileFactory();

    public function uriFactory();
}
