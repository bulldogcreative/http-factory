# http-factory

[![Build Status](https://travis-ci.org/bulldogcreative/http-factory.svg?branch=master)](https://travis-ci.org/bulldogcreative/http-factory)

## install

```bash
composer require bulldog/http-factory
```

## usage

### Http Factory

```php
<?php

$httpFactory = new Bulldog\HttpFactory\HttpFactory();
$httpFactory->requestFactory()->createRequest('GET', 'http://localhost');

$httpFactory->responseFactory()->createResponse(200, 'OK');

$httpFactory->serverRequestFactory()->createServerRequest('GET', 'http://localhost', []/*server params*/);

$stream = GuzzleHttp\Psr7\stream_for('hello!');
$resource = GuzzleHttp\Psr7\StreamWrapper::getResource($stream);
$httpFactory->streamFactory()->createStream('I am stream');
$httpFactory->streamFactory()->createStreamFromFile('hello.txt', 'r');
$httpFactory->streamFactory()->createStreamFromResource($resource);

$httpFactory->uploadedFileFactory()->createUploadedFile(
    $resource,
    5,
    \UPLOAD_ERR_OK,
    'hello.txt',
    'txt'
);

$httpFactory->uriFactory()->createUri('http://example.com/logo.png');

```

### Request Factory

Has the ability to create client requests.

```php
<?php

$requestFactory = new \Bulldog\HttpFactory\Factories\RequestFactory();
$requestFactory->createRequest('GET', 'http://localhost');
```

### Response Factory

Has the ability to create responses.

```php
<?php
$responseFactory = new \Bulldog\HttpFactory\Factories\ResponseFactory();
$responseFactory->createResponse(200, 'OK');
```

### Server Request Factory

Has the ability to create server requests.

```php
<?php
$serverRequestFactory = new \Bulldog\HttpFactory\Factories\ServerRequestFactory();
$serverRequestFactory->createServerRequest('GET', 'http://localhost', []/*server params*/);
```

### Stream Factory

Has the ability to create streams for requests and responses.

```php
<?php
$streamFactory = new \Bulldog\HttpFactory\Factories\StreamFactory();

$stream = GuzzleHttp\Psr7\stream_for('hello!');
$resource = GuzzleHttp\Psr7\StreamWrapper::getResource($stream);
$streamFactory->createStream('I am stream');
$streamFactory->createStreamFromFile('hello.txt', 'r');
$streamFactory->createStreamFromResource($resource);
```

### Uploaded File Factory

Has the ability to create streams for uploaded files.

```php
<?php
$stream = GuzzleHttp\Psr7\stream_for('hello!');
$resource = GuzzleHttp\Psr7\StreamWrapper::getResource($stream);
$uploadedFileFactory = new \Bulldog\HttpFactory\Factories\UploadedFileFactory();
$uploadedFileFactory->createUploadedFile(
    $resource,
    5,
    \UPLOAD_ERR_OK,
    'hello.txt',
    'txt'
);
```

### Uri Factory

Has the ability to creates URIs for client and server requests.

```php
<?php
$uriFactory = new \Bulldog\HttpFactory\Factories\UriFactory();
$uriFactory->createUri('http://example.com/logo.png');
```
