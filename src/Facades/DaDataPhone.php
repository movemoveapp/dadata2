<?php

namespace MoveMoveApp\DaData2\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static clean(string[] $array)
 */
class DaDataPhone extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dadata_phone';
    }
}
