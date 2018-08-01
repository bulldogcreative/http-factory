<?php

namespace Bulldog\HttpFactory;

use Bulldog\HttpFactory\Interfaces\HttpFactoryInterface;

class FactoryBuilder
{
    public static function get($choice): HttpFactoryInterface
    {
        switch ($choice) {
            case 'guzzle':
                return new GuzzleHttpFactory;
            break;
            case 'zend':
                return new ZendHttpFactory;
            break;
        }
    }
}
