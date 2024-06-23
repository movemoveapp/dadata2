<?php

namespace MoveMoveApp\DaData2\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static findRussianOrganization(string[] $array)
 */
class DaDataAddress extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dadata_address';
    }
}
