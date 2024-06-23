<?php

namespace MoveMoveApp\DaData2\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static findOrganizationById(string[] $array)
 * @method static suggestOrganization(string[] $array)
 * @method static affiliatedOrganization(string[] $array)
 */
class DaDataOrganization extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dadata_organization';
    }
}
