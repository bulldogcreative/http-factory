<?php

namespace Bulldog\HttpFactory;

class FactoryBuilder
{
    public static function get($choice): HttpFactoryInterface
    {
        switch($choice) {
            case 'guzzle':
                return new GuzzleHttpFactory;
            break;
        }
    }
}
