<?php

namespace Bulldog\HttpFactory;

class FactoryMaker
{
    public static function getFactory($choice)
    {
        switch($choice) {
            case 'guzzle':
                return new GuzzleHttpFactory;
            break;
        }
    }
}
