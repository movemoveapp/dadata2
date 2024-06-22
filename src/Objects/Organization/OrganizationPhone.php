<?php

namespace MoveMoveApp\DaData2\Objects\Organization;

use MoveMoveApp\DaData2\Objects\BaseObject;
use MoveMoveApp\DaData2\Objects\Phone\Phone;

/**
 * @property string|null $value
 * @property string|null $unrestricted_value
 * @property Phone       $data
 */
class OrganizationPhone extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string|null',
        'unrestricted_value'    => 'string|null',
        'data'                  => 'Phone\\Phone'
    ];
}
