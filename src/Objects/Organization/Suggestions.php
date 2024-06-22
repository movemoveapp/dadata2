<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string       $value
 * @property string       $unrestricted_value
 * @property Organization $data
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Organization\\Organization',
    ];
}
