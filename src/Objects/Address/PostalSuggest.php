<?php

namespace MoveMoveApp\DaData2\Objects\Address;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string       $value
 * @property string       $unrestricted_value
 * @property Postal[]     $data
 */
class PostalSuggest extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Address\\Postal[]',
    ];
}
