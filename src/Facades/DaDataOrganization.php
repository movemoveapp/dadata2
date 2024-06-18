<?php

namespace MoveMoveApp\DaData2\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method public string findOrganizationById(array $parameters)
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
