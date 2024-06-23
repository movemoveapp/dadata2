<?php

namespace MoveMoveApp\DaData2\Objects\Organization\Ru;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string       $value
 * @property string       $unrestricted_value
 * @property Organization $data
 */
class Suggest extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Organization\\Ru\\Organization',
    ];
}
