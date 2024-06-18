<?php

namespace MoveMoveApp\DaData2\Methods\Organization;


use MoveMoveApp\DaData2\Methods\BaseMethod;

/**
 * Searches for companies and individual entrepreneurs:
 *  - by Tax Identification Number (TIN), Primary State Registration Number (PSRN), and Tax Registration Reason Code (TRRC);
 *  - by name (full and abbreviated);
 *  - by full name (for individual entrepreneurs);
 *  - by company executive's full name;
 *  - by address up to the street level.
 *
 * @link https://dadata.ru/api/suggest/party/
 */
class SuggestOrganizationMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint    = 'rs/suggest/party';
    protected string $expect        = 'Organization';
    protected array  $parameters    = [
        'query'             => 'string',
        'count'             => 'integer',
        'type'              => 'string',
        'status'            => 'array',
        'okved'             => 'string',
        'locations'         => 'array',
        'locations_boost'   => 'array',
    ];
}
