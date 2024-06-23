<?php

namespace MoveMoveApp\DaData2\Objects\Organization\Ru;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null        $value
 * @property string|null        $unrestricted_value
 * @property GranularAddress    $data
 */
class Address extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string|null',
        'unrestricted_value'    => 'string|null',
        'data'                  => 'Organization\\Ru\\GranularAddress'
    ];
}
