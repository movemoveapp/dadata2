<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;

/**
 * @property string|null $value
 * @property string|null $unrestricted_value
 * @property \MoveMoveApp\DaData2\Objects\Phone\Phone  $data
 */
class Phone extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string|null',
        'unrestricted_value'    => 'string|null',
        'data'                  => 'Phone\\Phone'
    ];
}
