# PSR-17 HTTP Factory library

[![Build Status](https://travis-ci.org/bulldogcreative/http-factory.svg?branch=master)](https://travis-ci.org/bulldogcreative/http-factory)

This library aims to provide a simple implementation of PSR-17 (HTTP Factories).
It current supports Guzzle/Psr7 and Zend Diactoros. Installation and usage
examples are below, but if you have any questions or issues, please
create an issue.

## Installation

```bash
composer require bulldog/http-factory
```

## Usage

You can use the [FactoryBuilder](src/FactoryBuilder.php) class to create the
HTTP Factory of your choice, or you can instantiate them directly. Currently
your choices are `guzzle` and `zend`. Each factory implements
[HttpFactoryInterface](src/Interfaces/HttpFactoryInterface.php). Since this
library uses PSR-17 all of the individual factories returned will implement
their corresponding PSR-17 interface. For more detailed usage, please see
the [tests](tests/) folder.

### FactoryBuilder

```php
<?php

require 'vendor/autoload.php';

use Bulldog\HttpFactory\FactoryBuilder;
$zendFactory = FactoryBuilder::get('zend');
```

### RequestFactory

Since we can use `guzzle` or `zend`, I'll show both examples here, but only
one in the rest of the examples. But you should know you can use them
interchangeably.

#### Zend

```php
<?php

require 'vendor/autoload.php';

use Bulldog\HttpFactory\FactoryBuilder;
$factory = FactoryBuilder::get('zend');
$requestFactory = $factory->requestFactory();
$r = $requestFactory->createRequest('GET', 'http://localhost');
```

#### Guzzle

You'll notice the only difference between the example above and the one below
is we specify `guzzle` as the parameter to the `get` method.

```php
<?php

require 'vendor/autoload.php';

use Bulldog\HttpFactory\FactoryBuilder;
$factory = FactoryBuilder::get('guzzle');
$requestFactory = $factory->requestFactory();
$r = $requestFactory->createRequest('GET', 'http://localhost');
```

#### Without FactoryBuilder

You don't have to use `FactoryBuilder` to get an HTTP Factory. See below.

```php
<?php

require 'vendor/autoload.php';

use Bulldog\HttpFactory\GuzzleHttpFactory;
$factory = new GuzzleHttpFactory();
$requestFactory = $factory->requestFactory();
$r = $requestFactory->createRequest('GET', 'http://localhost');
```

### ResponseFactory

In the rest of the examples, I'll only show one example using `zend` with the `FactoryBuilder`.

```php
<?php

require 'vendor/autoload.php';

use Bulldog\HttpFactory\FactoryBuilder;
$factory = FactoryBuilder::get('zend');
$responseFactory = $factory->responseFactory();
$r = $responseFactory->createResponse(200, 'OK');
```

### ServerRequestFactory

```php
<?php

require 'vendor/autoload.php';

use Bulldog\HttpFactory\FactoryBuilder;
$factory = FactoryBuilder::get('zend');
$reqFactory = $factory->serverRequestFactory();
$params = ['name' => 'value'];
$r = $reqFactory->createServerRequest('GET', '/', $params);
```

### StreamFactory

```php
<?php

require 'vendor/autoload.php';

use Bulldog\HttpFactory\FactoryBuilder;
$httpFactory = FactoryBuilder::get('zend');
$factory = $httpFactory->streamFactory();
$params = ['name' => 'value'];
$r = $factory->createStream('php://memory');
```

### UploadedFileFactory

```php
<?php

require 'vendor/autoload.php';

use Bulldog\HttpFactory\FactoryBuilder;
$httpFactory = FactoryBuilder::get('zend');

$streamFactory = $httpFactory->streamFactory();
$resource = $streamFactory->createStream('php://temp');

$factory = $httpFactory->uploadedFileFactory();
$params = ['name' => 'value'];
$r = $factory->createUploadedFile(
    $resource,
    1,
    \UPLOAD_ERR_OK,
    'filename.txt',
    'txt'
);
```

### UriFactory

```php
<?php

require 'vendor/autoload.php';

use Bulldog\HttpFactory\FactoryBuilder;
$httpFactory = FactoryBuilder::get('zend');
$factory = $httpFactory->uriFactory();
$r = $factory->createUri('/');
```

## Links

* [guzzle/psr7](https://github.com/guzzle/psr7)
* [zendframework/zend-diactoros](https://github.com/zendframework/zend-diactoros)
