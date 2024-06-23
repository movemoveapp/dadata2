<?php

namespace MoveMoveApp\DaData2\Objects\Organization\By;

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
        'data'                  => 'Organization\\By\\Organization',
    ];
}
